@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">POMODORO INTERVAL</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Pomodoro Interval</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                {{-- <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
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
                </div> --}}

                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert text-sm bg-cyan-700 text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    Interval Record
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @foreach ($users as $user)
                                <div class="progress-group text-sm">
                                    Bisnis & Profit
                                    <span class="float-right"><b>{{ auth()->user()->totalBp }}</b>/04:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green-600"
                                            style="width: {{ auth()->user()->percentageBp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Self-Development
                                    <span class="float-right"><b>{{ auth()->user()->totalSd }}</b>/01:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-red-600"
                                            style="width: {{ auth()->user()->percentageSd }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Kelembagaan
                                    <span class="float-right"><b>{{ auth()->user()->totalKl }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-yellow-400"
                                            style="width: {{ auth()->user()->percentageKl }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Inovasi/Creativity
                                    <span class="float-right"><b>{{ auth()->user()->totalIc }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue-600"
                                            style="width: {{ auth()->user()->percentageIc }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Morning Briefing & 5R
                                    <span class="float-right"><b>{{ auth()->user()->totalMb }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-violet-600"
                                            style="width: {{ auth()->user()->percentageMb }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Technical Planning
                                    <span class="float-right"><b>{{ auth()->user()->totalTp }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-teal-600"
                                            style="width: {{ auth()->user()->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Technical Planning
                                    <span class="float-right"><b>{{ auth()->user()->totalTp }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-teal-600"
                                            style="width: {{ auth()->user()->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    Evaluasi
                                    <span class="float-right"><b>{{ auth()->user()->totalEv }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-orange-600"
                                            style="width: {{ auth()->user()->percentageEv }}%">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div id="chartPomodoro"></div> --}}
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="alert alert-warning shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span class="text-sm"><b>Checklist</b> untuk menginput interval dalam rentang waktu tertentu.
                                <b>Jangan
                                    dichecklist</b> jika
                                pada rentang tersebut <b>tidak merasa fokus</b> dalam melakukan pekerjaan</span>
                        </div>
                    </div>
                    <div class="card-body mx-2">
                        <div data-theme="cmyk">
                            <form action="{{ route('pomodoro.interval') }}" method="POST" class="w-full">
                                @csrf
                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            MORNING BRIEFING & 5R
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="08:00:00" name="timestart_mb" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">08:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="08:30:00" name="timestop_mb" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">08:30:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            TECHNICAL PLANNING / SHOLAT DHUHA
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="08:30:00" name="timestart_tp" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">08:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:00:00" name="timestop_tp" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">09:00:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            SELF-DEVELOPMENT
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:30:00" name="timestart_sd1" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">11:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="12:00:00" name="timestop_sd1" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">12:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:00:00" name="timestart_sd2" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">16:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:30:00" name="timestop_sd2" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">17:00:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            BISNIS & PROFIT
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:00:00" name="timestart_bp1" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">09:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:30:00" name="timestop_bp1" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">09:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:30:00" name="timestart_bp2" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">09:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:00:00" name="timestop_bp2" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">10:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:00:00" name="timestart_bp3" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">10:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:30:00" name="timestop_bp3" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">10:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:30:00" name="timestart_bp4" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">10:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:00:00" name="timestop_bp4" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">11:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="13:30:00" name="timestart_bp5" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">13:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:00:00" name="timestop_bp5" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">14:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:00:00" name="timestart_bp6" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">14:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:30:00" name="timestop_bp6" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">14:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:30:00" name="timestart_bp7" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">14:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:00:00" name="timestop_bp7" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">15:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:00:00" name="timestart_bp8" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">15:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:30:00" name="timestop_bp8" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">15:30:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            KELEMBAGAAN
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="13:00:00" name="timestart_kl" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">13:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="13:30:00" name="timestop_kl" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">13:30:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            INOVASI / CREATIVITY
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:00:00" name="timestart_ic" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">11:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:30:00" name="timestop_ic" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">11:30:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            COFFE BREAK / SHOLAT ASHAR
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:30:00" name="timestart_cb" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">15:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:00:00" name="timestop_cb" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">16:00:00</span>
                                    </label>
                                </div>

                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            EVALUASI
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:00:00" name="timestart_ev" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">16:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:30:00" name="timestop_ev" class="checkbox" />
                                        <span class="label-text font-bold text-md ml-2">16:30:00</span>
                                    </label>
                                </div>
                                <div class="flex justify-end mt-4" data-theme="cmyk">
                                    <button type="submit"
                                        class="btn bg-primary hover:bg-primary-focus text-white border-0">Kirim
                                    </button>
                                </div>
                            </form>
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
@endsection
