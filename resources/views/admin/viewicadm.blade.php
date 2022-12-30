@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>HISTORY ACTIVITY REPORT IC</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Laporan Inovasi/Creativity</li>
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
                                onclick="this.href='/dailyicpdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
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
                        <div class="overflow-auto h-96 rounded-md shadow hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Divisi</th>
                                        <th class="sm:w-52 p-3 text-sm font-semibold tracking-wide text-left">
                                            Plan</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Progres</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($dailyic as $ic)
                                    <tbody class="divide-y divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $ic->created_at->format('d-M-Y') }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $ic->user->firstname }}
                                                {{ $ic->user->lastname }}</td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $ic->user->divisi->divisi }}</td>
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
                                                    class="btn btn-sm btn-primary text-sm text-white mr-1">Lihat</label>
                                                <a class="btn btn-sm btn-error text-sm text-white ml-1" id="delete"
                                                    data-id="{{ $ic->id }}">Hapus</a>
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
                            <div class="grid grid-cols-1 gap-4 md:hidden" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">

                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $ic->user->firstname }}</a></div>
                                    <div class="flex items-center space-x-2 text-sm">{{ $ic->user->divisi->divisi }}</div>

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
                                    <div class="text-sm my-2">{{ $ic->plan }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $ic->id }}"
                                            class="btn btn-sm btn-primary text-xs text-white mr-1">Lihat</label>
                                        <a class="btn btn-sm btn-error text-xs text-white ml-1" id="deleteMobile"
                                            data-id="{{ $ic->id }}">Hapus</a>
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
    <script>
        $('#delete').click(function() {
            var icid = $(this).attr('data-id');
            Swal.fire({
                title: 'Yakin menghapus data ini?',
                text: "Setelah data dihapus, data tidak bisa di kembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/dailyic/delete/" + icid + ""
                    Swal.fire(
                        'Data terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                    )
                }
            });
        });
    </script>

    <script>
        $('#deleteMobile').click(function() {
            var icid = $(this).attr('data-id');
            Swal.fire({
                title: 'Yakin menghapus data ini?',
                text: "Setelah data dihapus, data tidak bisa di kembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/dailyic/delete/" + icid + ""
                    Swal.fire(
                        'Data terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                    )
                }
            });
        });
    </script>
@endsection
