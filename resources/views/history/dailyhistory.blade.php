@extends('layouts.form')
@section('form')
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <span align="justify mb-2">
                        <strong>
                            <h2>SELF-DEVELOPMENT</h2>
                        </strong>
                    </span>
                    <div class="table-responsive overflow-y-auto h-80">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($dailysd as $sd)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td style="min-width: 100px;">{{ $sd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $sd->plan }}</td>
                                        <td>
                                            @if ($sd->progress == 100)
                                                <span style="color: green">Terselesaikan</span>
                                            @elseif ($sd->progress == 50)
                                                <span style="color: blue">Tidak Terselesaikan</span>
                                            @else
                                                <span style="color: red">Tidak Tekerjakan</span>
                                            @endif
                                        </td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <span align="justify mb-2">
                        <strong>
                            <h2>BISNIS & PROFIT</h2>
                        </strong>
                    </span>
                    <div class="table-responsive overflow-y-auto h-80">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($dailybp as $bp)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td style="min-width: 100px;">{{ $bp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $bp->plan }}</td>
                                        <td>
                                            @if ($bp->progress == 100)
                                                <span style="color: green">Terselesaikan</span>
                                            @elseif ($bp->progress == 50)
                                                <span style="color: blue">Tidak Terselesaikan</span>
                                            @else
                                                <span style="color: red">Tidak Tekerjakan</span>
                                            @endif
                                        </td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <span align="justify mb-2">
                        <strong>
                            <h2>KELEMBAGAAN</h2>
                        </strong>
                    </span>
                    <div class="table-responsive overflow-y-auto h-80">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($dailykl as $kl)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td style="min-width: 100px;">{{ $kl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $kl->plan }}</td>
                                        <td>
                                            @if ($kl->progress == 100)
                                                <span style="color: green">Terselesaikan</span>
                                            @elseif ($kl->progress == 50)
                                                <span style="color: blue">Tidak Terselesaikan</span>
                                            @else
                                                <span style="color: red">Tidak Tekerjakan</span>
                                            @endif
                                        </td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12">
                <div class="card">
                    <span align="justify mb-2">
                        <strong>
                            <h2>INOVASI/CREATIVITY</h2>
                        </strong>
                    </span>
                    <div class="table-responsive overflow-y-auto h-80">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($dailyic as $ic)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td style="min-width: 100px;">{{ $ic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $ic->plan }}</td>
                                        <td>
                                            @if ($ic->progress == 100)
                                                <span style="color: green">Terselesaikan</span>
                                            @elseif ($ic->progress == 50)
                                                <span style="color: blue">Tidak Terselesaikan</span>
                                            @else
                                                <span style="color: red">Tidak Tekerjakan</span>
                                            @endif
                                        </td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
