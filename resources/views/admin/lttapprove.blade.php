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
                                <div class="text-sm breadcrumbs">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        {{-- <li><a href="{{ route('longterm') }}">Long Term Target</a></li> --}}
                                        <li>Approved</li>
                                    </ul>
                                </div>
                            </strong>
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
@endsection
