@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>LTT DISETUJUI</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    {{-- <li><a href="{{ route('longterm') }}">Long Term Target</a></li> --}}
                                    <li>Approved</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
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
                                            <td>{{ $ltt->user->firstname }} {{ $ltt->user->lastname }}</td>
                                            <td>{{ $ltt->user->divisi->divisi }}</td>
                                            <td>{{ $ltt->sesi }}</td>
                                            <td>{{ $ltt->target }}</td>
                                            <td>
                                                @if ($ltt->status == 1)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Disetujui</span></strong>
                                                @elseif ($ltt->status == 2)
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Ditolak</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-warning rounded-lg text-xs text-black p-1 m-1 uppercase">Tertunda</span></strong>
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
@endsection
