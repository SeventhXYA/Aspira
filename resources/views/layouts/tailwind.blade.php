<!DOCTYPE html>
<html data-theme="night">

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
</head>
<title>{{ $title }}</title>

@vite('resources/css/app.css')
</head>

<body class="bg-slate-100 min-h-screen">

    @include('partials.navbar')
    {{-- @include('partials.sidebar') --}}

    <main>
        @yield('container')
    </main>
    <footer>
        @include('partials.btmnav')
    </footer>
    {{-- <script src="{{ asset('/') }}js/script.js"></script> --}}

    <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    {{-- <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <!-- AdminLTE -->
    {{-- <script src="{{ asset('/') }}dist/js/adminlte.js"></script> --}}
    {{-- <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('/') }}dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('/') }}dist/js/pages/dashboard3.js"></script> --}}

    {{-- <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('/') }}plugins/sparklines/sparkline.js"></script>
    <script src="{{ asset('/') }}plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('/') }}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('/') }}plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('/') }}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('/') }}plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('/') }}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('/') }}dist/js/adminlte.js"></script>
    <script src="{{ asset('/') }}dist/js/demo.js"></script>
    <script src="{{ asset('/') }}dist/js/pages/dashboard.js"></script> --}}
    {{-- @livewireScripts --}}
</body>

</html>
