@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT INOVASI/CREATIVITY</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href={{ route('dailyic') }}>Daily IC</a></li>
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
                                @foreach ($dailyic as $ic)
                                    <tbody class="divide-y divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $ic->created_at->format('d-M-Y') }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700">
                                                {{ $ic->plan }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                @if ($ic->progress == 100)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                @elseif ($ic->progress == 50)
                                                    <strong><span
                                                            class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Terselesaikan</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Tekerjakan</span></strong>
                                                @endif
                                            </td />
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                <label for="viewModal-{{ $ic->id }}"
                                                    class="btn btn-sm btn-primary text-sm text-white">Lihat</label>
                                                <a href="/dailyic/edit/{{ $ic->id }}"
                                                    class="btn btn-sm btn-warning text-sm text-white">Edit</a>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $ic->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $ic->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $ic->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <h5 class="modal-title font-bold" id="viewModalLabel">
                                                        {{ $ic->created_at->format('d-M-Y') }}
                                                    </h5>
                                                    <div class="my-4 ml-2">
                                                        <div class="form-control">
                                                            <label class="form-label font-bold uppercase text-sm">
                                                                {{ $ic->user->firstname }}
                                                                {{ $ic->user->lastname }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm">
                                                                {{ $ic->user->divisi->divisi }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm">
                                                                {{ $ic->user->nohp }}
                                                            </label>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="form-label text-sm italic">
                                                                {{ $ic->user->email }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $ic->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ic->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">
                                                                Status:</p>
                                                        </label>
                                                        @if ($ic->progress == 100)
                                                            <strong><span
                                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                        @elseif ($ic->progress == 50)
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
                                                            <p class="font-bold uppercase text-sm">Deskripsi:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ic->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-sm">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($ic->pict) }}" alt="">
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        @foreach ($dailyic as $ic)
                            <div class="grid grid-cols-1 gap-4 md:hidden"data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="font-bold">{{ $ic->created_at->format('d-M-Y') }}</div>
                                        <div>
                                            @if ($ic->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($ic->progress == 50)
                                                <strong><span
                                                        class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Terselesaikan</span></strong>
                                            @else
                                                <strong><span
                                                        class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                        Tekerjakan</span></strong>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-sm  my-2">{{ $ic->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $ic->id }}"
                                            class="btn btn-sm btn-primary text-sm text-white mr-2">Lihat</label>
                                        <a href="/dailyic/edit/{{ $ic->id }}"
                                            class="btn btn-sm btn-warning text-sm text-white">Edit</a>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $ic->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $ic->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $ic->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <h5 class="modal-title font-bold" id="viewModalLabel">
                                            {{ $ic->created_at->format('d-M-Y') }}
                                        </h5>
                                        <div class="my-4 ml-2">
                                            <div class="form-control">
                                                <label class="form-label font-bold uppercase text-sm">
                                                    {{ $ic->user->firstname }}
                                                    {{ $ic->user->lastname }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm">
                                                    {{ $ic->user->divisi->divisi }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm">
                                                    {{ $ic->user->nohp }}
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="form-label text-sm italic">
                                                    {{ $ic->user->email }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">Rencana:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $ic->plan }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">
                                                    Aktual:</p>
                                            </label>
                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ic->actual }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">
                                                    Status:</p>
                                            </label>
                                            @if ($ic->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($ic->progress == 50)
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
                                                <p class="font-bold uppercase text-sm">Deskripsi:</p>
                                            </label>
                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ic->desc }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-sm">Dokumentasi:</p>
                                            </label>
                                            <img src="{{ asset($ic->pict) }}" alt="">
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $dailyic->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
