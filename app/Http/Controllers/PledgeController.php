<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pledge;

class PledgeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:pledges,email',
            'speciality' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2000000',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photoPath = $photo->storeAs('uploads', $photoName, 'public');
        } else {
            $photoPath = null;
        }

        // Store the validated data in the database
        Pledge::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'speciality' => $validatedData['speciality'],
            'photo' => $photoPath,
        ]);

        // Flash success message to the session
        return redirect()->route('ipledge')->with([
            'success' => 'Pledge registered successfully!',
            'email' => $validatedData['email']
        ]);
    }

    public function ipledge()
    {
        return view('ipledge');
    }

    public function download()
    {
        return view('thankyou');
    }

    public function updateFlag(Request $request)
    {
        $email = $request->input('email');

        // Find the pledge by email and update the flag
        $pledge = Pledge::where('email', $email)->first();
        if ($pledge) {
            $pledge->flag = 'yes';
            $pledge->save();
            $fileName = $this->schedule_id_edit_frame($email);

            // Save the file name in the database
            $pledge->certificate = $fileName;
            $pledge->save();

            session()->put('success', 'Pledge registered successfully!');
            session()->put('fileName', $fileName);
    
            return redirect()->route('download');
        }

        return redirect()->route('ipledge')->with('error', 'Pledge not found!');
    }

    public function schedule_id_edit_frame($email)
    {
        try {
            ini_set('memory_limit', '700M');

            // Fetch doctor data based on email
            $doctor_data = Pledge::where('email', $email)->first();
            if (!$doctor_data) {
                return response()->json(['error' => 'Doctor not found'], 404);
            }

            $fileName = uniqid() . '_' . time() . '.png';

            // Path to the frame image
            $framePath = public_path("images/img12.png");
            $frame = imagecreatefrompng($framePath);
            // Path to the photo image (ensure it's in PNG format)
            $photoPath1 = $doctor_data->photo;
            if (!$photoPath1) {
                return response()->json(['error' => 'Photo not found'], 404);
            }
            $imageData1 = file_get_contents(public_path('storage/' . $photoPath1));
            $photo = imagecreatefromstring($imageData1);

            // Get the dimensions of the frame image
            $frameWidth = imagesx($frame);
            $frameHeight = imagesy($frame);

            // Resize the photo image to fit into the frame
            $photoWidth = $frameWidth * 0.18;
            $photoHeight = $frameHeight * 0.11;
            $resizedPhoto = imagescale($photo, $photoWidth, $photoHeight);

            // Create a blank image to serve as the mask
            $mask = imagecreatetruecolor($photoWidth, $photoHeight);
            $maskTransparent = imagecolorallocate($mask, 0, 0, 0);
            imagecolortransparent($mask, $maskTransparent);

            // Merge the masked photo onto the frame
            imagecopymerge($frame, $resizedPhoto, 132, 53, 0, 0, $photoWidth, $photoHeight, 100);

            // Add text onto the image
            $textColor = imagecolorallocate($frame, 0, 0, 0); // Black color
            $text = $doctor_data->name;
            $font = public_path('font/Arial.ttf'); // Path to your font file
            imagettftext($frame, 20, 0, 460, 132, $textColor, $font, $text);

            // Save the merged image
            imagepng($frame, public_path('Certificate/' . $fileName));
            // Free up memory
            imagedestroy($frame);
            imagedestroy($resizedPhoto);
            imagedestroy($mask);
            return $fileName;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
