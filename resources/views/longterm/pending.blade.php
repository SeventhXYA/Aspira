@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>LTT PENDING</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('longterm') }}">Long Term Target</a></li>
                                    <li>Pending</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="justify-center -mx-2">
                            <div class="row lg:grid gap-4 lg:grid-cols-3">
                                @foreach ($longterm as $ltt)
                                    <div class="col-12 inline-block" data-theme="cmyk">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-cyan-800 text-white rounded-t-lg">
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
                                                    <strong style="text-transform: uppercase">{{ $ltt->target }}</strong>
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
                                                    <a href="longterm/edit/{{ $ltt->id }}" class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"
                                                            style="color: #ffffff"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-footer text-muted bg-slate-100">
                                                @if ($ltt->status == 1)
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Disetujui</span></strong>
                                                @elseif ($ltt->status == 2)
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Ditolak</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-warning rounded-lg text-xs text-black p-1 m-1 uppercase">Tertunda</span></strong>
                                                @endif
                                            </div>
                                        </div>
                                        <input type="checkbox" id="viewModal-{{ $ltt->id }}" class="modal-toggle" />
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
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
