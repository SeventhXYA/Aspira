@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col col-12">
                    <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                        <div class="card-body mx-2" data-theme="cmyk">
                            <form action="{{ route('datapengguna.store') }}" method="POST">
                                @csrf
                                <div class="form-control">
                                    <label class="label">
                                        <h4><strong>Upload Foto:</strong></h4>
                                    </label>
                                    <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                                        name="pict" />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Nama:</strong></h4>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs" name="name"
                                        required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Jenis Kelamin:</strong></h4>
                                    </label>
                                    <select class="select select-bordered" name="gender_id" required>
                                        <option disabled selected hidden>-</option>
                                        @foreach ($gender as $gd)
                                            <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Divisi:</strong></h4>
                                    </label>
                                    <select class="select select-bordered" name="divisi_id" required>
                                        <option disabled selected hidden>-</option>
                                        @foreach ($divisi as $dv)
                                            <option value="{{ $dv->id }}">{{ $dv->divisi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>No Hp:</strong></h4>
                                    </label>
                                    <input type="number" class="input input-bordered w-full max-w-xs" name="nohp"
                                        required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Email:</strong></h4>
                                    </label>
                                    <input type="email" class="input input-bordered w-full max-w-xs" name="email"
                                        required />
                                </div>
                                <div class="form-control">
                                    <label class="label">
                                        <h4><strong>Alamat:</strong></h4>
                                    </label>
                                    <textarea class="textarea textarea-bordered h-24 " name="address" required></textarea>
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Username:</strong></h4>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs" name="username"
                                        required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Password:</strong></h4>
                                    </label>
                                    <input type="password" class="input input-bordered w-full max-w-xs" name="password"
                                        required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Level Akun:</strong></h4>
                                    </label>
                                    <select class="select select-bordered" name="level_id" required>
                                        <option disabled selected hidden>-</option>
                                        @foreach ($level as $lv)
                                            <option value="{{ $lv->id }}">{{ $lv->level }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex justify-end mt-2 pt-4">
                                    <button type="submit" name="submit" class="btn bg-base-100 text-white"
                                        data-theme="night">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
