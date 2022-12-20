@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <strong>
                            <h3>{{ $sesi }}</h3>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('form')
@endsection
