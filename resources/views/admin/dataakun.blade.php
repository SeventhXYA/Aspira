@extends('layouts.form')
@section('form')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body -mx-5">
                        <div class="flex justify-end mb-4">
                            <a href={{ route('datapengguna.create') }} class="btn bg-primary text-xs border-0 text-white"><i
                                    class="fa-solid fa-plus"></i>Tambah
                                Akun</a>
                        </div>
                        <div class="overflow-x-auto" data-theme="cmyk">
                            <table class="table table-zebra w-full text-xs table-compact">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($identities as $idn) --}}
                                    @foreach ($user as $usr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $usr->userdata->firstname }} {{ $usr->userdata->lastname }}</td>
                                            <td>{{ $usr->username }}</td>
                                            <td>{{ $usr->level->level }}</td>
                                            {{-- @endforeach --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
