<html lang="en">

<head>
    <title>Daily Record Interval</title>
    <title>{{ $title }}</title>
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
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app.5442aa01.css') }}">

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
                        <th>Evaluasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="font-bold">{{ $user->firstname }} {{ $user->lastname }}</td>
                            <td>
                                @if ($user->totalBp == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalBp }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalSd == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalSd }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalKl == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalKl }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalIc == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalIc }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalMb == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalMb }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalTp == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalTp }}
                                @endif
                            </td>
                            <td>
                                @if ($user->totalEv == '00:00:00')
                                    <span style="color: red">00:00:00</span>
                                @else
                                    {{ $user->totalEv }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
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
