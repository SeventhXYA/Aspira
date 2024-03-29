@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT LAPORAN BP</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Laporan Bisnis & Profit</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert text-sm bg-cyan-800 mb-2 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    RIWAYAT LAPORAN
                                </span>
                            </div>
                        </div>
                        <div data-theme="cmyk">
                            <div class="form-control w-full max-w-xs grid grid-cols-2">
                                <label class="label">
                                    <span class="font-bold text-sm">Cetak Dari Tgl:</span>
                                </label>
                                <input type="date" name="tglawal" id="tglawal"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            <div class="form-control w-full max-w-xs grid grid-cols-2">
                                <label class="label">
                                    <span class="font-bold text-sm">Cetak Hingga Tgl:</span>
                                </label>
                                <input type="date" name="tglakhir" id="tglakhir"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                        </div>
                        <div class="justify-between my-2 hidden md:flex">
                            <a href=""
                                onclick="this.href='/dailybppdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                                target="_blank" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                            <div class="form-control" data-theme="cmyk">
                                <form action="" method="GET" class="w-full">
                                    <div class="input-group">
                                        <input type="text" placeholder="Cari…" name="keyword"
                                            class="input input-bordered" />
                                        <button class="btn btn-square bg-cyan-800 hover:bg-cyan-900 border-0"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="justify-start my-1 flex md:hidden">
                            <a href=""
                                onclick="this.href='/dailybppdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                                target="_blank" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>
                        <div class="justify-end my-1 flex md:hidden">
                            <div class="form-control w-full" data-theme="cmyk">
                                <form action="" method="get">
                                    <div class="input-group w-full">
                                        <input type="text" placeholder="Cari…" name="keyword"
                                            class="input input-bordered w-full" />
                                        <button class="btn btn-square bg-cyan-800 hover:bg-cyan-900 border-0"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="overflow-auto rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Tanggal Laporan</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Nama</th>
                                        <th class="w-52 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Divisi</th>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Tanggal Kegiatan</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-center" colspan="2">
                                            Waktu
                                            Kegiatan</th>
                                        <th class="w-72 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Plan</th>
                                        <th class="w-52 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Progres</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Aksi</th>
                                    </tr>
                                    <tr>
                                        <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Mulai</th>
                                        <th class="w-14 p-3 text-sm font-semibold tracking-wide text-center">Selesai
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($dailybp as $bp)
                                    <tbody class="divide-y uppercase divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->user->firstname }} {{ $bp->user->lastname }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->user->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->date }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->timestart }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->timefinish }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $bp->plan }}
                                            </td>
                                            <td class="p-3 text-gray-700">
                                                @if ($bp->progress == 100)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-green-500"
                                                            style="width: {{ $bp->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($bp->progress >= 75)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-lime-500"
                                                            style="width: {{ $bp->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($bp->progress >= 50)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-yellow-400"
                                                            style="width: {{ $bp->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @elseif ($bp->progress >= 25)
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-orange-500"
                                                            style="width: {{ $bp->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="progress h-5 my-2 progress-sm">
                                                        <div class="progress-bar bg-red-500"
                                                            style="width: {{ $bp->progress }}%">
                                                            <label
                                                                class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="p-3 text-gray-700 inline-flex">
                                                <label for="viewModal-{{ $bp->id }}"
                                                    class="btn btn-sm btn-primary text-xs text-white mr-1">Lihat</label>
                                                <form name="delete" class="inline"
                                                    action="{{ route('dailybp.delete', $bp) }}" method="POST">
                                                    @method('delete') @csrf
                                                    <button type="submit" class="btn btn-sm btn-error text-xs text-white"
                                                        data-id="{{ $bp->id }}">Hapus</button>
                                                </form>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $bp->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $bp->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $bp->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <p class="modal-title font-bold text-sm uppercase"
                                                        id="viewModalLabel">
                                                        Dibuat Tanggal: {{ $bp->created_at->format('Y-m-d') }}
                                                    </p>
                                                    <div class="form-control">
                                                        <label class="label font-bold uppercase text-xs">
                                                            {{ $bp->user->firstname }}
                                                            {{ $bp->user->lastname }}
                                                        </label>
                                                        <label class="label text-xs -mt-2">
                                                            {{ $bp->user->divisi->divisi }} <br>
                                                            {{ $bp->user->nohp }} <br>
                                                            {{ $bp->user->email }}
                                                        </label>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none text-xs uppercase font-semibold"
                                                            value="{{ $bp->date }}" readonly />
                                                    </div>
                                                    <div class="form-control inline-block">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $bp->timestart }}" readonly /> s/d <input
                                                            class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $bp->timefinish }}" readonly />
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $bp->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $bp->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Progres:</p>
                                                        </label>
                                                        @if ($bp->progress == 100)
                                                            <div class="progress h-5 my-2 progress-sm">
                                                                <div class="progress-bar bg-green-500"
                                                                    style="width: {{ $bp->progress }}%">
                                                                    <label
                                                                        class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                                </div>
                                                            </div>
                                                        @elseif ($bp->progress >= 75)
                                                            <div class="progress h-5 my-2 progress-sm">
                                                                <div class="progress-bar bg-lime-500"
                                                                    style="width: {{ $bp->progress }}%">
                                                                    <label
                                                                        class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                                </div>
                                                            </div>
                                                        @elseif ($bp->progress >= 50)
                                                            <div class="progress h-5 my-2 progress-sm">
                                                                <div class="progress-bar bg-yellow-400"
                                                                    style="width: {{ $bp->progress }}%">
                                                                    <label
                                                                        class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                                </div>
                                                            </div>
                                                        @elseif ($bp->progress >= 25)
                                                            <div class="progress h-5 my-2 progress-sm">
                                                                <div class="progress-bar bg-orange-500"
                                                                    style="width: {{ $bp->progress }}%">
                                                                    <label
                                                                        class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="progress h-5 my-2 progress-sm">
                                                                <div class="progress-bar bg-red-500"
                                                                    style="width: {{ $bp->progress }}%">
                                                                    <label
                                                                        class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $bp->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold text-xs uppercase">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($bp->pict) }}" alt="">
                                                        <a href="{{ asset($bp->pict) }}"
                                                            class=" text-blue-500 font-bold underline mt-3">Lihat Gambar
                                                            Full</a>
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        @foreach ($dailybp as $bp)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-1" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 justify-between">
                                        <span
                                            class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">{{ $bp->created_at->format('Y-m-d') }}</span>
                                        <div class="w-28">
                                            @if ($bp->progress == 100)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-green-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 75)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-lime-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 50)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-yellow-400"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 25)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-orange-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-red-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $bp->user->firstname }}
                                            {{ $bp->user->lastname }}</a></div>
                                    <div class="flex items-center space-x-2 text-sm">{{ $bp->user->divisi->divisi }}</div>

                                    <div class="flex items-center space-x-2 mt-2 text-sm">
                                        <p class="uppercase font-semibold">Tanggal Kegiatan:</p>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="font-bold">{{ $bp->date }}
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-2 space-x-2 text-sm font-semibold">
                                        {{ $bp->timestart }} s/d
                                        {{ $bp->timefinish }}
                                    </div>
                                    <div class="text-sm  my-2 uppercase">{{ $bp->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $bp->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <form name="delete" class="inline" action="{{ route('dailybp.delete', $bp) }}"
                                            method="POST">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-sm btn-error text-xs text-white ml-1"
                                                data-id="{{ $bp->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $bp->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $bp->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $bp->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            Dibuat Tanggal: {{ $bp->created_at->format('Y-m-d') }}
                                        </p>
                                        <div class="form-control">
                                            <label class="label font-bold uppercase text-xs">
                                                {{ $bp->user->firstname }}
                                                {{ $bp->user->lastname }}
                                            </label>
                                            <label class="label text-xs -mt-2">
                                                {{ $bp->user->divisi->divisi }} <br>
                                                {{ $bp->user->nohp }} <br>
                                                {{ $bp->user->email }}
                                            </label>
                                        </div>

                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $bp->date }}" readonly />
                                        </div>
                                        <div class="form-control inline-block">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                </p>
                                            </label>
                                            <input class="input bg-none w-24 uppercase text-xs font-semibold"
                                                value="{{ $bp->timestart }}" readonly /> s/d <input
                                                class="input bg-none w-24 uppercase text-xs font-semibold"
                                                value="{{ $bp->timefinish }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Rencana:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $bp->plan }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Aktual:</p>
                                            </label>
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $bp->actual }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Progres:</p>
                                            </label>
                                            @if ($bp->progress == 100)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-green-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 75)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-lime-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 50)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-yellow-400"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @elseif ($bp->progress >= 25)
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-orange-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="progress h-5 my-2 progress-sm">
                                                    <div class="progress-bar bg-red-500"
                                                        style="width: {{ $bp->progress }}%">
                                                        <label class="text-md font-semibold">{{ $bp->progress }}%</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                            </label>
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $bp->desc }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold text-xs uppercase">Dokumentasi:</p>
                                            </label>
                                            <img src="{{ asset($bp->pict) }}" alt="">
                                            <a href="{{ asset($bp->pict) }}"
                                                class=" text-blue-500 font-bold underline mt-3">Lihat Gambar Full</a>
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $dailybp->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if (session()->has('success'))
            Swal.fire(
                'Sukses!',
                'Data berhasil dihapus.',
                'success'
            )
        @endif

        document.querySelectorAll('form[name="delete"]').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault()

                Swal.fire({
                    title: 'Yakin menghapus data ini?',
                    text: 'Setelah data dihapus, data tidak bisa dikembalikan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit()
                    }
                })
            })
        })
    </script>
@endsection
