@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col col-12">
                    <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="flex justify-end">
                                <a href="{{ route('dailybp.create') }}" class="btn bg-base-100 text-xs border-0 text-white"><i
                                        class="fa-solid fa-plus"></i>Tambah
                                    Laporan</a>
                            </div>
                            <div class="justify-content-center -mx-2">
                                <span class="text-xs" align="justify">
                                    <h3><strong>Laporan yang telah dibuat hari ini</strong></h3>
                                </span>
                                @foreach ($dailybp as $bp)
                                    <div class="text-center border bg-white my-3">
                                        <div class="card-header bg-base-100 text-white rounded-t-lg">
                                            {{ $bp->created_at->format('d-M-Y') }}
                                        </div>
                                        <div class="card-body">
                                            <h5><strong style="text-transform: uppercase">{{ $bp->plan }}</strong></h5>
                                            <div class="mt-2">
                                                <label for="viewModal-{{ $bp->id }}"
                                                    class="btn btn-primary text-white"><i
                                                        class="fa-solid fa-eye"></i></label>
                                                <a href="#" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square" style="color: #ffffff"></i></a>
                                                <a href="#" class="btn bg-red-600 border-0 text-white" id="delete"
                                                    data-id="{{ $bp->id }}"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted bg-slate-100 rounded-b-lg">
                                            @if ($bp->progress == 100)
                                                <strong><span class="text-sm"
                                                        style="color: green; text-transform: uppercase;">Terselesaikan</span></strong>
                                            @elseif ($bp->progress == 50)
                                                <strong><span class="text-sm"
                                                        style="color: blue; text-transform: uppercase;">Tidak
                                                        Terselesaikan</span></strong>
                                            @else
                                                <strong><span class="text-sm"
                                                        style="color: red; text-transform: uppercase;">Tidak
                                                        Tekerjakan</span></strong>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="checkbox" id="viewModal-{{ $bp->id }}" class="modal-toggle" />
                                    <label for="viewModal-{{ $bp->id }}" class="modal cursor-pointer">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModal-{{ $bp->id }}"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title" id="viewModalLabel">
                                                <strong>{{ $bp->created_at->format('d-M-Y') }}</strong>
                                            </h5>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Plan:</strong></h4>
                                                </label>
                                                <textarea class="textarea textarea-bordered h-24 bg-slate-100" readonly>{{ $bp->plan }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Actual:</strong></h4>
                                                </label>
                                                <textarea class="textarea textarea-bordered h-64 bg-slate-100" readonly>{{ $bp->actual }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <h4><strong>Status:</strong></h4>
                                                </label>
                                                <input type="text"
                                                    class="input input-bordered w-full max-w-xs bg-slate-100"
                                                    value="@if ($bp->progress == 100) Terselesaikan
                                                @elseif ($bp->progress == 50)Tidak Terselesaikan
                                                @else()Tidak Tekerjakan @endif"
                                                    readonly />
                                            </div>
                                        </label>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#delete').click(function() {
            var bpid = $(this).attr('data-id');
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
                    window.location = "dailybp/delete/" + bpid + ""
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
