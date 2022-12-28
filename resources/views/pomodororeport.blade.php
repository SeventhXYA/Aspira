@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">POMODORO REPORT</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Interval Report</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert text-sm bg-cyan-800 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    Interval Report
                                </span>
                            </div>
                        </div>
                        <div class="flex justify-between" data-theme="cmyk">
                            <form action="{{ route('pomodoro.interval') }}" method="POST" class="w-full">
                                @csrf
                                <div class="justify-between inline-block w-full">
                                    <p class="text-sm font-bold">MORNING BRIEFING & 5R</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_mb"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_mb"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">TECHNICAL PLANNING / SHOLAT DHUHA</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_tp"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_tp"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">BISNIS & PROFIT</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_bp1"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp1"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">2</span>
                                            <input type="time" value="00:00:00" name="timestart_bp2"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp2"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">3</span>
                                            <input type="time" value="00:00:00" name="timestart_bp3"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp3"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">4</span>
                                            <input type="time" value="00:00:00" name="timestart_bp4"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp4"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">5</span>
                                            <input type="time" value="00:00:00" name="timestart_bp5"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp5"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">6</span>
                                            <input type="time" value="00:00:00" name="timestart_bp6"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp6"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">7</span>
                                            <input type="time" value="00:00:00" name="timestart_bp7"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp7"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">8</span>
                                            <input type="time" value="00:00:00" name="timestart_bp8"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_bp8"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">INOVASI / CREATIVITY</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_ic"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_ic"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">KELEMBAGAAN</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_kl"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_kl"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">COFFE BREAK / SHOLAT ASHAR</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_cb"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_cb"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">SELF-DEVELOPMENT</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_sd1"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_sd1"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">2</span>
                                            <input type="time" value="00:00:00" name="timestart_sd2"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_sd2"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>

                                    <p class="text-sm font-bold">EVALUASI</p>
                                    <div class="form-control bg-white my-2">
                                        <label class="input-group bg-white">
                                            <span class="text-white text-sm bg-neutral">1</span>
                                            <input type="time" value="00:00:00" name="timestart_ev"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                            <h1 class="mx-2"> - </h1>
                                            <input type="time" value="00:00:00" name="timestop_ev"
                                                class="input input-bordered w-full h-10 text-sm bg-slate-200" />
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-end my-2" data-theme="cmyk">
                                    <button type="submit"
                                        class="btn bg-primary hover:bg-primary-focus text-white border-0">Kirim
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card lg:w-full my-4 mx-2 mb-16 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="col-md-4">
                            <p class="text-center font-bold uppercase mb-4">
                                Interval Goal
                            </p>
                            @foreach ($users as $user)
                                <div class="progress-group text-sm">
                                    Bisnis & Profit
                                    <span class="float-right"><b>{{ $user->totalBp }}</b>/04:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green-600" style="width: {{ $user->percentageBp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Self-Development
                                    <span class="float-right"><b>{{ $user->totalSd }}</b>/01:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-red-600" style="width: {{ $user->percentageSd }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Kelembagaan
                                    <span class="float-right"><b>{{ $user->totalKl }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-yellow-400" style="width: {{ $user->percentageKl }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Inovasi/Creativity
                                    <span class="float-right"><b>{{ $user->totalIc }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue-600" style="width: {{ $user->percentageIc }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Morning Briefing & 5R
                                    <span class="float-right"><b>{{ $user->totalMb }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-violet-600"
                                            style="width: {{ $user->percentageMb }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Technical Planning
                                    <span class="float-right"><b>{{ $user->totalTp }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-teal-600" style="width: {{ $user->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Evaluasi
                                    <span class="float-right"><b>{{ $user->totalEv }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-orange-600"
                                            style="width: {{ $user->percentageEv }}%">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div id="chartPomodoro"></div> --}}
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", (e) => {
            e.preventDefault();
            localStorage.setItem("focusTime", focusTimeInput.value);
            localStorage.setItem("breakTime", breakTimeInput.value);
        });
    </script>
    <script src="{{ asset('/') }}js/settings.js"></script>
    <script src="{{ asset('/') }}js/timer.js"></script>
    <script src="{{ asset('/') }}js/progress.js"></script>
    <script>
        Highcharts.chart('chartPomodoro', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'INTERVAL POMODORO'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Interval Tercapai',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Self-Development',
                data: [49.9]

            }, {
                name: 'Bisnis & Profit',
                data: [83.6]

            }, {
                name: 'Kelembagaan',
                data: [48.9]

            }, {
                name: 'Inovasi/Creativity',
                data: [42.4]

            }, {
                name: 'Morning Briefing',
                data: [42.4]

            }, {
                name: 'Technical Planning',
                data: [42.4]

            }, {
                name: 'Evaluasi',
                data: [42.4]

            }]
        });
    </script>
@endsection
@section('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
