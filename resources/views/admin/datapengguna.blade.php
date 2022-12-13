@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col col-12">
                    <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="flex justify-end mb-4">
                                <a href={{ route('datapengguna.create') }}
                                    class="btn bg-base-100 text-xs border-0 text-white"><i class="fa-solid fa-plus"></i>Tambah
                                    Pengguna</a>
                            </div>
                            <div class="overflow-x-auto" data-theme="cmyk">
                                <table class="table table-zebra w-full text-xs table-compact">
                                    <!-- head -->
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Divisi</th>
                                            <th>NoHp</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($user as $usr)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $usr->name }}</td>
                                                <td>{{ $usr->gender->gender }}</td>
                                                <td>{{ $usr->divisi->divisi }}</td>
                                                <td>{{ $usr->nohp }}</td>
                                                <td>{{ $usr->email }}</td>
                                                <td>{{ $usr->address }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
