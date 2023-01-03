<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Login</title>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}build/assets/app.5442aa01.css">

</head>

<body class=" bg-white">
    <div class="login-wrap flex align-items-center flex-wrap justify-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8 col-md-6 col-lg-7">
                    <img src="{{ asset('/') }}img/login_logo.png" alt="">
                </div>
                <div class="col-sm-4 col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow rounded-lg">
                        <div class="login-title">
                            <h2 class="text-center text-base-100">LOGIN</h2>
                            {{-- <center></a>Koperasi Bina Usaha Permata</a></center> --}}
                        </div>
                        @if (Session::has('loginError'))
                            <div class="alert bg-error shadow-md my-4 text-white" data-theme="light">
                                <div>
                                    <i class="fa-solid fa-triangle-exclamation fa-lg"></i>
                                    <span>{{ Session::get('loginError') }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="mx-3 lg:mx-10">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <label class="input-group input-group-md" data-theme="cmyk">
                                    <span class="bg-sky-400 hidden md:block"><i
                                            class="fa-solid fa-user mt-3 text-white"></i></span>
                                    <input type="text"
                                        class="flex-1 input input-bordered @error('username')
                                      is-invalid text-white
                                      @enderror"
                                        placeholder="Username" name="username" id="username" required />
                                    @error('username')
                                        <div class="invalid-feedback text-white">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </label>
                                <label class="input-group input-group-md" data-theme="cmyk">
                                    <span class="bg-sky-400 hidden md:block"><i
                                            class="fa-solid fa-lock mt-3 text-white"></i></span>
                                    <input type="password" class="flex-1 input input-bordered"
                                        placeholder="**********"name="password" id="inputPassword" required>
                                </label>
                                <div class="-mt-4 mb-4">
                                    <label class="label cursor-pointer">
                                        <span>Tampilkan Password</span>
                                        <input type="checkbox" onclick="myFunction()"
                                            class="checkbox checkbox-info text-white" />
                                    </label>
                                </div>
                                <div>
                                    <input
                                        class="btn bg-sky-400 hover:bg-sky-500 text-white btn-md btn-block mb-0 border-0"
                                        type="submit" value="Masuk">

                                    <div class="mt-2">
                                        <a href="{{ route('login.forget') }}" class="hover:underline">
                                            Lupa Password?
                                        </a>
                                    </div>
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
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="{{ asset('/') }}scripts/core.js"></script>
    <script src="{{ asset('/') }}scripts/script.min.js"></script>
    <script src="{{ asset('/') }}scripts/process.js"></script>
    <script src="{{ asset('/') }}scripts/layout-settings.js"></script>
</body>

</html>
