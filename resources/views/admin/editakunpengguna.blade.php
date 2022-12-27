@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EDIT DATA PENGGUNA</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('datapengguna') }}">Data Pengguna</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                    <div class="card-body mx-2">
                        <form action="{{ route('datapengguna.update') }}" class="min-w-full" method="POST">
                            @csrf
                            <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:my-4 md:ml-11">
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama
                                            Depan
                                        </span>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs" name="firstname"
                                        value="{{ $user->firstname }}" required />
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama Belakang </span>
                                    </label>
                                    <input type="text" class="input input-bordered w-full " name="lastname"
                                        value="{{ $user->lastname }}" />
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-venus-mars mr-2 fa-md"></i>Jenis Kelamin </span>
                                    </label>
                                    <select class="select select-bordered w-36 " name="gender_id" required>
                                        <option selected value="{{ $user->gender->id }}" hidden>
                                            {{ $user->gender->gender }}</option>
                                        @foreach ($gender as $gd)
                                            <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-cake-candles mr-2 fa-md"></i>Tempat Lahir </span>
                                    </label>
                                    <input type="text" class="input input-bordered w-full " name="tempatlahir"
                                        value="{{ $user->tempatlahir }}" required />
                                </div>
                                <div class="form-control w-full my-2 inline">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-cake-candles mr-2 fa-md"></i>Tanggal Lahir </span>
                                    </label>
                                    <input type="text" class="input input-md input-bordered w-14 " name="tanggallahir"
                                        value="{{ $user->tanggallahir }}" required /> /
                                    <select class="select select-bordered select-md w-32 " name="bulan_id" required>
                                        <option selected value="{{ $user->bulan->id }}" hidden>
                                            {{ $user->bulan->bulan }}</option>
                                        @foreach ($bulan as $bln)
                                            <option value="{{ $bln->id }}">{{ $bln->bulan }}</option>
                                        @endforeach
                                    </select> / <input type="text" class="input input-md input-bordered w-16 "
                                        name="tahunlahir" value="{{ $user->tahunlahir }}" required />
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-phone mr-2 fa-md"></i>No Hp </span>
                                    </label>
                                    <input type="number" class="input input-bordered w-full " name="nohp"
                                        value="{{ $user->nohp }}" required />
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-envelope mr-2 fa-md"></i>Email </span>
                                    </label>
                                    <input type="email" class="input input-bordered w-full " name="email"
                                        value="{{ $user->email }}" required />
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-location-dot mr-2 fa-md"></i>Alamat </span>
                                    </label>
                                    <textarea class="textarea textarea-bordered h-24" name="address" required>{{ $user->address }}</textarea>
                                </div>
                                <div class="form-control w-full my-2">
                                    <label class="label">
                                        <span class="label-text text-xs text-gray-500 font-bold uppercase"><i
                                                class="fa-solid fa-people-group mr-2 fa-md"></i>Divisi </span>
                                    </label>
                                    <select class="select select-bordered " name="divisi_id" required>
                                        <option selected value="{{ $user->divisi->id }}" hidden>
                                            {{ $user->divisi->divisi }}</option>
                                        @foreach ($divisi as $dv)
                                            <option value="{{ $dv->id }}">{{ $dv->divisi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" name="submit" class="btn bg-base-100 text-white "
                                    data-theme="night">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
