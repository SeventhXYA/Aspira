@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>HISTORY ACTIVITY REPORT SD</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Laporan Self-Development</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
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
                        <div class="flex justify-end my-2">
                            <a href=""
                                onclick="this.href='/dailysdpdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                                target="_blank" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>
                        <div class="alert text-sm bg-cyan-800 mb-2 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    Riwayat Activity Report
                                </span>
                            </div>
                        </div>
                        <div class="overflow-auto h-96 rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Dibuat Tanggal</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Nama</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Divisi</th>
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
                                @foreach ($dailysd as $sd)
                                    <tbody class="divide-y uppercase divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->user->firstname }} {{ $sd->user->lastname }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->user->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->date }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->timestart }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $sd->timefinish }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700">
                                                {{ $sd->plan }}
                                            </td>
                                            <td class="p-3 text-gray-700 whitespace-nowrap">
                                                @if ($sd->progress == 100)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                @elseif ($sd->progress == 50)
                                                    <strong><span
                                                            class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Terselesaikan</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                            Tekerjakan</span></strong>
                                                @endif
                                            </td />
                                            <td class="p-3 text-gray-700 whitespace-nowrap inline-flex">
                                                <label for="viewModal-{{ $sd->id }}"
                                                    class="btn btn-xs btn-primary text-xs text-white mr-1">Lihat</label>
                                                <form name="delete" class="inline"
                                                    action="{{ route('dailysd.delete', $sd) }}" method="POST">
                                                    @method('delete') @csrf
                                                    <button type="submit" class="btn btn-xs btn-error text-xs text-white"
                                                        data-id="{{ $sd->id }}">Hapus</button>
                                                </form>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $sd->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $sd->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $sd->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                        Dibuat Tanggal: {{ $sd->created_at->format('Y-m-d') }}
                                                    </p>
                                                    <div class="form-control">
                                                        <label class="label font-bold uppercase text-xs">
                                                            {{ $sd->user->firstname }}
                                                            {{ $sd->user->lastname }}
                                                        </label>
                                                        <label class="label text-xs -mt-2">
                                                            {{ $sd->user->divisi->divisi }} <br>
                                                            {{ $sd->user->nohp }} <br>
                                                            {{ $sd->user->email }}
                                                        </label>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none text-xs uppercase font-semibold"
                                                            value="{{ $sd->date }}" readonly />
                                                    </div>
                                                    <div class="form-control inline-block">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $sd->timestart }}" readonly /> s/d <input
                                                            class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $sd->timefinish }}" readonly />
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $sd->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $sd->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Status:</p>
                                                        </label>
                                                        @if ($sd->progress == 100)
                                                            <strong><span
                                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                        @elseif ($sd->progress == 50)
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
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $sd->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold text-xs uppercase">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($sd->pict) }}" alt="">
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        @foreach ($dailysd as $sd)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-1" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 justify-between">
                                        <span
                                            class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">{{ $sd->created_at->format('Y-m-d') }}</span>
                                        <div>
                                            @if ($sd->progress == 100)
                                                <span
                                                    class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">Terselesaikan</span>
                                            @elseif ($sd->progress == 50)
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
                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $sd->user->firstname }}
                                            {{ $sd->user->lastname }}</a></div>
                                    <div class="flex items-center space-x-2 text-sm">{{ $sd->user->divisi->divisi }}</div>

                                    <div class="flex items-center space-x-2 mt-2 text-sm">
                                        <p class="uppercase font-semibold">Tanggal Kegiatan:</p>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="font-bold">{{ $sd->date }}
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-2 space-x-2 text-sm font-semibold">
                                        {{ $sd->timestart }} s/d
                                        {{ $sd->timefinish }}
                                    </div>
                                    <div class="text-sm  my-2 uppercase">{{ $sd->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $sd->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <form name="delete" class="inline" action="{{ route('dailysd.delete', $sd) }}"
                                            method="POST">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-sm btn-error text-xs text-white ml-1"
                                                data-id="{{ $sd->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $sd->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $sd->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $sd->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            Dibuat Tanggal: {{ $sd->created_at->format('Y-m-d') }}
                                        </p>
                                        <div class="form-control">
                                            <label class="label font-bold uppercase text-xs">
                                                {{ $sd->user->firstname }}
                                                {{ $sd->user->lastname }}
                                            </label>
                                            <label class="label text-xs -mt-2">
                                                {{ $sd->user->divisi->divisi }} <br>
                                                {{ $sd->user->nohp }} <br>
                                                {{ $sd->user->email }}
                                            </label>
                                        </div>

                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $sd->date }}" readonly />
                                        </div>
                                        <div class="form-control inline-block">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                </p>
                                            </label>
                                            <input class="input bg-none w-24 uppercase text-xs font-semibold"
                                                value="{{ $sd->timestart }}" readonly /> s/d <input
                                                class="input bg-none w-24 uppercase text-xs font-semibold"
                                                value="{{ $sd->timefinish }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Rencana:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $sd->plan }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Aktual:</p>
                                            </label>
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $sd->actual }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">
                                                    Status:</p>
                                            </label>
                                            @if ($sd->progress == 100)
                                                <strong><span
                                                        class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                            @elseif ($sd->progress == 50)
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
                                            <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $sd->desc }}</textarea>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold text-xs uppercase">Dokumentasi:</p>
                                            </label>
                                            <img src="{{ asset($sd->pict) }}" alt="">
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $dailysd->links() }}
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
