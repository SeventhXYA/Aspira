@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">ACTIVITY REPORT IC</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('dailyic') }}">Daily IC</a></li>
                                    <li>Laporan</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="{{ route('dailyic.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Rencana:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Rencana" name="plan" required></textarea>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Aktual:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Aktual" name="actual" required></textarea>
                            </div>
                            <div class="form-control mb-4" data-theme="cmyk">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Progres:</p>
                                </label>
                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Terselesaikan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-green-500" value="100"
                                        required />
                                </label>

                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Tidak Terselesaikan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-blue-500"
                                        value="50" />
                                </label>

                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Tidak Terkerjakan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-red-500" value="0" />
                                </label>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Upload Dokumentasi (4:3):</p>
                                </label>
                                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="pict"
                                    accept="image/*" required id="pict" />
                                <div id="preview" class="my-3 aspect-[4/3] bg-gray-300 bg-cover bg-center"></div>
                            </div>
                            <div class="form-control mb-4">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Deskripsi Kegiatan:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Deskripsi" name="desc" required></textarea>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-neutral text-sm text-white border-0">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#pict').change(function() {
            const [file] = document.getElementById('pict').files
            if (file) {
                document.getElementById('preview').style.backgroundImage = 'url(' + URL.createObjectURL(file) + ')'
            }
        })
    </script>
@endsection
