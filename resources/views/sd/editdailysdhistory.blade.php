@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">EDIT ACTIVITY REPORT SD</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('dailysd') }}">Daily SD</a></li>
                                    <li>Edit Laporan</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form onsubmit="$('#submit').prop('disabled',true)" action="/dailysd/update/{{ $dailysd->id }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Tanggal & Waktu Kegiatan:</p>
                                </label>
                                <input type="date" class="input w-full input-bordered" name="date"
                                    value="{{ $dailysd->date }}" required />
                            </div>
                            <div class="form-control mb-4 inline-block">
                                <input type="time" class="input input-bordered" style="width: 7rem;" name="timestart"
                                    value="{{ $dailysd->timestart }}" required />
                                <span class="font-bold mx-2">s/d</span>
                                <input type="time" class="input input-bordered" style="width: 7rem;" name="timefinish"
                                    value="{{ $dailysd->timefinish }}" required />
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Rencana:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Rencana" name="plan" required>{{ $dailysd->plan }}</textarea>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Aktual:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Aktual" name="actual" required>{{ $dailysd->actual }}</textarea>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Progres:</p><span id="perc"
                                        class="font-bold">{{ $dailysd->progress }}%</span>
                                </label>
                                <input type="range" id="slider" value="{{ $dailysd->progress }}" min="0"
                                    max="100" class="range " name="progress" />
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Upload Dokumentasi:</p>
                                </label>
                                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="pict"
                                    id="pict" />
                                <div id="preview" class="my-3 aspect-[4/3] bg-gray-300 bg-cover bg-center"
                                    style="background-image: url({{ asset($dailysd->pict) }})"></div>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Deskripsi:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Deskripsi" name="desc" required>{{ $dailysd->desc }}</textarea>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" id="submit" class="btn bg-neutral text-white border-0"
                                    data-theme="night">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('slider').addEventListener('input', (event) => {
            const magnitude = 5
            const value = Math.round(event.target.value / magnitude) * magnitude

            event.target.value = value
            document.getElementById('perc').textContent = value + '%'
        })

        $('#pict').change(function() {
            const [file] = document.getElementById('pict').files
            if (file) {
                document.getElementById('preview').style.backgroundImage = 'url(' + URL.createObjectURL(file) + ')'
            }
        })
    </script>
@endsection
