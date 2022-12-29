@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">INTERVAL RECORD</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Interval Record</li>
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
                                    Interval Record
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
            </div>
        </div>
    </div>
@endsection
