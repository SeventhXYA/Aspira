<html lang="en">

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/') }}build/assets/app.5442aa01.css"> --}}

    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">

</head>

<body>
    <div class="wrapper">
        <section>
            <div class="row mt-12 -mb-5">
                <div class="col-12">
                    <h2 class="page-header">
                        <img src="{{ asset('/') }}img/login_logo.png" class="w-44" alt="">
                        <small class="float-right">Date: {{ $date }}</small>
                    </h2>
                </div>

            </div>
            <table class="table table-bordered" style="font-size: 12px">
                <!-- head -->
                <thead>
                    <tr>
                        <td></td>
                        <th>Bisnis & Profit</th>
                        <th>Self-Development</th>
                        <th>Kelembagaan</th>
                        <th>Inovasi/Creativity</th>
                        <th>Morning Briefing & 5R</th>
                        <th>Technical Planning</th>
                        <th>Coffe Break</th>
                        <th>Evaluasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="font-bold">{{ $user->firstname }} {{ $user->lastname }}</td>
                            <td>
                                @if (!$user->totalBp)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalBp) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalSd)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalSd) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalKl)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalKl) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalIc)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalIc) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalMb)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalMb) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalCb)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalCb) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalTp)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalTp) }}
                                @endif
                            </td>
                            <td>
                                @if (!$user->totalEv)
                                    <span>-</span>
                                @else
                                    {{ gmdate('H:i:s', $user->totalEv) }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                            <br><br><br><br><br><br><br>
                            Raka Pradipta Permadi
                        </td>
                        <td>
                            <br><br><br><br><br><br><br>
                            HPMT
                        </td>
                        <td>
                            <br><br><br><br><br><br><br>
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
