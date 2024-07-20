<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('Home.css') }}" media="screen">
    <meta name="generator" content="Nicepage 6.13.8, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-4 u-section-1" id="sec-df4b">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                src="images/Asset21x.png" alt="" data-image-width="103" data-image-height="41">
            <h3 class="u-align-center u-text u-text-default u-text-1">REGISTRATION FOR PLEDGE</h3>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-aecd">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-1"
                src="images/Asset11x.png" alt="" data-image-width="141" data-image-height="161">
            <div class="u-align-center-md u-align-center-sm u-align-center-xs u-form u-form-1">
                <!-- Display Success or Error Message -->
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class='test-danger'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('fill_form_post') }}" method="POST" enctype="multipart/form-data"
                    class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form"
                    style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name">
                        <label for="name-d3f2" class="u-label">Dr Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-d3f2" name="name"
                            class="u-border-2 u-border-custom-color-5 u-input u-input-rectangle" value="{{ old('name') }}" required="">
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-d3f2" class="u-label">Dr Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-d3f2" name="email"
                            class="u-border-2 u-border-custom-color-5 u-input u-input-rectangle" value="{{ old('email') }}" required="">
                    </div>
                    <div class="u-form-group u-form-group-3">
                        <label for="speciality" class="u-label">Speciality</label>
                        <input type="text" placeholder="Enter your speciality" id="speciality" name="speciality"
                            class="u-border-2 u-border-custom-color-5 u-input u-input-rectangle" value="{{ old('speciality') }}">
                    </div>
                    <div class="u-form-group u-form-group-4">
                        <label for="upload-photo" class="u-label">Upload Photo</label>
                        <input type="file" id="upload-photo" name="photo"
                            class="u-border-2 u-border-custom-color-5 u-input u-input-rectangle">
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <button type="submit"
                            class="u-btn u-btn-submit u-button-style u-custom-color-4 u-btn-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-3" id="sec-f2d1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1">POWERED BY SCIENTIMED @ 2024 </h5>
        </div>
    </section>
</body>

</html>
