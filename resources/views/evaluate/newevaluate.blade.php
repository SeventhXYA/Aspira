@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">EVALUASI HARIAN</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('evaluate') }}">Evaluasi</a></li>
                                    <li>Evaluasi Harian</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form onsubmit="$('#submit').prop('disabled',true)" action="{{ route('evaluate.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Evaluasi Perencanaan & Interval:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-96" placeholder="Evaluasi Perencanaan & Interval Harian"
                                    name="dailyevaluate" required></textarea>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" name="submit" id="submit"
                                    class="btn bg-primary hover:bg-primary-focus border-0 text-white"
                                    data-theme="night">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
