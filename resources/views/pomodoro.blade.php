@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">POMODORO TIMER</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Pomodoro Timer</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="flex justify-between" data-theme="cmyk">
                            <label for="infoPomodoro" class=" mt-3 "><i
                                    class="fa-solid fa-circle-info fa-2xl text-error"></i></label>
                            <a href={{ route('pomodoro.report') }}
                                class="btn bg-primary hover:bg-primary-focus text-white text-xs border-0"><i
                                    class="fa-solid fa-plus mr-2"></i>Record
                                Interval</a>

                            <input type="checkbox" id="infoPomodoro" class="modal-toggle" />
                            <label for="infoPomodoro" class="modal cursor-pointer">
                                <label class="modal-box relative" for="">
                                    <h3 class="text-lg font-bold text-error uppercase">Pomodoro ini memiliki
                                        kekurangan!<label for="infoWeakness" class=" mt-3 "><i
                                                class="fa-solid fa-circle-info text-error ml-2"></i></label>
                                    </h3>
                                    <p class="py-4">Sebaiknya gunakan aplikasi pomodoro external untuk menghitung
                                        interval fokus kalian!</p>
                                </label>
                            </label>
                            <input type="checkbox" id="infoWeakness" class="modal-toggle" />
                            <label for="infoWeakness" class="modal cursor-pointer">
                                <label class="modal-box relative" for="">
                                    <p class="py-4">Kekurangan: <strong> 1.</strong> Hanya berfungsi jika layar hp tidak
                                        terkunci; <strong>2.</strong> Tidak
                                        dapat berjalan di latar belakang; <strong>3.</strong> Waktu fokus dan waktu
                                        istirahat tidak bisa di
                                        ubah;</p>
                                </label>
                            </label>
                        </div>
                        <div class="pomodoro my-5">
                            <div class="clock mb-8 h-80">
                                <div class="mins text-4xl">00</div>
                                <div>:</div>
                                <div class="secs text-4xl">00</div>
                                <audio src="{{ asset('/') }}sound/service-bell_daniel_simion.mp3"></audio>
                                <svg class="progress-ring" height="120" width="120">
                                    <circle class="progress-ring__circle" stroke-width="8" fill="transparent" r="50"
                                        cx="60" cy="60" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <div class="btn-group flex justify-center">
                                    <button
                                        class="start btn text-sm bg-green-600 m-0 mx-1 border-0 hover:bg-green-700 text-white">Start
                                        Focus</button>
                                    <button
                                        class="reset btn text-sm bg-red-600 m-0 mx-1 border-0 hover:bg-red-700 text-white">Reset</button>
                                    <button
                                        class="pause btn text-sm bg-yellow-400 border-0 m-0 mx-1 hover:bg-yellow-500 text-white">Pause</button>
                                </div>
                            </div>
                            <div class="-mt-12" hidden>
                                <form action="{{ route('pomodoro') }}" id="pomo" method="GET">
                                    @csrf
                                    <label for="focusTime" hidden>Focus Time</label>
                                    <input type="number" value="25" id="focusTime" hidden />
                                    <label for="breakTime" hidden>Break Time</label>
                                    <input type="number" value="5" id="breakTime" hidden />
                                    <button class="btn bg-primary" type="submit" hidden>Save Settings</button>
                                </form>
                            </div>
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
                                        <div class="progress-bar bg-violet-600" style="width: {{ $user->percentageMb }}%">
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
