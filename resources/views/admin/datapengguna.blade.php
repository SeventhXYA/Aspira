@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>DATA PENGGUNA</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    {{-- <li><a>Documents</a></li> --}}
                                    <li>Data Pengguna</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="flex justify-end mb-4">
                            <a href={{ route('datapengguna.create') }} class="btn bg-primary text-xs border-0 text-white"><i
                                    class="fa-solid fa-user-plus mr-2"></i>Tambah Pengguna</a>
                        </div>
                        <div class="overflow-x-auto" data-theme="cmyk">
                            <table class="table table-zebra w-full text-xs table-compact">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Divisi</th>
                                        <th>NoHp</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $usd)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="img/{{ $usd->pict }}" alt="" width="50"></td>
                                            <td>{{ $usd->firstname }} {{ $usd->lastname }}</td>
                                            <td>{{ $usd->gender->gender }}</td>
                                            <td>{{ $usd->divisi->divisi }}</td>
                                            <td>{{ $usd->nohp }}</td>
                                            <td>{{ $usd->email }}</td>
                                            <td>{{ $usd->address }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary text-sm text-white">Lihat</a>
                                                <a class="btn btn-sm btn-warning text-sm text-white">Ubah</a>
                                                <a class="btn btn-sm btn-error text-sm text-white" id="delete"
                                                    data-id="{{ $usd->id }}">Hapus</a>
                                            </td>
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
@endsection
