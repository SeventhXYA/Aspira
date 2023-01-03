@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT KELEMBAGAAN</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href={{ route('dailykl') }}>Daily KL</a></li>
                                    <li>Riwayat</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert bg-cyan-800 shadow-xl text-white">
                            <div>
                                <span class="font-bold uppercase">
                                    Riwayat Laporan
                                </span>
                            </div>
                        </div>
                        @if (Session::has('edit'))
                            <div class="alert bg-warning shadow-md text-white" data-theme="light">
                                <div>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>{{ Session::get('edit') }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="overflow-auto h-96 rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Dibuat Tanggal</th>
                                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Tanggal Kegiatan</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-center" colspan="2">
                                            Waktu
                                            Kegiatan</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Plan</th>
                                        <th class="w-0 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Progres</th>
                                        <th class="w-0 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Aksi</th>
                                    </tr>
                                    <tr>
                                        <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Mulai</th>
                                        <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Selesai
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($dailykl as $kl)
                                    <tbody class="divide-y divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $kl->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $kl->date }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $kl->timestart }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $kl->timefinish }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700">
                                                {{ $kl->plan }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                @if ($kl->progress == 100)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                @elseif ($kl->progress == 50)
                                                    <strong><span
                                                            class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Terselesaikan</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Tekerjakan</span></strong>
                                                @endif
                                            </td />
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap inline-flex">
                                                <label for="viewModal-{{ $kl->id }}"
                                                    class="btn btn-sm btn-primary text-sm text-white mr-1">Lihat</label>
                                                <a href="/dailykl/edit/{{ $kl->id }}"
                                                    class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $kl->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $kl->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $kl->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <h5 class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                        Dibuat Tanggal: {{ $kl->created_at->format('Y-m-d') }}
                                                    </h5>
                                                    <div class="my-4 ">
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                                </p>
                                                            </label>
                                                            <p class="text-xs ml-1 font-semibold">
                                                                {{ $kl->date }}</p>
                                                        </div>
                                                        <div class="form-control inline-block">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                                </p>
                                                            </label>
                                                            <p class="text-xs ml-1 font-semibold">
                                                                {{ $kl->timestart }} s/d {{ $kl->timefinish }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $kl->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $kl->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Status:</p>
                                                        </label>
                                                        @if ($kl->progress == 100)
                                                            <strong><span
                                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                        @elseif ($kl->progress == 50)
                                                            <strong><span
                                                                    class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Terselesaikan</span></strong>
                                                        @else
                                                            <strong><span
                                                                    class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Tekerjakan</span></strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 bg-none text-xs uppercase" readonly>{{ $kl->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($kl->pict) }}" alt="">
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        @foreach ($dailykl as $kl)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-4" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 text-sm justify-between">
                                        <p class="uppercase font-semibold">Tanggal Kegiatan:</p>

                                        <div>
                                            @if ($kl->progress == 100)
                                                <span
                                                    class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">Terselesaikan</span>
                                            @elseif ($kl->progress == 50)
                                                <span
                                                    class="bg-primary rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">Tidak
                                                    Terselesaikan</span>
                                            @else
                                                <span
                                                    class="bg-error rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">Tidak
                                                    Tekerjakan</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="font-bold">{{ $kl->date }}
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-2 space-x-2 text-sm font-semibold">
                                        {{ $kl->timestart }} s/d
                                        {{ $kl->timefinish }}
                                    </div>
                                    <div class="text-sm  my-2 uppercase">{{ $kl->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $kl->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <a href="/dailykl/edit/{{ $kl->id }}"
                                            class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $kl->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $kl->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $kl->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <h5 class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            Dibuat Tanggal: {{ $kl->created_at->format('Y-m-d') }}
                                        </h5>
                                        <div class="my-4 ">
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                    </p>
                                                </label>
                                                <p class="text-xs ml-1 font-semibold">
                                                    {{ $kl->date }}</p>
                                            </div>
                                            <div class="form-control inline-block">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                    </p>
                                                </label>
                                                <p class="text-xs ml-1 font-semibold">
                                                    {{ $kl->timestart }} s/d {{ $kl->timefinish }}</p>
                                            </div>
                                        </div>

                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Rencana:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $kl->plan }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Aktual:</p>
                                            </label>
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $kl->actual }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Status:</p>
                                            </label>
                                            @if ($kl->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($kl->progress == 50)
                                                <strong><span
                                                        class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Terselesaikan</span></strong>
                                            @else
                                                <strong><span
                                                        class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Tekerjakan</span></strong>
                                            @endif
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                            </label>
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $kl->desc }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Dokumentasi:</p>
                                            </label>
                                            <img src="{{ asset($kl->pict) }}" alt="">
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $dailykl->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
