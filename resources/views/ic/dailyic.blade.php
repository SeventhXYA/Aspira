@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">INOVASI/CREATIVITY</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Daily IC</li>
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
                                        Laporan hari ini
                                    </span>
                                </div>
                            </div>
                            <div class="flex justify-end" data-theme="cmyk">
                                <a href="{{ route('dailyic.create') }}"
                                    class="btn bg-primary hover:bg-primary-focus border-0 text-white text-xs"><i
                                        class="fa-solid fa-plus mr-2"></i>Tambah
                                    Laporan</a>
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
                                            <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center"
                                                rowspan="2">Tanggal Laporan</th>
                                            <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center"
                                                rowspan="2">Tanggal Kegiatan</th>
                                            <th class="w-44 p-3 text-sm font-semibold tracking-wide text-center"
                                                colspan="2">Waktu
                                                Kegiatan</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                                Plan</th>
                                            <th class="w-40 p-3 text-sm font-semibold tracking-wide text-center"
                                                rowspan="2">Progres</th>
                                            <th class="w-0 p-3 text-sm font-semibold tracking-wide text-center"
                                                rowspan="2">Aksi</th>
                                        </tr>
                                        <tr>
                                            <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Mulai</th>
                                            <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Selesai
                                            </th>
                                        </tr>
                                    </thead>
                                    @foreach ($dailyic as $ic)
                                        <tbody class="divide-y divide-gray-100 ">
                                            <tr>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $ic->created_at->format('Y-m-d') }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $ic->date }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $ic->timestart }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $ic->timefinish }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700">
                                                    {{ $ic->plan }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    @if ($ic->progress == 100)
                                                        <div class="progress h-5 my-2 progress-sm">
                                                            <div class="progress-bar bg-green-500"
                                                                style="width: {{ $ic->progress }}%">
                                                                <label
                                                                    class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                            </div>
                                                        </div>
                                                    @elseif ($ic->progress >= 75)
                                                        <div class="progress h-5 my-2 progress-sm">
                                                            <div class="progress-bar bg-lime-500"
                                                                style="width: {{ $ic->progress }}%">
                                                                <label
                                                                    class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                            </div>
                                                        </div>
                                                    @elseif ($ic->progress >= 50)
                                                        <div class="progress h-5 my-2 progress-sm">
                                                            <div class="progress-bar bg-yellow-400"
                                                                style="width: {{ $ic->progress }}%">
                                                                <label
                                                                    class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                            </div>
                                                        </div>
                                                    @elseif ($ic->progress >= 25)
                                                        <div class="progress h-5 my-2 progress-sm">
                                                            <div class="progress-bar bg-orange-500"
                                                                style="width: {{ $ic->progress }}%">
                                                                <label
                                                                    class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="progress h-5 my-2 progress-sm">
                                                            <div class="progress-bar bg-red-500"
                                                                style="width: {{ $ic->progress }}%">
                                                                <label
                                                                    class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap inline-flex">
                                                    <label for="viewModal-{{ $ic->id }}"
                                                        class="btn btn-sm btn-primary text-sm text-white mr-1">Lihat</label>
                                                    <a href="dailyic/edit/{{ $ic->id }}"
                                                        class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                                </td>

                                                <input type="checkbox" id="viewModal-{{ $ic->id }}"
                                                    class="modal-toggle" />
                                                <label for="viewModal-{{ $ic->id }}" class="modal cursor-pointer">
                                                    <label class="modal-box relative bg-white">
                                                        <label for="viewModal-{{ $ic->id }}"
                                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                        <h5 class="modal-title font-bold text-sm uppercase"
                                                            id="viewModalLabel">
                                                            Tanggal Laporan: {{ $ic->created_at->format('Y-m-d') }}
                                                        </h5>
                                                        <div class="my-4 ">
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                                    </p>
                                                                </label>
                                                                <p class="text-xs ml-1 font-semibold">
                                                                    {{ $ic->date }}</p>
                                                            </div>
                                                            <div class="form-control inline-block">
                                                                <label class="label">
                                                                    <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                                    </p>
                                                                </label>
                                                                <p class="text-xs ml-1 font-semibold">
                                                                    {{ $ic->timestart }} s/d {{ $ic->timefinish }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Rencana:
                                                                </p>
                                                            </label>
                                                            <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $ic->plan }}</textarea>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">
                                                                    Aktual:</p>
                                                            </label>
                                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $ic->actual }}</textarea>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">
                                                                    Progres:</p>
                                                            </label>
                                                            @if ($ic->progress == 100)
                                                                <div class="progress h-5 my-2 progress-sm">
                                                                    <div class="progress-bar bg-green-500"
                                                                        style="width: {{ $ic->progress }}%">
                                                                        <label
                                                                            class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                                    </div>
                                                                </div>
                                                            @elseif ($ic->progress >= 75)
                                                                <div class="progress h-5 my-2 progress-sm">
                                                                    <div class="progress-bar bg-lime-500"
                                                                        style="width: {{ $ic->progress }}%">
                                                                        <label
                                                                            class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                                    </div>
                                                                </div>
                                                            @elseif ($ic->progress >= 50)
                                                                <div class="progress h-5 my-2 progress-sm">
                                                                    <div class="progress-bar bg-yellow-400"
                                                                        style="width: {{ $ic->progress }}%">
                                                                        <label
                                                                            class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                                    </div>
                                                                </div>
                                                            @elseif ($ic->progress >= 25)
                                                                <div class="progress h-5 my-2 progress-sm">
                                                                    <div class="progress-bar bg-orange-500"
                                                                        style="width: {{ $ic->progress }}%">
                                                                        <label
                                                                            class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="progress h-5 my-2 progress-sm">
                                                                    <div class="progress-bar bg-red-500"
                                                                        style="width: {{ $ic->progress }}%">
                                                                        <label
                                                                            class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                                            </label>
                                                            <textarea class="textarea h-32 bg-none text-xs uppercase" readonly>{{ $ic->desc }}</textarea>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-xs">Dokumentasi:</p>
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
                                <div class="grid grid-cols-1 gap-4 md:hidden my-4" data-theme="cmyk">
                                    <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                        <div class="flex items-center space-x-2 text-sm justify-between">
                                            <p class="uppercase font-semibold">Tanggal Kegiatan:</p>
                                            <div class="w-28">
                                                @if ($ic->progress == 100)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-green-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 75)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-lime-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 50)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-yellow-400"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 25)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-orange-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-red-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-2 text-sm">
                                            <div class="font-bold">{{ $ic->date }}
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-2 space-x-2 text-sm font-semibold">
                                            {{ $ic->timestart }} s/d
                                            {{ $ic->timefinish }}
                                        </div>
                                        <div class="text-sm  my-2 uppercase">{{ $ic->plan }}</div>
                                        <div class="flex justify-end">
                                            <label for="viewModalMobile-{{ $ic->id }}"
                                                class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                            <a href="dailyic/edit/{{ $ic->id }}"
                                                class="btn btn-sm btn-warning text-xs text-white ml-1">Edit</a>
                                        </div>
                                    </div>

                                    <input type="checkbox" id="viewModalMobile-{{ $ic->id }}"
                                        class="modal-toggle" />
                                    <label for="viewModalMobile-{{ $ic->id }}" class="modal cursor-pointer">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModalMobile-{{ $ic->id }}"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                Tanggal Laporan: {{ $ic->created_at->format('Y-m-d') }}
                                            </h5>
                                            <div class="my-4 ">
                                                <div class="form-control">
                                                    <label class="label">
                                                        <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                        </p>
                                                    </label>
                                                    <p class="text-xs ml-1 font-semibold">
                                                        {{ $ic->date }}</p>
                                                </div>
                                                <div class="form-control inline-block">
                                                    <label class="label">
                                                        <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                        </p>
                                                    </label>
                                                    <p class="text-xs ml-1 font-semibold">
                                                        {{ $ic->timestart }} s/d {{ $ic->timefinish }}</p>
                                                </div>
                                            </div>

                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Rencana:
                                                    </p>
                                                </label>
                                                <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $ic->plan }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">
                                                        Aktual:</p>
                                                </label>
                                                <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $ic->actual }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">
                                                        Progres:</p>
                                                </label>
                                                @if ($ic->progress == 100)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-green-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 75)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-lime-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 50)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-yellow-400"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($ic->progress >= 25)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-orange-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-red-500"
                                                            style="width: {{ $ic->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $ic->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                                </label>
                                                <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $ic->desc }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-xs">Dokumentasi:</p>
                                                </label>
                                                <img src="{{ asset($ic->pict) }}" alt="">
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
