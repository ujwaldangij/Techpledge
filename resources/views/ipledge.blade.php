<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ipledge</title>
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('ipledge.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('nicepage.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/app.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 6.13.8, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ipledge">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-4 u-section-1" id="sec-df4b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                src="images/Asset21x.png" alt="" data-image-width="103" data-image-height="41">
            <h3 class="u-align-center u-text u-text-default u-text-1">I PLEDGE</h3>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-aecd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-1"
                src="images/Asset11x.png" alt="" data-image-width="141" data-image-height="161">
            <h4 class="u-align-center u-text u-text-1"> I agree to take part in I pledge Activity and for the
                information I provide to be shared with the [area] Partnership agencies and this in turn allows services
                that I use to share information about me and my family for the purpose of this [research / activity].
            </h4>
            
            <form action="{{ route('update_flag') }}" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{ session('email') }}">
                <button type="submit" class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-4 u-radius u-btn-1">I PLEDGE</button>
            </form>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-3" id="sec-f2d1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1">POWRED BY SCIENTIMED @ 2024 </h5>
        </div>
    </section>
</body>

</html>
