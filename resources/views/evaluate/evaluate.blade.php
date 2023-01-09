@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">EVALUASI</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Evaluasi Harian</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="justify-center -mx-2">
                            <div class="alert text-sm bg-cyan-800 shadow-xl text-white">
                                <div>
                                    <span class="uppercase font-bold">
                                        Evaluasi hari ini
                                    </span>
                                </div>
                            </div>
                            <div class="flex justify-end" data-theme="cmyk">
                                <a href="{{ route('evaluate.create') }}"
                                    class="btn bg-primary hover:bg-primary-focus border-0 text-white text-xs"><i
                                        class="fa-solid fa-plus mr-2"></i>Tambah
                                    Evaluasi</a>
                            </div>
                            @if (Session::has('success'))
                                <div class="alert bg-green-500 shadow-md my-4 text-white" data-theme="light">
                                    <div>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>{{ Session::get('success') }}</span>
                                    </div>
                                </div>
                            @elseif (Session::has('edit'))
                                <div class="alert bg-warning shadow-md my-4 text-white" data-theme="light">
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
                                            <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left"
                                                rowspan="2">Dibuat Tanggal</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                                Evaluasi Perencanaan & Interval</th>
                                            <th class="w-16 p-3 text-sm font-semibold tracking-wide text-left"
                                                rowspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($evaluate as $ev)
                                        <tbody class="divide-y divide-gray-100 ">
                                            <tr>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $ev->created_at->format('Y-m-d') }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 uppercase">
                                                    {{ $ev->dailyevaluate }}
                                                </td>

                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap inline-flex">
                                                    <label for="viewModal-{{ $ev->id }}"
                                                        class="btn btn-sm btn-primary text-sm text-white mr-1">Lihat</label>
                                                    <a href="evaluate/edit/{{ $ev->id }}"
                                                        class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                                </td>

                                                <input type="checkbox" id="viewModal-{{ $ev->id }}"
                                                    class="modal-toggle" />
                                                <label for="viewModal-{{ $ev->id }}" class="modal cursor-pointer">
                                                    <label class="modal-box relative bg-white">
                                                        <label for="viewModal-{{ $ev->id }}"
                                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                        <h5 class="modal-title font-bold text-sm uppercase"
                                                            id="viewModalLabel">
                                                            {{ $ev->created_at->format('Y-m-d') }}
                                                        </h5>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Evaluasi Perencanaan
                                                                    & Interval:
                                                                </p>
                                                            </label>
                                                            <textarea class="textarea h-96 text-xs bg-none uppercase" readonly>{{ $ev->dailyevaluate }}</textarea>
                                                        </div>
                                                    </label>
                                                </label>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            @foreach ($evaluate as $ev)
                                <div class="grid grid-cols-1 gap-4 md:hidden my-4" data-theme="cmyk">
                                    <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                        <div class="flex items-center space-x-2 text-sm">
                                            <p class="uppercase font-bold">Evaluasi Harian:</p>
                                        </div>
                                        <div class="flex items-center space-x-2 text-sm">
                                            <div class="font-semibold">{{ $ev->created_at->format('Y-m-d') }}
                                            </div>
                                        </div>
                                        <div class="text-sm  my-2 uppercase">{{ $ev->dailyevaluate }}</div>
                                        <div class="flex justify-end">
                                            <label for="viewModalMobile-{{ $ev->id }}"
                                                class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                            <a href="evaluate/edit/{{ $ev->id }}"
                                                class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                        </div>
                                    </div>

                                    <input type="checkbox" id="viewModalMobile-{{ $ev->id }}" class="modal-toggle" />
                                    <label for="viewModalMobile-{{ $ev->id }}" class="modal cursor-pointer">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModalMobile-{{ $ev->id }}"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                {{ $ev->created_at->format('Y-m-d') }}
                                            </h5>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Evaluasi Perencanaan & Interval:
                                                    </p>
                                                </label>
                                                <textarea class="textarea h-96 text-xs bg-none uppercase" readonly>{{ $ev->dailyevaluate }}</textarea>
                                            </div>
                                        </label>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
