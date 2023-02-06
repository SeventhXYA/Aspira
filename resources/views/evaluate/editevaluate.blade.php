@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">EDIT EVALUASI HARIAN</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('evaluate') }}">Evaluasi Harian</a></li>
                                    <li>Edit Evaluasi Harian</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action="/evaluate/update/{{ $evaluate->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <p class="font-bold uppercase text-sm">Evaluasi Perencanaan Harian:</p>
                                </label>
                                <textarea class="textarea textarea-bordered h-96" placeholder="Evaluasi Perencanaan & Interval Harian"
                                    name="dailyevaluate" required>{{ $evaluate->dailyevaluate }}</textarea>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-neutral text-white border-0"
                                    data-theme="night">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
