@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT INTERVAL</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Interval Pomodoro</li>
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
                                    RIWAYAT INTERVAL
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
                        <div class="flex justify-end my-2">
                            <a href=""
                                onclick="this.href='/intervalpdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                                target="_blank" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>

                        <div class="overflow-auto rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-0 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Aksi</th>
                                        <th class="w-0 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Tanggal</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Nama</th>
                                        <th class="w-52 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Divisi</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center" colspan="4">
                                            Interval Terpenuhi</th>
                                    </tr>
                                    <tr>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">BP</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">SD</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">KL</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">IC</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y uppercase divide-gray-100 text-center">
                                    @foreach ($interval as $int)
                                        <tr>
                                            <td class="p-3 text-gray-700 whitespace-nowrap inline-flex">
                                                <form name="delete" class="inline"
                                                    action="{{ route('interval.delete', $int) }}" method="POST">
                                                    @method('delete') @csrf
                                                    <button type="submit" class="btn btn-sm btn-error text-xs text-white"
                                                        data-id="{{ $int->id }}">Hapus</button>
                                                </form>
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->user->firstname }} {{ $int->user->lastname }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->user->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                <span
                                                    class="font-bold">{{ $int->user->totalBpDate($int->created_at) / (60 * 30) }}
                                                </span> / 8
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                <span
                                                    class="font-bold">{{ $int->user->totalSdDate($int->created_at) / (60 * 30) }}
                                                </span> / 2
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                <span
                                                    class="font-bold">{{ $int->user->totalKlDate($int->created_at) / (60 * 30) }}
                                                </span> / 1
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                <span
                                                    class="font-bold">{{ $int->user->totalIcDate($int->created_at) / (60 * 30) }}
                                                </span> / 1
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @foreach ($interval as $int)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-1" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 justify-between">
                                        <span
                                            class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">{{ $int->created_at->format('Y-m-d') }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $int->user->firstname }}
                                            {{ $int->user->lastname }}</a></div>
                                    <div class="flex items-center space-x-2 text-sm">{{ $int->user->divisi->divisi }}
                                    </div>
                                    <div class="flex justify-end mt-2">
                                        <label for="viewModalMobile-{{ $int->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <form name="delete" class="inline" action="{{ route('interval.delete', $int) }}"
                                            method="POST">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-sm btn-error text-xs text-white ml-1"
                                                data-id="{{ $int->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $int->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $int->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $int->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            {{ $int->created_at->format('Y-m-d') }}
                                        </p>
                                        <div class="form-control">
                                            <label class="label font-bold uppercase text-xs">
                                                {{ $int->user->firstname }}
                                                {{ $int->user->lastname }}
                                            </label>
                                            <label class="label text-xs -mt-2">
                                                {{ $int->user->divisi->divisi }} <br>
                                                {{ $int->user->nohp }} <br>
                                                {{ $int->user->email }}
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-1:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_mb }} - {{ $int->timestop_mb }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-2:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_tp }} - {{ $int->timestop_tp }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-3:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp1 }} - {{ $int->timestop_bp1 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-4:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp2 }} - {{ $int->timestop_bp2 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-5:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp3 }} - {{ $int->timestop_bp3 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-6:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp4 }} - {{ $int->timestop_bp4 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-7:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_ic }} - {{ $int->timestop_ic }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-8:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_sd1 }} - {{ $int->timestop_sd1 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-9:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_kl }} - {{ $int->timestop_kl }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-10:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp5 }} - {{ $int->timestop_bp5 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-11:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp6 }} - {{ $int->timestop_bp6 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-12:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp7 }} - {{ $int->timestop_bp7 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-13:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp8 }} - {{ $int->timestop_bp8 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-14:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_cb }} - {{ $int->timestop_cb }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-15:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_ev }} - {{ $int->timestop_ev }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-16:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_sd2 }} - {{ $int->timestop_sd2 }}" readonly />
                                        </div>

                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $interval->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script> --}}
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

        // let table = new DataTable('#table_id', {});
    </script>
    {{-- <script>
        $(function() {
            $("#table_id").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": true
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script> --}}
@endsection
