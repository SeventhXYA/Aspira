@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">EDIT INTERVAL RECORD</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="/pomodoro">Pomodoro Interval</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </span>
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
                            <form action="/pomodoro/update/{{ $pomodoro->id }}" method="POST" class="w-full">
                                @csrf
                                <div class="alert text-sm bg-cyan-700 text-white">
                                    <div>
                                        <span class="uppercase font-bold">
                                            MORNING BRIEFING & 5R
                                        </span>
                                    </div>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="08:00:00" name="timestart_mb" class="checkbox"
                                            {{ $pomodoro->progress === 100 ? 'checked' : '' }} />
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
                                <div class="flex mb-4 justify-center md:justify-start">
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
@endsection
