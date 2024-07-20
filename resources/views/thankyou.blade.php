<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Thank You">
    <meta name="description" content="">
    <title>Thank You</title>
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('thankyou.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('nicepage.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/app.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.13.8, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
</head>
<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-4 u-section-1" id="sec-df4b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/Asset21x.png" alt="" data-image-width="103" data-image-height="41">
            <h3 class="u-align-center u-text u-text-default u-text-1">Thank You</h3>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-aecd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-align-center-md u-align-center-sm u-align-center-xs u-image u-image-default u-preserve-proportions u-image-1" src="images/Asset11x.png" alt="" data-image-width="141" data-image-height="161">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                                <img class="custom-expanded u-align-center u-border-5 u-border-custom-color-5 u-image u-image-default u-image-2" src="{{ asset('Certificate/' . session('fileName')) }}" alt="" data-image-width="322" data-image-height="416">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h1 class="u-align-center u-custom-font u-font-lobster u-text u-text-custom-color-5 u-text-default u-text-1">Thank You</h1>
                                <h5 class="u-align-center u-custom-font u-font-lobster u-text u-text-custom-color-5 u-text-2">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                                </h5>
                                @if(session('fileName'))
                                    <p class="u-align-center u-text u-text-default u-text-3">
                                        Your certificate file name is: {{ session('fileName') }}
                                    </p>
                                    <a href="{{ asset('Certificate/' . session('fileName')) }}" class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-4 u-radius u-btn-2" download>Download e-Poster​ &amp; Share</a>
                                @else
                                    <p class="u-align-center u-text u-text-default u-text-3">
                                        No certificate available.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-3" id="sec-f2d1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1">POWRED BY SCIENTIMED @ 2024 </h5>
        </div>
    </section>
</body>
</html>
