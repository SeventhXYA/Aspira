@extends('layouts.form')
@section('form')
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('dailyklpdf') }}" class="btn btn-primary">
                            <i class="fa-solid fa-print"></i>
                            Cetak
                        </a>
                    </div>
                </div>
                <div class="mb-3 -mx-5 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="min-width: 180px;">Tanggal</th>
                                <th scope="col" style="min-width: 180px;">Nama</th>
                                <th scope="col" style="min-width: 150px;">Divisi</th>
                                <th scope="col" style="min-width: 450px;">Plan</th>
                                <th scope="col">Progres</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dailykl as $kl)
                                <tr>
                                    <td>{{ $kl->created_at->format('d-M-Y') }}</td>
                                    <td>{{ $kl->user->name }}</td>
                                    <td>{{ $kl->user->divisi->divisi }}</td>
                                    <td>{{ $kl->plan }}</td>
                                    <td>
                                        @if ($sd->progress == 100)
                                            <span style="color: green">Terselesaikan</span>
                                        @elseif ($sd->progress == 50)
                                            <span style="color: blue">Tidak Terselesaikan</span>
                                        @else
                                            <span style="color: red">Tidak Tekerjakan</span>
                                        @endif
                                    </td />
                                    <td data-bs-toggle="modal" data-bs-target="#viewModal-{{ $kl->id }}"> <i
                                            class="fa-solid fa-eye"></i>
                                    </td>
                                    <div class="modal fade" id="viewModal-{{ $kl->id }}" tabindex="-1"
                                        aria-labelledby="viewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">

                                                        {{ $kl->created_at->format('d-M-Y') }}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">
                                                            Nama:
                                                        </label>
                                                        {{ $kl->user->name }}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="divisi" class="form-label">
                                                            Divisi:
                                                        </label>
                                                        {{ $kl->user->divisi->divisi }}
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="plan" class="form-label">
                                                            Plan:
                                                        </label>
                                                        <input type="text" class="form-control" id="plan"
                                                            name="plan" value="{{ $kl->plan }}" disabled readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="actual" class="form-label">
                                                            Actual:
                                                        </label>
                                                        <textarea class="form-control" id="actual" rows="4" name="actual" disabled readonly>{{ $kl->actual }}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="progres" class="form-label">
                                                            Progres:
                                                        </label>
                                                        <input type="text" class="form-control" id="progres"
                                                            name="progres"
                                                            value="@if ($sd->progress == 100) Terselesaikan
                                                            @elseif ($sd->progress == 50)Tidak Terselesaikan
                                                            @else Tidak Tekerjakan @endif"
                                                            disabled readonly>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
