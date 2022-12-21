@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16 pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>HISTORY REPORT ACTIVITY SD</h3>
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
                        <div class="flex justify-end mb-4">
                            <a href="{{ route('dailysdnowpdf') }}" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>
                        <div class="overflow-x-auto -mx-5 md:m-0 overflow-y h-96" data-theme="cmyk">
                            <table class="table w-full text-xs table-compact">
                                <!-- head -->
                                <thead>
                                    <tr class="justify-item-center">
                                        <td scope="col" style="min-width: 110px;">Tanggal</td>
                                        <td scope="col" style="min-width: 180px;">Nama</td>
                                        <td scope="col" style="min-width: 150px;">Divisi</td>
                                        <td scope="col" style="min-width: 400px;">Plan</td>
                                        <td scope="col">Progres</td>
                                        <td scope="col">Aksi</td>
                                    </tr>
                                </thead>
                                @foreach ($dailysd as $sd)
                                    <tr>
                                        <td>{{ $sd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $sd->user->firstname }} {{ $sd->user->lastname }}</td>
                                        <td>{{ $sd->user->divisi->divisi }}</td>
                                        <td>{{ $sd->plan }}</td>
                                        <td>
                                            @if ($sd->progress == 100)
                                                <span
                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1">Terselesaikan</span>
                                            @elseif ($sd->progress == 50)
                                                <span class="bg-warning rounded-lg text-xs text-white p-1 m-1">Tidak
                                                    Terselesaikan</span>
                                            @else
                                                <span class="bg-error rounded-lg text-xs text-white p-1 m-1">Tidak
                                                    Tekerjakan</span>
                                            @endif
                                        </td />
                                        <td>
                                            <label for="viewModal-{{ $sd->id }}"
                                                class="btn btn-sm btn-primary text-sm text-white">Lihat</label>
                                            <a class="btn btn-sm btn-error text-sm text-white" id="delete"
                                                data-id="{{ $sd->id }}">Hapus</a>
                                        </td>

                                        <input type="checkbox" id="viewModal-{{ $sd->id }}" class="modal-toggle" />
                                        <label for="viewModal-{{ $sd->id }}" class="modal cursor-pointer">
                                            <label class="modal-box relative bg-white">
                                                <label for="viewModal-{{ $sd->id }}"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title" id="viewModalLabel">
                                                    <strong>{{ $sd->created_at->format('d-M-Y') }}</strong>
                                                </h5>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Nama:</strong></h4>
                                                    </label>
                                                    <input type="text" class="input w-full max-w-xs "
                                                        value="{{ $sd->user->firstname }} {{ $sd->user->lastname }}"
                                                        readonly />
                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Divisi:</strong></h4>
                                                    </label>
                                                    <input type="text" class="input w-full max-w-xs "
                                                        value="{{ $sd->user->divisi->divisi }}" readonly />

                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Plan:</strong></h4>
                                                    </label>
                                                    <textarea class="textarea textarea-bordered h-24 bg-slate-100" readonly>{{ $sd->plan }}</textarea>
                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Actual:</strong></h4>
                                                    </label>
                                                    <textarea class="textarea textarea-bordered h-24 bg-slate-100" readonly>{{ $sd->actual }}</textarea>
                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Status:</strong></h4>
                                                    </label>
                                                    <input type="text"
                                                        class="input input-bordered w-full max-w-xs bg-slate-100"
                                                        value="@if ($sd->progress == 100) Terselesaikan
                                                        @elseif ($sd->progress == 50)Tidak Terselesaikan
                                                        @else()Tidak Tekerjakan @endif"
                                                        readonly />
                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Deskripsi:</strong></h4>
                                                    </label>
                                                    <textarea class="textarea textarea-bordered h-24 bg-slate-100" placeholder="Deskripsi" name="desc" readonly>{{ $sd->desc }}</textarea>
                                                </div>
                                                <div class="form-control">
                                                    <label class="label">
                                                        <h4><strong>Dokumentasi:</strong></h4>
                                                    </label>
                                                    <img src="{{ asset($sd->pict) }}" alt="">
                                                </div>
                                            </label>
                                        </label>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#delete').click(function() {
            var sdid = $(this).attr('data-id');
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
                    window.location = "dailysd/delete/" + sdid + ""
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
