<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Reset Password</title>

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
                        <div class="login-title mb-3">
                            <h2 class="text-center text-base-100">Reset Password</h2>
                        </div>
                        <div>
                            <form action="{{ route('resetPassword') }}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{ $reset->token }}">
                                <div class="mx-3 lg:mx-10 my-3">
                                    Halo, <b>{{ $reset->user->firstname . ' ' . $reset->user->lastname }}</b>! Anda
                                    dapat mengisi password baru anda di bawah ini.
                                </div>
                                <div class="mx-3 lg:mx-10">
                                    <label class="input-group input-group-md" data-theme="cmyk">
                                        <span class="bg-sky-400"><i class="fa-solid fa-lock text-white"></i></span>
                                        <input type="password"
                                            class="flex-1 input input-bordered @error('password')
                                      is-invalid
                                      @enderror"
                                            placeholder="Password" name="password" required />
                                        @error('password')
                                            <div class="invalid-feedback text-red-400">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mx-3 lg:mx-10">
                                    <label class="input-group input-group-md" data-theme="cmyk">
                                        <span class="bg-sky-400"><i class="fa-solid fa-lock text-white"></i></span>
                                        <input type="password"
                                            class="flex-1 input input-bordered @error('password_confirmation')
                                      is-invalid
                                      @enderror"
                                            placeholder="Konfirmasi Password" name="password_confirmation" required />
                                        @error('password_confirmation')
                                            <div class="invalid-feedback text-red-400">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mx-3 lg:mx-10 my-3">
                                    <label class="label cursor-pointer">
                                        <span>Tampilkan Password</span>
                                        <input type="checkbox" onclick="showPassword()"
                                            class="checkbox checkbox-info text-white" />
                                    </label>
                                </div>
                                <div class="mx-3 lg:mx-10">
                                    <input
                                        class="btn bg-sky-400 hover:bg-sky-500 text-white btn-md btn-block mb-0 border-0"
                                        type="submit" value="Reset Password">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script>
        function showPassword() {
            document.querySelectorAll('input[type="text"],input[type="password"]')
                .forEach(form => {
                    if (form.type === "password") {
                        form.type = "text";
                    } else {
                        form.type = "password";
                    }
                })
        }
    </script>
    <script src="{{ asset('/') }}scripts/core.js"></script>
    <script src="{{ asset('/') }}scripts/script.min.js"></script>
    <script src="{{ asset('/') }}scripts/process.js"></script>
    <script src="{{ asset('/') }}scripts/layout-settings.js"></script>
</body>

</html>
