@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row ">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT BISNIS & PROFIT</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href={{ route('dailybp') }}>Daily BP</a></li>
                                    <li>Riwayat</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert bg-cyan-800 shadow-xl md:hidden text-white">
                            <div>
                                <span class="font-bold uppercase">
                                    Riwayat Laporan
                                </span>
                            </div>
                        </div>
                        <div class="overflow-auto h-96 rounded-md shadow hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-16 p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            Plan</th>
                                        <th class="w-5 p-3 text-sm font-semibold tracking-wide text-left">Progres</th>
                                        <th class="w-5 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($dailybp as $bp)
                                    <tbody class="divide-y divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $bp->created_at->format('d-M-Y') }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700">
                                                {{ $bp->plan }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                @if ($bp->progress == 100)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                @elseif ($bp->progress == 50)
                                                    <strong><span
                                                            class="bg-warning rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Terselesaikan</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Tekerjakan</span></strong>
                                                @endif
                                            </td />
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                <label for="viewModal-{{ $bp->id }}"
                                                    class="btn btn-sm btn-primary text-sm text-white">Lihat</label>
                                                <a href="/dailybp/edit/{{ $bp->id }}"
                                                    class="btn btn-sm btn-warning text-sm text-white">Edit</a>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $bp->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $bp->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $bp->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <h5 class="modal-title font-bold" id="viewModalLabel">
                                                        {{ $bp->created_at->format('d-M-Y') }}
                                                    </h5>
                                                    <div class="my-4 ml-2">
                                                        <div class="form-control">
                                                            <label class="form-label font-bold uppercase text-sm">
                                                                {{ $bp->user->firstname }}
                                                                {{ $bp->user->lastname }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm">
                                                                {{ $bp->user->divisi->divisi }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm">
                                                                {{ $bp->user->nohp }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm italic">
                                                                {{ $bp->user->email }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $bp->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $bp->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">
                                                                Status:</p>
                                                        </label>
                                                        @if ($bp->progress == 100)
                                                            <strong><span
                                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                        @elseif ($bp->progress == 50)
                                                            <strong><span
                                                                    class="bg-warning rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Terselesaikan</span></strong>
                                                        @else
                                                            <strong><span
                                                                    class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Tekerjakan</span></strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">Deskripsi:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $bp->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($bp->pict) }}" alt="">
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        @foreach ($dailybp as $bp)
                            <div class="grid grid-cols-1 gap-4 md:hidden"data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="font-bold">{{ $bp->created_at->format('d-M-Y') }}</div>
                                        <div>
                                            @if ($bp->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($bp->progress == 50)
                                                <strong><span
                                                        class="bg-warning rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Terselesaikan</span></strong>
                                            @else
                                                <strong><span
                                                        class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Tekerjakan</span></strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-sm  my-2">{{ $bp->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $bp->id }}"
                                            class="btn btn-sm btn-primary text-sm text-white mr-2">Lihat</label>
                                        <a href="/dailybp/edit/{{ $bp->id }}"
                                            class="btn btn-sm btn-warning text-sm text-white">Edit</a>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $bp->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $bp->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $bp->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <h5 class="modal-title font-bold" id="viewModalLabel">
                                            {{ $bp->created_at->format('d-M-Y') }}
                                        </h5>
                                        <div class="my-4 ml-2">
                                            <div class="form-control">
                                                <label class="form-label font-bold uppercase text-sm">
                                                    {{ $bp->user->firstname }}
                                                    {{ $bp->user->lastname }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm">
                                                    {{ $bp->user->divisi->divisi }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm">
                                                    {{ $bp->user->nohp }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm italic">
                                                    {{ $bp->user->email }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">Rencana:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $bp->plan }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">
                                                    Aktual:</p>
                                            </label>
                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $bp->actual }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">
                                                    Status:</p>
                                            </label>
                                            @if ($bp->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($bp->progress == 50)
                                                <strong><span
                                                        class="bg-warning rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Terselesaikan</span></strong>
                                            @else
                                                <strong><span
                                                        class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Tekerjakan</span></strong>
                                            @endif
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">Deskripsi:</p>
                                            </label>
                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $bp->desc }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">Dokumentasi:</p>
                                            </label>
                                            <img src="{{ asset($bp->pict) }}" alt="">
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $dailybp->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
