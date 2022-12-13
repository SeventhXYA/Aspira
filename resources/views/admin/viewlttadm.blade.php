@extends('layouts.tailwind')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <span align="justify">
                        <h2><strong>TARGET YANG TELAH DISETUJUI</strong></h2>
                    </span>
                </div>
                <div class="card">
                    <div class="mb-4">
                        <div class="d-flex justify-content-end">
                            <a href="/downloadpdf" class="btn btn-primary">
                                <i class="fa-solid fa-print"></i>
                                Cetak
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="min-width: 160px;">Tanggal</th>
                                    <th scope="col" style="min-width: 180px;">Nama</th>
                                    <th scope="col" style="min-width: 130px;">Divisi</th>
                                    <th scope="col" style="min-width: 400px;">Target</th>
                                    <th scope="col">Status</th>
                                    {{-- <th scope="col">Progres</th> --}}
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($longterm as $ltt)
                                    <tr>
                                        <td>{{ $ltt->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $ltt->user->name }}</td>
                                        <td>{{ $ltt->user->divisi->divisi }}</td>
                                        <td>{{ $ltt->target }}</td>
                                        <td>{{ $ltt->status }}</td>
                                        {{-- <td>{{ $ltt->progres }}</td /> --}}
                                        <td data-bs-toggle="modal" data-bs-target="#viewModal-{{ $ltt->id }}"> <i
                                                class="fa-solid fa-eye"></i>
                                        </td>

                                        <div class="modal fade" id="viewModal-{{ $ltt->id }}" tabindex="-1"
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
                                                            <label for="sesi" class="form-label">
                                                                Nama:
                                                            </label>
                                                            {{ $ltt->user->name }}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="sesi" class="form-label">
                                                                Divisi:
                                                            </label>
                                                            {{ $ltt->user->divisi->divisi }}
                                                        </div>
                                                        <form action="/longterm/approval" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <input type="hidden" class="form-control" id="id"
                                                                    name="id" value="{{ $ltt->id }}" readonly>
                                                                <label for="sesi" class="form-label">
                                                                    Sesi:
                                                                </label>
                                                                <input type="text" class="form-control" id="target"
                                                                    placeholder="target yang ingin dicapai" name="target"
                                                                    value="{{ $ltt->sesi }}" disabled readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="target" class="form-label">
                                                                    Judul Target:
                                                                </label>
                                                                <input type="text" class="form-control" id="target"
                                                                    placeholder="target yang ingin dicapai" name="target"
                                                                    value="{{ $ltt->target }}" disabled readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="desc" class="form-label">
                                                                    Deskripsikan secara lengkap dan jelas:
                                                                </label>
                                                                <textarea class="form-control" id="desc" rows="4" name="desc" disabled readonly>{{ $ltt->desc }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="benefit" class="form-label">
                                                                    Manfaat:
                                                                </label>
                                                                <textarea class="form-control" id="benefit" rows="4" name="benefit" disabled readonly>{{ $ltt->benefit }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="status" class="form-label">
                                                                    Status:
                                                                </label>
                                                                <select class="form-select" id="status" name="status"
                                                                    required>
                                                                    <option selected>{{ $ltt->status }}</option>
                                                                    <option value="1">Setujui</option>
                                                                    <option value="2">Tolak</option>
                                                                </select>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
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
    </div>
@endsection
