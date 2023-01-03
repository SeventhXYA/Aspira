<!DOCTYPE html>
<html data-theme="night" class="bg-slate-100 ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Monitoring Kinerja Tim Unit Bisnis">
    <meta name="author" content="MKTUnitBisnis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('/') }}css/stylepomodoro.css">
    <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/6f3103b13c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">

    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
        integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <title>{{ $title }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}build/assets/app.5442aa01.css">
</head>

<body class="bg-slate-100">

    @include('partials.navbar')

    <main>
        @yield('container')
    </main>
    <footer>
        {{-- @include('partials.btmnav') --}}
    </footer>
    <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
</body>

</html>
