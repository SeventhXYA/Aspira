<!DOCTYPE html>
<html lang="en">

<head data-theme="light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/') }}build/assets/app.5442aa01.css"> --}}

    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">

</head>

<body>
    <div id="header" class="flex items-center justify-between">
        <img src="{{ asset('/') }}img/login_logo.png" class="w-44" alt="">
        <div>
            <div class="col-12">
                <h2 class="page-header text-black">
                    <small class="float-right">Tanggal Dicetak: {{ $date }}</small><br>
                    <small class="float-right">Dicetak Oleh: {{ auth()->user()->firstname }}
                        {{ auth()->user()->lastname }}</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <section>
            @foreach ($daily as $dl)
                <div class="row text-black w-full mt-7">
                    <div class="col-sm-4 ">
                        Dari
                        <address>
                            <strong>{{ $dl->user->firstname }} {{ $dl->user->lastname }}</strong><br>
                            {{ $dl->user->divisi->divisi }}<br>
                            {{ $dl->user->nohp }}<br>
                            Email: {{ $dl->user->email }}
                        </address>
                    </div>

                    <div class="col-sm-6 ">
                        <b class="uppercase">{{ $name }}</b><br>
                        <b>Tanggal Laporan Dibuat:</b> {{ $dl->created_at->format('Y-m-d') }}<br>
                        <br>
                        <b>Tanggal Kegiatan:</b> {{ $dl->date }}<br>
                        <b>Waktu Kegiatan:</b> {{ $dl->timestart }} s/d {{ $dl->timefinish }}<br>
                    </div>

                    <div class="col-sm-2 ">
                        <br><br>
                        <b class="text-xl">Progres:</b><br>
                        @if ($dl->progress >= 75)
                            <label class="text-4xl font-semibold" style="color: green">{{ $dl->progress }}%</label>
                        @elseif ($dl->progress >= 50)
                            <label class="text-4xl font-semibold" style="color: yellow">{{ $dl->progress }}%</label>
                        @elseif ($dl->progress >= 25)
                            <label class="text-4xl font-semibold" style="color: orange">{{ $dl->progress }}%</label>
                        @else
                            <label class="text-4xl font-semibold" style="color: red">{{ $dl->progress }}%</label>
                        @endif

                    </div>

                </div>

                <table class="table-compact text-black table-bordered w-full mt-5">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Rencana</th>
                            <th style="width: 20%;">Aktual</th>
                            <th style="width: 35%;">Deskripsi Kegiatan</th>
                            <th style="width: 25%;">Dokumentasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 20%;">{{ $dl->plan }}</td>
                            <td style="width: 20%;">{{ $dl->actual }}</td>
                            <td style="width: 35%;">{{ $dl->desc }}</td>
                            <td style="width: 25%;"><img src="{{ asset($dl->pict) }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
            <table class="table-compact text-black table-bordered w-full mt-10">
                <thead>
                    <tr>
                        <th style="width: 33%;">Pembina Generasi Permata</th>
                        <th style="width: 33%;">Di Review Oleh</th>
                        <th>Mengetahui</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>
                            <br><br><br><br>
                            Raka Pradipta Permadi
                        </td>
                        <td>
                            <br><br><br><br>
                            HPMT
                        </td>
                        <td>
                            <br><br><br><br>
                            PT Arutmin Indonesia Tambang Asamasam
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
