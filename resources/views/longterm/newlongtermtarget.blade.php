@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">

                            <h3 class="font-bold">LONG TERM TARGET BARU</h3>

                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('longterm') }}">Long Term Target</a></li>
                                    <li>Baru</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <div class="my-4 ml-2">
                            <div class="form-control">
                                <label class="form-label font-bold uppercase text-sm">
                                    {{ auth()->user()->firstname }}
                                    {{ auth()->user()->lastname }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm">
                                    {{ auth()->user()->divisi->divisi }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm">
                                    {{ auth()->user()->nohp }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm italic">
                                    {{ auth()->user()->email }}
                                </label>
                            </div>
                        </div>
                        <form onsubmit="$('#submit').prop('disabled',true)" action="{{ route('longterm.store') }}"
                            method="POST" class="w-full">
                            @csrf
                            <div class="form-control">
                                <label for="sesi" class="form-label">
                                    <p class="font-bold text-sm uppercase">Sesi:</p>
                                </label>
                                <select class="select select-bordered select-sm w-full max-w-xs" name="sesi" required>
                                    <option disabled selected hidden>-</option>
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
                                    <input class="input input-bordered w-14 mr-2" name="period" required></input>
                                    <p class="font-bold text-sm uppercase mt-4">Bulan</p>
                                </div>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold text-sm uppercase">Judul Target:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Judul" name="target" required></textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold text-sm uppercase">Keterangan:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Keterangan" name="desc" required></textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold text-sm uppercase">Manfaat:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" placeholder="Manfaat" name="benefit" required></textarea>
                            </div>
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="status" name="status" value="0"
                                    required>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" name="submit" id="submit"
                                    class="btn bg-primary hover:bg-primary-focus text-white"
                                    data-theme="night">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
