<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Lupa Password</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script src="https://kit.fontawesome.com/6f3103b13c.js" crossorigin="anonymous"></script>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/style.css">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app.5442aa01.css') }}">

</head>

<body class="login-page bg-white">
    <div class="login-wrap flex align-items-center flex-wrap justify-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8 col-md-6 col-lg-7">
                    <img src="{{ asset('/') }}img/login_logo.png" alt="">
                </div>
                <div class="col-sm-4 col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow rounded-lg">
                        <div class="login-title">
                            <h2 class="text-center text-base-100">{{ $title }}</h2>
                        </div>
                        <div class="mx-3 lg:mx-10 mb-8">
                            <p>{!! $message !!}</p>
                        </div>
                        @isset($button_title)
                            <div class="mx-3 lg:mx-10">
                                <a class="btn bg-sky-400 hover:bg-sky-500 text-white btn-md btn-block mb-0 border-0"
                                    href="{{ $button_href }}">{{ $button_title }}</a>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/') }}scripts/core.js"></script>
    <script src="{{ asset('/') }}scripts/script.min.js"></script>
    <script src="{{ asset('/') }}scripts/process.js"></script>
    <script src="{{ asset('/') }}scripts/layout-settings.js"></script>
</body>

</html>
