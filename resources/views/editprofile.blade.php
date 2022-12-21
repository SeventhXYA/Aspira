@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16 pb-5">
        <div class="row justify-center">
            <div class="col-12">
                {{-- @if (auth()->user()->level_id == 2) --}}
                {{-- @foreach ($user as $user) --}}
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EDIT PROFIL</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('profile') }}">Profil</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                    <div class="card-body mx-2">
                        <form action="{{ route('profile.update') }}" class="min-w-full" method="POST">
                            @csrf
                            <div class="md:grid md:grid-cols-3">
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Nama Pertama:</strong></h4>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs" name="firstname"
                                        value="{{ $user->firstname }}" required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Nama Terakhir:</strong></h4>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs " name="lastname"
                                        value="{{ $user->lastname }}" />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Jenis Kelamin:</strong></h4>
                                    </label>
                                    <select class="select select-bordered w-36 " name="gender_id" required>
                                        <option selected value="{{ $user->gender->id }}" hidden>
                                            {{ $user->gender->gender }}</option>
                                        @foreach ($gender as $gd)
                                            <option value="{{ $gd->id }}">{{ $gd->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Tempat Lahir</strong></h4>
                                    </label>
                                    <input type="text" class="input input-bordered w-full max-w-xs " name="tempatlahir"
                                        value="{{ $user->tempatlahir }}" required />
                                </div>
                                <div class="form-control w-full max-w-xs inline">
                                    <label class="label">
                                        <h4><strong>Tanggal Lahir</strong></h4>
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
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>No Hp:</strong></h4>
                                    </label>
                                    <input type="number" class="input input-bordered w-full max-w-xs " name="nohp"
                                        value="{{ $user->nohp }}" required />
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Email:</strong></h4>
                                    </label>
                                    <input type="email" class="input input-bordered w-full max-w-xs " name="email"
                                        value="{{ $user->email }}" required />
                                </div>
                                <div class="form-control">
                                    <label class="label">
                                        <h4><strong>Alamat:</strong></h4>
                                    </label>
                                    <textarea class="textarea textarea-bordered h-24 w-80" name="address" required>{{ $user->address }}</textarea>
                                </div>
                                <div class="form-control w-full max-w-xs">
                                    <label class="label">
                                        <h4><strong>Divisi:</strong></h4>
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
                {{-- @endforeach --}}
                {{-- @endif --}}
            </div>
        </div>
    </div>
@endsection
