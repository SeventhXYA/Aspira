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
                                    <li><a href="/interval">Pomodoro Interval</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div data-theme="cmyk">
                            <form action="{{ route('interval.update') }}" method="POST" class="w-full">
                                @method('PUT') @csrf
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
                                            @checked($interval->timestart_mb) />
                                        <span class="label-text font-bold text-md ml-2">08:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="08:30:00" name="timestop_mb" class="checkbox"
                                            @checked($interval->timestop_mb) />
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
                                        <input type="checkbox" value="08:30:00" name="timestart_tp" class="checkbox"
                                            @checked($interval->timestart_tp) />
                                        <span class="label-text font-bold text-md ml-2">08:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:00:00" name="timestop_tp" class="checkbox"
                                            @checked($interval->timestop_tp) />
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
                                        <input type="checkbox" value="11:30:00" name="timestart_sd1" class="checkbox"
                                            @checked($interval->timestart_sd1) />
                                        <span class="label-text font-bold text-md ml-2">11:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="12:00:00" name="timestop_sd1" class="checkbox"
                                            @checked($interval->timestop_sd1) />
                                        <span class="label-text font-bold text-md ml-2">12:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:00:00" name="timestart_sd2" class="checkbox"
                                            @checked($interval->timestart_sd2) />
                                        <span class="label-text font-bold text-md ml-2">16:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:30:00" name="timestop_sd2" class="checkbox"
                                            @checked($interval->timestop_sd2) />
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
                                        <input type="checkbox" value="09:00:00" name="timestart_bp1" class="checkbox"
                                            @checked($interval->timestart_bp1) />
                                        <span class="label-text font-bold text-md ml-2">09:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:30:00" name="timestop_bp1" class="checkbox"
                                            @checked($interval->timestop_bp1) />
                                        <span class="label-text font-bold text-md ml-2">09:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="09:30:00" name="timestart_bp2" class="checkbox"
                                            @checked($interval->timestart_bp2) />
                                        <span class="label-text font-bold text-md ml-2">09:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:00:00" name="timestop_bp2" class="checkbox"
                                            @checked($interval->timestop_bp2) />
                                        <span class="label-text font-bold text-md ml-2">10:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:00:00" name="timestart_bp3" class="checkbox"
                                            @checked($interval->timestart_bp3) />
                                        <span class="label-text font-bold text-md ml-2">10:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:30:00" name="timestop_bp3" class="checkbox"
                                            @checked($interval->timestop_bp3) />
                                        <span class="label-text font-bold text-md ml-2">10:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="10:30:00" name="timestart_bp4" class="checkbox"
                                            @checked($interval->timestart_bp4) />
                                        <span class="label-text font-bold text-md ml-2">10:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:00:00" name="timestop_bp4" class="checkbox"
                                            @checked($interval->timestop_bp4) />
                                        <span class="label-text font-bold text-md ml-2">11:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="13:30:00" name="timestart_bp5" class="checkbox"
                                            @checked($interval->timestart_bp5) />
                                        <span class="label-text font-bold text-md ml-2">13:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:00:00" name="timestop_bp5" class="checkbox"
                                            @checked($interval->timestop_bp5) />
                                        <span class="label-text font-bold text-md ml-2">14:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:00:00" name="timestart_bp6" class="checkbox"
                                            @checked($interval->timestart_bp6) />
                                        <span class="label-text font-bold text-md ml-2">14:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:30:00" name="timestop_bp6" class="checkbox"
                                            @checked($interval->timestop_bp6) />
                                        <span class="label-text font-bold text-md ml-2">14:30:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="14:30:00" name="timestart_bp7" class="checkbox"
                                            @checked($interval->timestart_bp7) />
                                        <span class="label-text font-bold text-md ml-2">14:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:00:00" name="timestop_bp7" class="checkbox"
                                            @checked($interval->timestop_bp7) />
                                        <span class="label-text font-bold text-md ml-2">15:00:00</span>
                                    </label>
                                </div>
                                <div class="flex mb-4 justify-center md:justify-start">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:00:00" name="timestart_bp8" class="checkbox"
                                            @checked($interval->timestart_bp8) />
                                        <span class="label-text font-bold text-md ml-2">15:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="15:30:00" name="timestop_bp8" class="checkbox"
                                            @checked($interval->timestop_bp8) />
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
                                        <input type="checkbox" value="13:00:00" name="timestart_kl" class="checkbox"
                                            @checked($interval->timestart_kl) />
                                        <span class="label-text font-bold text-md ml-2">13:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="13:30:00" name="timestop_kl" class="checkbox"
                                            @checked($interval->timestop_kl) />
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
                                        <input type="checkbox" value="11:00:00" name="timestart_ic" class="checkbox"
                                            @checked($interval->timestart_ic) />
                                        <span class="label-text font-bold text-md ml-2">11:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="11:30:00" name="timestop_ic" class="checkbox"
                                            @checked($interval->timestop_ic) />
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
                                        <input type="checkbox" value="15:30:00" name="timestart_cb" class="checkbox"
                                            @checked($interval->timestart_cb) />
                                        <span class="label-text font-bold text-md ml-2">15:30:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:00:00" name="timestop_cb" class="checkbox"
                                            @checked($interval->timestop_cb) />
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
                                        <input type="checkbox" value="16:00:00" name="timestart_ev" class="checkbox"
                                            @checked($interval->timestart_ev) />
                                        <span class="label-text font-bold text-md ml-2">16:00:00</span>
                                    </label>
                                    <label class="label mx-2 font-bold"> - </label>
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" value="16:30:00" name="timestop_ev" class="checkbox"
                                            @checked($interval->timestop_ev) />
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
        document.querySelectorAll('input[type="checkbox"]').forEach((input => {
            const name = input.name
            if (name.startsWith('timestart')) {
                const [mode, type] = name.split('_')

                const start = document.querySelector(`input[name="timestart_${type}"]`)
                const stop = document.querySelector(`input[name="timestop_${type}"]`)

                start.addEventListener('change', (event) => {
                    stop.checked = event.currentTarget.checked
                })

                stop.addEventListener('change', (event) => {
                    start.checked = event.currentTarget.checked
                })
            }
        }))
    </script>
@endsection
