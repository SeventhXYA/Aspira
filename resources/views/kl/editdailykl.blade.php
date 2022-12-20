@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EDIT KELEMBAGAAN</h3>
                                <div class="text-sm breadcrumbs">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('dailykl') }}">Daily Kelembagaan</a></li>
                                        <li>Edit</li>
                                    </ul>
                                </div>
                            </strong>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="/dailykl/update/{{ $dailykl->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Rencana:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Rencana" name="plan" required>{{ $dailykl->plan }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Aktual:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Aktual" name="actual" required>{{ $dailykl->actual }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Progres:</strong></h4>
                                </label>
                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Terselesaikan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-green-500" value="100"
                                        {{ $dailykl->progress === 100 ? 'checked' : '' }} />
                                </label>

                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Tidak Terselesaikan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-blue-500" value="50"
                                        {{ $dailykl->progress === 50 ? 'checked' : '' }} />
                                </label>

                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Tidak Terkerjakan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-red-500" value="0"
                                        {{ $dailykl->progress === 0 ? 'checked' : '' }} />
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Upload Dokumentasi:</strong></h4>
                                </label>
                                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="pict"
                                    id="pict" />
                                <div id="preview" class="my-3 aspect-[4/3] bg-gray-300 bg-cover bg-center"
                                    style="background-image: url({{ asset($dailykl->pict) }})"></div>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Deskripsi:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Deskripsi" name="desc" required>{{ $dailykl->desc }}</textarea>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-base-100 hover:bg-primary text-white border-0"
                                    data-theme="night" id="update">Simpan</button>
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
        $('#update').click(function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Data Berhasil di Edit',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
@endsection
