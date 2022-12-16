@extends('layouts.form')
@section('form')
    <div class="container mx-auto mb-16">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="/dailysd/update/{{ $dailysd->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Rencana:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Rencana" name="plan" required>{{ $dailysd->plan }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Aktual:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Aktual" name="actual" required>{{ $dailysd->actual }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Progres:</strong></h4>
                                </label>
                                <label class="label cursor-pointer">
                                    <span class="label-text text-black">Terselesaikan</span>
                                    <input type="radio" name="progress" class="radio checked:bg-green-500"
                                        value="100" />
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
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Upload Dokumentasi:</strong></h4>
                                </label>
                                <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                    name="pict" /><br>
                                <img src="{{ asset($dailysd->pict) }}" alt="">
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-base-100 hover:bg-primary   border-0"
                                    data-theme="night" id="update">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
