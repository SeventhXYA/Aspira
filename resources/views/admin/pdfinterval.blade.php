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

<body style="page-break-before: always;">
    <div class="wrapper">
        <section>
            <div class="row mt-12 -mb-5">
                <div class="col-12">
                    <h2 class="page-header text-black">
                        <img src="{{ asset('/') }}img/login_logo.png" class="w-44" alt="">
                        <small class="float-right">Tanggal Dicetak: {{ $date }}</small><br>
                        <small class="float-right">Dicetak Oleh: {{ auth()->user()->firstname }}
                            {{ auth()->user()->lastname }}</small>
                    </h2>
                </div>

            </div>
            @foreach ($interval as $int)
                <div class="row text-black w-full mt-16">
                    <div class="col-sm-6 ">
                        Dari
                        <address>
                            <strong>{{ $int->user->firstname }} {{ $int->user->lastname }}</strong><br>
                            {{ $int->user->divisi->divisi }}<br>
                            {{ $int->user->nohp }}<br>
                            Email: {{ $int->user->email }}
                        </address>
                    </div>

                    <div class="col-sm-6 ">
                        <b class="uppercase">Interval Pomodoro</b><br>
                        <b>Tanggal:</b> {{ $int->created_at->format('Y-m-d') }}<br>
                    </div>

                </div>

                <table class="table-compact text-black table-bordered w-full">
                    <thead>
                        <tr>
                            <th style="width: 20%;">1</th>
                            <th style="width: 20%;">2</th>
                            <th style="width: 20%;">3</th>
                            <th style="width: 20%;">4</th>
                            <th style="width: 20%;">5</th>
                            <th style="width: 20%;">6</th>
                            <th style="width: 20%;">7</th>
                            <th style="width: 20%;">8</th>
                            <th style="width: 20%;">9</th>
                            <th style="width: 20%;">10</th>
                            <th style="width: 20%;">11</th>
                            <th style="width: 20%;">12</th>
                            <th style="width: 20%;">13</th>
                            <th style="width: 20%;">14</th>
                            <th style="width: 20%;">15</th>
                            <th style="width: 20%;">16</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_mb }} - {{ $int->timestop_mb }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_tp }} - {{ $int->timestop_tp }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp1 }} - {{ $int->timestop_bp1 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp2 }} - {{ $int->timestop_bp2 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp3 }} - {{ $int->timestop_bp3 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp4 }} - {{ $int->timestop_bp4 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_ic }} - {{ $int->timestop_ic }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_sd1 }} - {{ $int->timestop_sd1 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_kl }} - {{ $int->timestop_kl }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp5 }} - {{ $int->timestop_bp5 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp6 }} - {{ $int->timestop_bp6 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp7 }} - {{ $int->timestop_bp7 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_bp8 }} - {{ $int->timestop_bp8 }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_cb }} - {{ $int->timestop_cb }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_ev }} - {{ $int->timestop_ev }}
                            </td>
                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                {{ $int->timestart_sd2 }} - {{ $int->timestop_sd2 }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
            <div class="flex text-black justify-end">
                <p class="absolute font-bold text-md" style="margin-top: 3rem;">Tanda Tangan</p>
                <p class="font-bold text-md uppercase" style="margin-top: 10rem;">
                    (.......................................)</p>
            </div>
        </section>
    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
