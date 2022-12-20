@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>TAMBAH DATA PENGGUNA</h3>
                                <div class="text-sm breadcrumbs">
                                    <ul>
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="{{ route('datapengguna') }}">Data Pengguna</a></li>
                                        <li>Baru</li>
                                    </ul>
                                </div>
                            </strong>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="{{ route('datapengguna.store') }}" method="POST">
                            @csrf
                            <div class="form-control">
                                <input type="hidden" class="image" name="pict" value="user.png">
                                {{-- <input type="file" class="file-input file-input-bordered w-full max-w-xs " name="pict"
                                    accept="image/*" required /> --}}
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <h4><strong>Nama Pertama:</strong></h4>
                                </label>
                                <input type="text" class="input input-bordered w-full max-w-xs" name="firstname"
                                    required />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <h4><strong>Nama Terakhir:</strong></h4>
                                </label>
                                <input type="text" class="input input-bordered w-full max-w-xs" name="lastname"
                                    value=" " />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <h4><strong>Jenis Kelamin:</strong></h4>
                                </label>
                                <select class="select select-bordered w-36" name="gender_id" required>
                                    <option disabled selected hidden>-</option>
                                    @foreach ($gender as $gd)
                                        <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <h4><strong>Tempat Lahir</strong></h4>
                                </label>
                                <input type="text" class="input input-bordered w-full max-w-xs" name="tempatlahir"
                                    required />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <h4><strong>Tanggal Lahir</strong></h4>
                                </label>
                                <input type="text" class="input input-md input-bordered w-14" name="tanggallahir"
                                    required /> /
                                <select class="select select-bordered select-md w-32" name="bulan_id" required>
                                    <option disabled selected hidden>-</option>
                                    @foreach ($bulan as $bln)
                                        <option value="{{ $bln->id }}">{{ $bln->bulan }}</option>
                                    @endforeach
                                </select> / <input type="text" class="input input-md input-bordered w-16"
                                    name="tahunlahir" required />
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
                                <textarea class="textarea textarea-bordered h-24" name="address" required></textarea>
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
                                <select class="select select-bordered w-28" name="level_id" required>
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
@section('script')
    <script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
    </script>
@endsection
@endsection
