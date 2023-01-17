@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">TAMBAH DATA PENGGUNA</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('datapengguna') }}">Data Pengguna</a></li>
                                    <li>Baru</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="{{ route('datapengguna.store') }}" method="POST">
                            @csrf
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama
                                        Depan
                                    </span>
                                </label>
                                <input type="text" class="input input-bordered w-full" name="firstname" required />
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama Belakang </span>
                                </label>
                                <input type="text" class="input input-bordered w-full" name="lastname" value=" " />
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-venus-mars mr-2 fa-md"></i>Jenis Kelamin </span>
                                </label>
                                <select class="select select-bordered w-36" name="gender_id" required>
                                    <option disabled selected hidden>-</option>
                                    @foreach ($gender as $gd)
                                        <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-cake-candles mr-2 fa-md"></i>Tempat Lahir </span>
                                </label>
                                <input type="text" class="input input-bordered w-full" name="tempatlahir" required />
                            </div>
                            <div class="form-control w-full my-2 inline">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-cake-candles mr-2 fa-md"></i>Tanggal Lahir </span>
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
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-phone mr-2 fa-md"></i>No Hp </span>
                                </label>
                                <input type="number" class="input input-bordered w-full" name="nohp" required />
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-envelope mr-2 fa-md"></i>Email </span>
                                </label>
                                <input type="email" class="input input-bordered w-full" name="email" required />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-location-dot mr-2 fa-md"></i>Alamat </span>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="address" required></textarea>
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-people-group mr-2 fa-md"></i>Divisi </span>
                                </label>
                                <select class="select select-bordered" name="divisi_id" required>
                                    <option disabled selected hidden>Pilih Satu</option>
                                    @foreach ($divisi as $dv)
                                        <option value="{{ $dv->id }}">{{ $dv->divisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-user mr-2 fa-md"></i>Username </span>
                                </label>
                                <input type="text" class="input input-bordered w-full" name="username" required />
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-lock mr-2 fa-md"></i>Password </span>
                                </label>
                                <input type="password" class="input input-bordered w-full" name="password" required />
                            </div>
                            <div class="form-control w-full my-2">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 uppercase font-bold"><i
                                            class="fa-solid fa-user-lock mr-2 fa-md"></i>Level Akun </span>
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
