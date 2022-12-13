@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col col-12">
                    <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="justify-center -mx-2">
                                <div class="row lg:grid gap-4 lg:grid-cols-3">
                                    @foreach ($longterm as $ltt)
                                        <div class="col-12 inline-block">
                                            <div class="text-center border bg-white my-3">
                                                <div class="card-header bg-base-100 text-white rounded-t-lg">
                                                    @if ($ltt->sesi == 'ltt')
                                                        <span>SD</span>
                                                    @elseif ($ltt->sesi == 'BP')
                                                        <span>BP</span>
                                                    @elseif ($ltt->sesi == 'KL')
                                                        <span>KL</span>
                                                    @else
                                                        <span>IC</span>
                                                    @endif | {{ $ltt->created_at->format('d-M-Y') }}
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="mb-2">
                                                        <strong
                                                            style="text-transform: uppercase">{{ $ltt->target }}</strong>
                                                    </h5>
                                                    <p class="card-text text-start text-xs">Nama: {{ $ltt->user->name }}</p>
                                                    <p class="card-text text-start text-xs">Divisi:
                                                        {{ $ltt->user->divisi->divisi }}
                                                    </p>
                                                    <p class="card-text text-start text-xs">No Hp: {{ $ltt->user->nohp }}
                                                    </p>
                                                    <p class="card-text text-start text-xs">Email: {{ $ltt->user->email }}
                                                    </p>
                                                    <div class="mt-2">
                                                        <label for="viewModal-{{ $ltt->id }}"
                                                            class="btn btn-primary text-white">Detail</label>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-muted bg-slate-100">
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
                                                    <label for="viewModalAction-{{ $ltt->id }}"><i
                                                            class="fa-solid fa-pen-to-square cursor-pointer"></i></label>
                                                </div>
                                            </div>
                                            <input type="checkbox" id="viewModal-{{ $ltt->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $ltt->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $ltt->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <h5 class="modal-title" id="viewModalLabel">
                                                        <strong>{{ $ltt->created_at->format('d-M-Y') }}</strong>
                                                    </h5>
                                                    <div class="form-control">
                                                        <label for="name" class="form-label">
                                                            <strong>Nama:</strong> {{ $ltt->user->name }}
                                                        </label>
                                                    </div>
                                                    <div class="form-control">
                                                        <label for="name" class="form-label">
                                                            <strong>Divisi:</strong> {{ $ltt->user->divisi->divisi }}
                                                        </label>
                                                    </div>
                                                    <div class="form-control">
                                                        <label for="sesi" class="form-label">
                                                            <strong>Sesi: </strong>
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
                                                        </label>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <h4><strong>Target:</strong></h4>
                                                        </label>
                                                        <textarea class="textarea textarea-bordered h-24 bg-slate-100" readonly>{{ $ltt->target }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <h4><strong>Deskripsi:</strong></h4>
                                                        </label>
                                                        <textarea class="textarea textarea-bordered h-24 bg-slate-100" readonly>{{ $ltt->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <h4><strong>Manfaat:</strong></h4>
                                                        </label>
                                                        <textarea class="textarea textarea-bordered h-64 bg-slate-100" readonly>{{ $ltt->benefit }}</textarea>
                                                    </div>
                                                </label>
                                            </label>
                                            <input type="checkbox" id="viewModalAction-{{ $ltt->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModalAction-{{ $ltt->id }}" class="modal cursor-pointer"
                                                data-theme="cmyk">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModalAction-{{ $ltt->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
                                                    <form action="{{ route('longterm.approval') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" class="form-control" id="id"
                                                            name="id" value="{{ $ltt->id }}" readonly>
                                                        <h5 class="modal-title" id="viewModalLabel">
                                                            <strong>{{ $ltt->created_at->format('d-M-Y') }}</strong>
                                                        </h5>
                                                        <div class="form-control w-full max-w-xs">
                                                            <label class="label">
                                                                <span class="label">Status:</span>
                                                            </label>
                                                            <select class="select select-bordered" name="status" required>
                                                                <option value="0" disabled selected hidden>
                                                                    @if ($ltt->status === 0)
                                                                        <span>Tertunda</span>
                                                                    @endif
                                                                </option>
                                                                <option value="1">Setujui</option>
                                                                <option value="2">Tolak</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-action">
                                                            <a href="#"
                                                                class="btn bg-red-600 hover:bg-red-700 text-white border-0">Tutup</a>
                                                            <button type="submit"
                                                                class="btn bg-base-100 hover:bg-primary text-white border-0"
                                                                data-theme="night">Simpan
                                                            </button>
                                                        </div>
                                                    </form>
                                                </label>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade mt-5 my-5" id="viewModalAction-{{ $ltt->id }}" tabindex="-1"
                    aria-labelledby="viewModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-success ">
                                <h5 class="modal-title text-white" id="viewModalLabel">
                                    {{ $ltt->target }}
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('longterm.approval') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" id="id" name="id"
                                            value="{{ $ltt->id }}" readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">
                                            Status:
                                        </label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="0" selected hidden>
                                                @if ($ltt->status === 0)
                                                    <span>Tertunda</span>
                                                @endif
                                            </option>
                                            <option value="1">Setujui</option>
                                            <option value="2">Tolak</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn bg-danger text-white"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn bg-primary text-white">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
