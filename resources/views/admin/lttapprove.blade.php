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
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Sesi</th>
                                            <th>Target</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($longterm as $ltt)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ltt->created_at->format('d-M-Y') }}</td>
                                                <td>{{ $ltt->user->name }}</td>
                                                <td>{{ $ltt->user->divisi->divisi }}</td>
                                                <td>{{ $ltt->sesi }}</td>
                                                <td>{{ $ltt->target }}</td>
                                                <td>
                                                    @if ($ltt->status == 1)
                                                        <strong><span style="color: green; text-transform: uppercase;"
                                                                class="text-xs">Disetujui</span></strong>
                                                    @elseif ($ltt->status == 2)
                                                        <strong><span style="color: red; text-transform: uppercase;"
                                                                class="text-xs">Ditolak</span></strong>
                                                    @else
                                                        <strong><span style="color: blue; text-transform: uppercase;"
                                                                class="text-xs">Tertunda</span></strong>
                                                    @endif
                                                </td>
                                                <td></td>
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
