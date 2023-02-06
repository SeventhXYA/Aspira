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
    <script nonce="e819e30e-5b01-48a5-af85-cddac7ec9860">
        (function(w, d) {
            ! function(eK, eL, eM, eN) {
                eK.zarazData = eK.zarazData || {};
                eK.zarazData.executed = [];
                eK.zaraz = {
                    deferred: [],
                    listeners: []
                };
                eK.zaraz.q = [];
                eK.zaraz._f = function(eO) {
                    return function() {
                        var eP = Array.prototype.slice.call(arguments);
                        eK.zaraz.q.push({
                            m: eO,
                            a: eP
                        })
                    }
                };
                for (const eQ of ["track", "set", "debug"]) eK.zaraz[eQ] = eK.zaraz._f(eQ);
                eK.zaraz.init = () => {
                    var eR = eL.getElementsByTagName(eN)[0],
                        eS = eL.createElement(eN),
                        eT = eL.getElementsByTagName("title")[0];
                    eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
                    eK.zarazData.x = Math.random();
                    eK.zarazData.w = eK.screen.width;
                    eK.zarazData.h = eK.screen.height;
                    eK.zarazData.j = eK.innerHeight;
                    eK.zarazData.e = eK.innerWidth;
                    eK.zarazData.l = eK.location.href;
                    eK.zarazData.r = eL.referrer;
                    eK.zarazData.k = eK.screen.colorDepth;
                    eK.zarazData.n = eL.characterSet;
                    eK.zarazData.o = (new Date).getTimezoneOffset();
                    if (eK.dataLayer)
                        for (const eX of Object.entries(Object.entries(dataLayer).reduce(((eY, eZ) => ({
                                ...eY[1],
                                ...eZ[1]
                            }))))) zaraz.set(eX[0], eX[1], {
                            scope: "page"
                        });
                    eK.zarazData.q = [];
                    for (; eK.zaraz.q.length;) {
                        const e_ = eK.zaraz.q.shift();
                        eK.zarazData.q.push(e_)
                    }
                    eS.defer = !0;
                    for (const fa of [localStorage, sessionStorage]) Object.keys(fa || {}).filter((fc => fc
                        .startsWith("_zaraz_"))).forEach((fb => {
                        try {
                            eK.zarazData["z_" + fb.slice(7)] = JSON.parse(fa.getItem(fb))
                        } catch {
                            eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb)
                        }
                    }));
                    eS.referrerPolicy = "origin";
                    eS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
                    eR.parentNode.insertBefore(eS, eR)
                };
                ["complete", "interactive"].includes(eL.readyState) ? zaraz.init() : eK.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>

</head>

<body>
    <div class="wrapper">
        <section>
            <div class="row mt-12 -mb-5">
                <div class="col-12">
                    <h2 class="page-header text-black">
                        <span class="font-bold uppercase text-3xl">Generasi Permata : Interval Pomodoro</span>
                        <small class="float-right">Tanggal Dicetak: {{ $date }}</small><br>
                        <small class="float-right">Dicetak Oleh: {{ auth()->user()->firstname }}
                            {{ auth()->user()->lastname }}</small>
                    </h2>
                </div>

            </div>
            <table class="table table-bordered mt-12 w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>BP</th>
                        <th>SD</th>
                        <th>KL</th>
                        <th>IC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($interval as $int)
                        <tr>
                            <td class="font-bold">{{ $loop->iteration }}</td>
                            <td>{{ $int->created_at->format('Y-m-d') }}</td>
                            <td>{{ $int->user->firstname }} {{ $int->user->lastname }}</td>
                            <td>{{ $int->user->divisi->divisi }}</td>
                            <td>
                                {{ $int->user->totalBpDate($int->created_at) / (60 * 30) }}
                            </td>
                            <td>
                                {{ $int->user->totalSdDate($int->created_at) / (60 * 30) }}
                            </td>
                            <td>
                                {{ $int->user->totalKlDate($int->created_at) / (60 * 30) }}
                            </td>
                            <td>
                                {{ $int->user->totalIcDate($int->created_at) / (60 * 30) }}
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
