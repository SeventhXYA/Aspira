<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}styles/style.css">
    @vite('resources/css/app.css')
</head>

<body class="login-page bg-slate-100">
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('/') }}img/login_logo.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow rounded-lg">
                        <div class="login-title">
                            <h2 class="text-center text-base-100">LOGIN</h2>
                            {{-- <center></a>Koperasi Bina Usaha Permata</a></center> --}}
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group custom">
                                <input type="text"
                                    class="form-control form-control-lg
                                @error('username')
                                is-invalid text-white
                                @enderror"
                                    placeholder="Username" name="username" id="username" required>
                                @error('username')
                                    <div class="invalid-feedback text-white">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg"
                                    placeholder="**********"name="password" id="password" required>
                            </div>
                            {{-- <div class="row pb-30">
                                <div class="col-8">
                                    <div class="forgot-password"><a href="forgot-password.html">Lupa Password</a></div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="btn bg-sky-400 text-white btn-md btn-block mb-0 border-0"
                                        type="submit" value="Masuk">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('/') }}scripts/core.js"></script>
    <script src="{{ asset('/') }}scripts/script.min.js"></script>
    <script src="{{ asset('/') }}scripts/process.js"></script>
    <script src="{{ asset('/') }}scripts/layout-settings.js"></script>
</body>

</html>
