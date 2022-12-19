@extends('layouts.form')
@section('form')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="flex justify-end">
                            <a href="#recordFocus" class="btn bg-base-100 text-white text-xs border-0"><i
                                    class="fa-solid fa-plus"></i>Tambah
                                Laporan</a>
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
                                        class="start btn bg-green-600 m-0 mx-1 border-0 hover:bg-green-700 text-white">Start
                                        Focus</button>
                                    <button
                                        class="reset btn bg-red-600 m-0 mx-1 border-0 hover:bg-red-700 text-white">Reset</button>
                                    <button
                                        class="pause btn bg-yellow-400 border-0 m-0 mx-1 hover:bg-yellow-500 text-white">Pause</button>
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
                <div class="modal" id="recordFocus">
                    <div class="modal-box bg-white text-black">
                        <a href="#" class="text-white btn btn-sm btn-circle absolute right-2 top-2">✕</a>
                        <form action="{{ route('pomodoro.interval') }}" method="POST">
                            @csrf
                            <h2 class="modal-title" id="exampleModalLabel"><strong>INTERVAL YANG
                                    TERPENUHI</strong></h2>
                            <div class="modal-body">
                                <h3>MORNING BRIEFING & 5R</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_mb"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_mb"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>TECHNICAL PLANNING / SHOLAT DHUHA</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_tp"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_tp"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>BISNIS & PROFIT</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_bp1"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp1"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">2</span>
                                        <input type="time" value="00:00:00" name="timestart_bp2"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp2"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">3</span>
                                        <input type="time" value="00:00:00" name="timestart_bp3"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp3"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">4</span>
                                        <input type="time" value="00:00:00" name="timestart_bp4"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp4"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">5</span>
                                        <input type="time" value="00:00:00" name="timestart_bp5"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp5"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">6</span>
                                        <input type="time" value="00:00:00" name="timestart_bp6"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp6"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">7</span>
                                        <input type="time" value="00:00:00" name="timestart_bp7"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp7"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">8</span>
                                        <input type="time" value="00:00:00" name="timestart_bp8"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_bp8"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>INOVASI / CREATIVITY</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_ic"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_ic"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>KELEMBAGAAN</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_kl"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_kl"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>COFFE BREAK / SHOLAT ASHAR</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_cb"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_cb"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>SELF-DEVELOPMENT</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_sd1"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_sd1"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">2</span>
                                        <input type="time" value="00:00:00" name="timestart_sd2"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_sd2"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>

                                <h3>EVALUASI</h3>
                                <div class="form-control bg-white my-2">
                                    <label class="input-group bg-white">
                                        <span class="text-white">1</span>
                                        <input type="time" value="00:00:00" name="timestart_ev"
                                            class="input input-bordered bg-slate-200" />
                                        <h1 class="mx-2"> - </h1>
                                        <input type="time" value="00:00:00" name="timestop_ev"
                                            class="input input-bordered bg-slate-200" />
                                    </label>
                                </div>
                            </div>

                            <div class="modal-action">
                                <a href="#" class="btn bg-red-600 hover:bg-red-700 text-white border-0">Tutup</a>
                                <button type="submit" class="btn bg-base-100 hover:bg-primary text-white border-0">Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 mb-16 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Interval Goal</strong>
                            </p>
                            @foreach ($users as $user)
                                <div class="progress-group">
                                    Bisnis & Profit
                                    <span class="float-right"><b>{{ $user->totalBp }}</b>/04:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green-600" style="width: {{ $user->percentageBp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Self-Development
                                    <span class="float-right"><b>{{ $user->totalSd }}</b>/01:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-red-600" style="width: {{ $user->percentageSd }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Kelembagaan
                                    <span class="float-right"><b>{{ $user->totalKl }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-yellow-400" style="width: {{ $user->percentageKl }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Inovasi/Creativity
                                    <span class="float-right"><b>{{ $user->totalIc }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue-600" style="width: {{ $user->percentageIc }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Morning Briefing & 5R
                                    <span class="float-right"><b>{{ $user->totalMb }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-violet-600"
                                            style="width: {{ $user->percentageMb }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Technical Planning
                                    <span class="float-right"><b>{{ $user->totalTp }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-teal-600" style="width: {{ $user->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Evaluasi
                                    <span class="float-right"><b>{{ $user->totalEv }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-orange-600"
                                            style="width: {{ $user->percentageEv }}%">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        function EnableDisableTextbox(intrVMb) {
            var txtIntervalMb = document.getElementById("txtIntervalMb");
            txtIntervalMb.disabled = intrVMb.checked ? false : true;
            if (!txtIntervalMb.disabled) {
                txtIntervalMb.focus();
            }
            var txtIntervalMb1 = document.getElementById("txtIntervalMb1");
            txtIntervalMb1.disabled = intrVMb.checked ? false : true;
        }

        function EnableDisableTextbox1(intrVTp) {
            var txtIntervalTp = document.getElementById("txtIntervalTp");
            txtIntervalTp.disabled = intrVTp.checked ? false : true;
            if (!txtIntervalTp.disabled) {
                txtIntervalTp.focus();
            }
            var txtIntervalTp1 = document.getElementById("txtIntervalTp1");
            txtIntervalTp1.disabled = intrVTp.checked ? false : true;
        }

        function EnableDisableTextbox2(intrVBp) {
            var txtIntervalBp = document.getElementById("txtIntervalBp");
            txtIntervalBp.disabled = intrVBp.checked ? false : true;
            if (!txtIntervalBp.disabled) {
                txtIntervalBp.focus();
            }
            var txtIntervalBp1 = document.getElementById("txtIntervalBp1");
            txtIntervalBp1.disabled = intrVBp.checked ? false : true;
        }

        function EnableDisableTextbox3(intrVBp1) {
            var txtIntervalBp2 = document.getElementById("txtIntervalBp2");
            txtIntervalBp2.disabled = intrVBp1.checked ? false : true;
            if (!txtIntervalBp2.disabled) {
                txtIntervalBp2.focus();
            }
            var txtIntervalBp3 = document.getElementById("txtIntervalBp3");
            txtIntervalBp3.disabled = intrVBp1.checked ? false : true;
        }

        function EnableDisableTextbox4(intrVBp2) {
            var txtIntervalBp4 = document.getElementById("txtIntervalBp4");
            txtIntervalBp4.disabled = intrVBp2.checked ? false : true;
            if (!txtIntervalBp4.disabled) {
                txtIntervalBp4.focus();
            }
            var txtIntervalBp5 = document.getElementById("txtIntervalBp5");
            txtIntervalBp5.disabled = intrVBp2.checked ? false : true;
        }

        function EnableDisableTextbox5(intrVBp3) {
            var txtIntervalBp6 = document.getElementById("txtIntervalBp6");
            txtIntervalBp6.disabled = intrVBp3.checked ? false : true;
            if (!txtIntervalBp6.disabled) {
                txtIntervalBp6.focus();
            }
            var txtIntervalBp7 = document.getElementById("txtIntervalBp7");
            txtIntervalBp7.disabled = intrVBp3.checked ? false : true;
        }

        function EnableDisableTextbox6(intrVBp4) {
            var txtIntervalBp8 = document.getElementById("txtIntervalBp8");
            txtIntervalBp8.disabled = intrVBp4.checked ? false : true;
            if (!txtIntervalBp8.disabled) {
                txtIntervalBp8.focus();
            }
            var txtIntervalBp9 = document.getElementById("txtIntervalBp9");
            txtIntervalBp9.disabled = intrVBp4.checked ? false : true;
        }

        function EnableDisableTextbox7(intrVBp5) {
            var txtIntervalBp10 = document.getElementById("txtIntervalBp10");
            txtIntervalBp10.disabled = intrVBp5.checked ? false : true;
            if (!txtIntervalBp10.disabled) {
                txtIntervalBp10.focus();
            }
            var txtIntervalBp11 = document.getElementById("txtIntervalBp11");
            txtIntervalBp11.disabled = intrVBp5.checked ? false : true;
        }

        function EnableDisableTextbox8(intrVBp6) {
            var txtIntervalBp12 = document.getElementById("txtIntervalBp12");
            txtIntervalBp12.disabled = intrVBp6.checked ? false : true;
            if (!txtIntervalBp12.disabled) {
                txtIntervalBp12.focus();
            }
            var txtIntervalBp13 = document.getElementById("txtIntervalBp13");
            txtIntervalBp13.disabled = intrVBp6.checked ? false : true;
        }

        function EnableDisableTextbox9(intrVBp7) {
            var txtIntervalBp14 = document.getElementById("txtIntervalBp14");
            txtIntervalBp14.disabled = intrVBp7.checked ? false : true;
            if (!txtIntervalBp14.disabled) {
                txtIntervalBp14.focus();
            }
            var txtIntervalBp15 = document.getElementById("txtIntervalBp15");
            txtIntervalBp15.disabled = intrVBp7.checked ? false : true;
        }

        function EnableDisableTextbox10(intrVIc) {
            var txtIntervalIc = document.getElementById("txtIntervalIc");
            txtIntervalIc.disabled = intrVIc.checked ? false : true;
            if (!txtIntervalIc.disabled) {
                txtIntervalIc.focus();
            }
            var txtIntervalIc1 = document.getElementById("txtIntervalIc1");
            txtIntervalIc1.disabled = intrVIc.checked ? false : true;
        }

        function EnableDisableTextbox11(intrVKl) {
            var txtIntervalKl = document.getElementById("txtIntervalKl");
            txtIntervalKl.disabled = intrVKl.checked ? false : true;
            if (!txtIntervalKl.disabled) {
                txtIntervalKl.focus();
            }
            var txtIntervalKl1 = document.getElementById("txtIntervalKl1");
            txtIntervalKl1.disabled = intrVKl.checked ? false : true;
        }

        function EnableDisableTextbox12(intrVSd) {
            var txtIntervalSd = document.getElementById("txtIntervalSd");
            txtIntervalSd.disabled = intrVSd.checked ? false : true;
            if (!txtIntervalSd.disabled) {
                txtIntervalSd.focus();
            }
            var txtIntervalSd1 = document.getElementById("txtIntervalSd1");
            txtIntervalSd1.disabled = intrVSd.checked ? false : true;
        }

        function EnableDisableTextbox13(intrVSd1) {
            var txtIntervalSd2 = document.getElementById("txtIntervalSd2");
            txtIntervalSd2.disabled = intrVSd1.checked ? false : true;
            if (!txtIntervalSd2.disabled) {
                txtIntervalSd2.focus();
            }
            var txtIntervalSd3 = document.getElementById("txtIntervalSd3");
            txtIntervalSd3.disabled = intrVSd1.checked ? false : true;
        }

        function EnableDisableTextbox14(intrVCb) {
            var txtIntervalCb = document.getElementById("txtIntervalCb");
            txtIntervalCb.disabled = intrVCb.checked ? false : true;
            if (!txtIntervalCb.disabled) {
                txtIntervalCb.focus();
            }
            var txtIntervalCb1 = document.getElementById("txtIntervalCb1");
            txtIntervalCb1.disabled = intrVCb.checked ? false : true;
        }

        function EnableDisableTextbox15(intrVEv) {
            var txtIntervalEv = document.getElementById("txtIntervalEv");
            txtIntervalEv.disabled = intrVEv.checked ? false : true;
            if (!txtIntervalEv.disabled) {
                txtIntervalEv.focus();
            }
            var txtIntervalEv1 = document.getElementById("txtIntervalEv1");
            txtIntervalEv1.disabled = intrVEv.checked ? false : true;
        }
    </script> --}}
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
