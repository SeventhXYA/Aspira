@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16 pb-5 uppercase">
        <div class="row justify-center">
            <div class="col col-12">
                {{-- @if (auth()->user()->level_id == 2) --}}
                @foreach ($users as $user)
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                        <div class="card-body mx-2">
                            <div class="flex justify-center lg:justify-start ">
                                <img class="mask mask-circle w-48 lg:w-80 border-8 md:w-60" src="img/{{ $user->pict }}"
                                    alt="" />
                                <div class="absolute bottom-4">
                                    <label for="my-modal-4" class="btn btn-circle bg-primary border-2 border-white">
                                        <i class="fa-solid fa-camera fa-2xl text-white"></i>
                                    </label>
                                </div>
                                <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
                                    <label for="my-modal-4" class="modal modal-bottom sm:modal-middle cursor-pointer">
                                        <label class="modal-box relative" for="">
                                            <h3 class="font-bold text-lg">Pilih Foto:</h3>
                                            <input type="file" class="file-input w-full max-w-x" name="pict"
                                                accept="image/*" />
                                            <div class="modal-action">
                                                <button for="my-modal-6" class="btn" type="Submit">Upload
                                                    Foto</button>
                                            </div>
                                        </label>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                        <div class="card-body mx-2 md:grid md:grid-cols-3">
                            <div class="flex justify-end">
                                <a href="{{ route('profile.edit') }}" class="btn bg-primary text-xs border-0 text-white"><i
                                        class="fa-solid fa-gear fa-xl"></i></a>
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Nama Pertama: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->firstname }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Nama Terakhir: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->lastname }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Jenis Kelamin: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->gender->gender }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Tempat Lahir: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->tempatlahir }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Tanggal Lahir: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->tanggallahir }}-{{ $user->bulan->bulan }}-{{ $user->tahunlahir }}"
                                    readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>No Hp: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->nohp }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Email: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->email }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Alamat: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->address }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Divisi: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs uppercase"
                                    value="{{ $user->divisi->divisi }}" readonly />
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @endif --}}
            </div>
        </div>
    </div>
@endsection
