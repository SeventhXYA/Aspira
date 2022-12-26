<!DOCTYPE html>
<html lang="en">

<head data-theme="light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}

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
    @vite('resources/css/app.css')

</head>

<body>
    <div class="wrapper">
        <section class="invoice">
            <div class="row mt-12 -mb-5">
                <div class="col-12">
                    <h2 class="page-header">
                        <img src="{{ asset('/') }}img/login_logo.png" class="w-44" alt="">
                        <small class="float-right">Date: {{ $date }}</small>
                    </h2>
                </div>

            </div>
            @foreach ($dailybp as $bp)
                <div class="row invoice-info w-full mt-16">
                    <div class="col-sm-6 invoice-col">
                        Dari
                        <address>
                            <strong>{{ $bp->user->firstname }} {{ $bp->user->lastname }}</strong><br>
                            {{ $bp->user->divisi->divisi }}<br>
                            {{ $bp->user->nohp }}<br>
                            Email: {{ $bp->user->email }}
                        </address>
                    </div>

                    <div class="col-sm-6 invoice-col">
                        <b>Self-Development</b><br>
                        <br>
                        <b>Status:</b>
                        @if ($bp->progress == 100)
                            <strong><span class="text-sm"
                                    style="color: green; text-transform: uppercase;">Terselesaikan</span></strong>
                        @elseif ($bp->progress == 50)
                            <strong><span class="text-sm" style="color: blue; text-transform: uppercase;">Tidak
                                    Terselesaikan</span></strong>
                        @else
                            <strong><span class="text-sm" style="color: red; text-transform: uppercase;">Tidak
                                    Tekerjakan</span></strong>
                        @endif
                        <br>
                        <b>Tanggal:</b> {{ $bp->created_at->format('d-M-Y') }}<br>
                    </div>

                </div>

                <table class="table-compact table-bordered w-full">
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
                            <td style="width: 20%;">{{ $bp->plan }}</td>
                            <td style="width: 20%;">{{ $bp->actual }}</td>
                            <td style="width: 35%;">{{ $bp->desc }}</td>
                            <td style="width: 25%;"><img src="{{ asset($bp->pict) }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </section>
    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
