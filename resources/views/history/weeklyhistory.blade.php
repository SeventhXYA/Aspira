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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($weeklysd as $wsd)
                                <tbody>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wsd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wsd->plan1 }}</td>
                                        <td>{{ $wsd->progress_plan1 }}</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wsd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wsd->plan2 }}</td>
                                        <td>{{ $wsd->progress_plan2 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wsd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wsd->plan3 }}</td>
                                        <td>{{ $wsd->progress_plan3 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wsd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wsd->plan4 }}</td>
                                        <td>{{ $wsd->progress_plan4 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wsd->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wsd->plan5 }}</td>
                                        <td>{{ $wsd->progress_plan5 }}</td>

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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($weeklybp as $wbp)
                                <tbody>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wbp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wbp->plan1 }}</td>
                                        <td>{{ $wbp->progress_plan1 }}</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wbp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wbp->plan2 }}</td>
                                        <td>{{ $wbp->progress_plan2 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wbp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wbp->plan3 }}</td>
                                        <td>{{ $wbp->progress_plan3 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wbp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wbp->plan4 }}</td>
                                        <td>{{ $wbp->progress_plan4 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wbp->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wbp->plan5 }}</td>
                                        <td>{{ $wbp->progress_plan5 }}</td>

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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($weeklykl as $wkl)
                                <tbody>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wkl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wkl->plan1 }}</td>
                                        <td>{{ $wkl->progress_plan1 }}</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wkl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wkl->plan2 }}</td>
                                        <td>{{ $wkl->progress_plan2 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wkl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wkl->plan3 }}</td>
                                        <td>{{ $wkl->progress_plan3 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wkl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wkl->plan4 }}</td>
                                        <td>{{ $wkl->progress_plan4 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wkl->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wkl->plan5 }}</td>
                                        <td>{{ $wkl->progress_plan5 }}</td>

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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Progres</th>
                                    <th scope="col">Lihat</th>
                                </tr>
                            </thead>
                            @foreach ($weeklyic as $wic)
                                <tbody>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wic->plan1 }}</td>
                                        <td>{{ $wic->progress_plan1 }}</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wic->plan2 }}</td>
                                        <td>{{ $wic->progress_plan2 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wic->plan3 }}</td>
                                        <td>{{ $wic->progress_plan3 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wic->plan4 }}</td>
                                        <td>{{ $wic->progress_plan4 }}</td>

                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 100px;">{{ $wic->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $wic->plan5 }}</td>
                                        <td>{{ $wic->progress_plan5 }}</td>

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
