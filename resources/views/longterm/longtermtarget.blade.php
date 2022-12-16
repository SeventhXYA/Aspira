@extends('layouts.tailwind')
@section('container')
    <div class="container mx-auto mb-16">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h2>LONG TERM TARGET</h2>
                                <h3 class="text-danger">Tidak wajib!</h3>
                            </strong>
                            <p class="mt-2 text-sm">
                                Isikan tujuan yang ingin kamu capai untuk jangka panjang <strong>(jika ada)</strong>.
                                Setelah tujuan kamu di validasi oleh admin, tujuan kamu
                                tidak bisa diganti kecuali kamu melakukan konsultasi
                                terlebih dahulu dan menjelaskan apa masalahmu
                            </p>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="flex justify-end">
                            <a href="{{ route('longterm.create') }}" class="btn bg-base-100 border-0 text-white text-xs"><i
                                    class="fa-solid fa-plus"></i>Tambah
                                Target</a>
                        </div>
                        <div class="justify-content-center -mx-2">
                            <span align="justify">
                                <h3><strong>Riwayat Target Bulan Ini</strong></h3>
                            </span>
                            @foreach ($longterm as $ltt)
                                <div class="col-lg-4 inline-block -mx-1">
                                    <div class="text-center border bg-white my-3">
                                        <div class="card-header bg-base-100 text-white rounded-t-lg">
                                            {{ $ltt->sesi }} | {{ $ltt->created_at->format('d-M-Y') }}
                                        </div>
                                        <div class="card-body">
                                            <h5><strong style="text-transform: uppercase">{{ $ltt->target }}</strong>
                                            </h5>
                                            <p class="card-text my-2 text-sm truncate ...">{{ $ltt->desc }}
                                            </p>
                                            <div class="mt-2">
                                                <label for="viewModal-{{ $ltt->id }}"
                                                    class="btn btn-primary text-white"><i
                                                        class="fa-solid fa-eye"></i></label>
                                                <a href="longterm/edit/{{ $ltt->id }}" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square" style="color: #ffffff"></i></a>
                                                <a class="btn bg-red-600 border-0 text-white" id="delete"
                                                    data-id="{{ $ltt->id }}"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted bg-slate-200 rounded-b-lg">
                                            @if ($ltt->status == 1)
                                                <strong><span
                                                        style="color: green; text-transform: uppercase;">Disetujui</span></strong>
                                            @elseif ($ltt->status == 2)
                                                <strong><span
                                                        style="color: red; text-transform: uppercase;">Ditolak</span></strong>
                                            @else
                                                <strong><span
                                                        style="color: blue; text-transform: uppercase;">Tertunda</span></strong>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="checkbox" id="viewModal-{{ $ltt->id }}" class="modal-toggle" />
                                    <label for="viewModal-{{ $ltt->id }}" class="modal cursor-pointer">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModal-{{ $ltt->id }}"
                                                class="text-white btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title" id="viewModalLabel">
                                                <strong>{{ $ltt->created_at->format('d-M-Y') }}</strong>
                                            </h5>
                                            <div class="mb-3">
                                                <label for="plan" class="form-label">
                                                    <strong>Sesi: </strong>
                                                </label>
                                                @if ($ltt->sesi == 'SD')
                                                    <span>
                                                        <h4>Self-Development</h4>
                                                    </span>
                                                @elseif ($ltt->sesi == 'BP')
                                                    <span>Bisnis/Profit</span>
                                                @elseif ($ltt->sesi == 'KL')
                                                    <span>Kelembagaan</span>
                                                @else
                                                    <span>Inovasi/Creativity</span>
                                                @endif
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Judul Target:</strong></h4>
                                                </label>
                                                <textarea class="textarea textarea-bordered h-24 bg-slate-100" placeholder="Judul" readonly>{{ $ltt->target }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Deskripsikan secara lengkap dan jelas:</strong></h4>
                                                </label>
                                                <textarea class="textarea textarea-bordered h-64 bg-slate-100" placeholder="Deskripsi" readonly>{{ $ltt->desc }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Manfaat:</strong></h4>
                                                </label>
                                                <textarea class="textarea textarea-bordered h-64 bg-slate-100" placeholder="Manfaat" readonly>{{ $ltt->benefit }}</textarea>
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
    <script>
        $('#delete').click(function() {
            var lttid = $(this).attr('data-id');
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
                    window.location = "longterm/delete/" + lttid + ""
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
