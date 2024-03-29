@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EDIT MONTHLY TARGET</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('monthly') }}">Monthly Target</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="/monthly/update/{{ $longterm->id }}" method="POST">
                            @csrf
                            <div class="form-control">
                                <label for="sesi" class="form-label">
                                    <h4><strong>Sesi:</strong></h4>
                                </label>
                                <select class="select select-bordered select-sm w-full max-w-xs" name="sesi">
                                    <option disabled selected hidden>{{ $longterm->sesi }}</option>
                                    <option value="SD">SD - Self-Development</option>
                                    <option value="BP">BP - Bisnis/Profit</option>
                                    <option value="KL">KL - Kelembagaan</option>
                                    <option value="IC">IC - Inovasi/Creativity</option>
                                </select>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold text-sm uppercase">Lama Target:</p>
                                </label>
                                <div class="inline-flex">
                                    <input class="input input-bordered w-14 mr-2" name="period"
                                        value="{{ $longterm->period }}"></input>
                                    <p class="font-bold text-sm uppercase mt-4">Bulan</p>
                                </div>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Judul Target:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="target">{{ $longterm->target }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Deskripsikan Target:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="desc">{{ $longterm->desc }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4><strong>Manfaat:</strong></h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="benefit">{{ $longterm->benefit }}</textarea>
                            </div>
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="status" name="status"
                                    value="{{ $longterm->status }}" required>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" name="submit" class="btn bg-neutral text-white"
                                    data-theme="night">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
