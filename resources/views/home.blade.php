@extends('layouts.tailwind')
@section('container')
    <div class=''>
        <div class="container mx-auto mb-16 lg:py-5">
            <div class="row justify-center">
                <div class="col col-12">
                    @if (auth()->user()->level_id == 1)
                        <div class="card lg:w-full mt-4 mx-2 shadow-xl text-black">
                            <div class="card-body mx-2">
                                <h2><strong>DASHBOARD</strong></h2>
                            </div>
                        </div>
                        <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                            <div class="card-body mx-2">
                                <div class="row">
                                    <div class="col-lg-3 col-6 text-white">
                                        <div class="small-box bg-primary">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $users->count() }}</h3>
                                                <p class=" text-white">Jumlah Pengguna</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                            <a href={{ route('datapengguna') }} class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_pending }}</h3>
                                                <p class=" text-white">LTT Tertunda</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-hourglass-start"></i>
                                            </div>
                                            <a href={{ route('admin.pending') }} class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-success text-white">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_approve }}</h3>
                                                <p class=" text-white">LTT Disetujui</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                            <a href={{ route('admin.approved') }} class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-error text-white">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_decline }}</h3>
                                                <p class=" text-white">LTT Ditolak</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </div>
                                            <a href={{ route('admin.declined') }} class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 col-lg-4 col-md-5">
                                <div class="card sm:w-full mt-4 mx-2 lg:min-h-full bg-white shadow-xl text-black">
                                    <div class="card-body mx-2">
                                        <div class="card instant-print">
                                            <div class="title mb-7">
                                                <h2><strong>CETAK LAPORAN HARI INI</strong></h2>
                                            </div>
                                            <div class="row my-3.5">
                                                <a href={{ route('dailysdnowpdf') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-error text-white elevation-1"><i
                                                            class="fa-solid fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Self-Development</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailysd }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailybpnowpdf') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-success text-white elevation-1"><i
                                                            class="fa-solid fa-money-bill-trend-up"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Bisnis/Profit</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailybp }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailyklnowpdf') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-warning elevation-1"><i
                                                            class="fa-solid fa-building-columns text-white"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Kelembagaan</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailykl }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailyicnowpdf') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-primary text-white elevation-1"><i
                                                            class="fa-solid fa-pen-ruler"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Inovasi/Creativity</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailyic }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 col-md-7">
                                <div class="card sm:w-full my-4 mx-2 lg:min-h-full bg-white shadow-xl text-black">
                                    <div class="card-body mx-2">
                                        <div class="flex justify-end mb-4">
                                            <a href={{ route('recordintervalpdf') }}
                                                class="btn bg-red-600 hover:bg-red-700 border-0 text-white">
                                                <p> <i class="fa-solid fa-file-pdf"></i>
                                                    Cetak PDF </p>
                                            </a>
                                        </div>
                                        <div class="overflow-x-auto overflow-y-auto h-96" data-theme="cmyk">
                                            {{-- <table class="table table-zebra w-full text-sm">
                                                <!-- head -->
                                                <thead>
                                                    <tr>
                                                        <td></td>
                                                        @foreach ($users as $user)
                                                            <th>{{ $user->name }}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bisnis & Profit</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalBp }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Self-Development</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalSd }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Kelembagaan</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalKl }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Inovasi/Creativity</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalIc }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Morning Briefing & 5R</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalMb }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Planning</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalTp }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>Evaluasi</td>
                                                        @foreach ($users as $user)
                                                            <td>{{ $user->totalEv }}</td>
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table> --}}
                                            <table class="table table-zebra table-compact w-full text-sm">
                                                <!-- head -->
                                                <thead>
                                                    <tr>
                                                        <td></td>
                                                        <th>Bisnis & Profit</th>
                                                        <th>Self-Development</th>
                                                        <th>Kelembagaan</th>
                                                        <th>Inovasi/Creativity</th>
                                                        <th>Morning Briefing & 5R</th>
                                                        <th>Technical Planning</th>
                                                        <th>Evaluasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td class="font-bold">{{ $user->firstname }}</td>
                                                            <td>
                                                                @if ($user->totalBp == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalBp }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalSd == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalSd }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalKl == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalKl }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalIc == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalIc }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalMb == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalMb }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalTp == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalTp }}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($user->totalEv == '00:00:00')
                                                                    <span style="color: red">00:00:00</span>
                                                                @else
                                                                    {{ $user->totalEv }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (auth()->user()->level_id == 2)
                        <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                            <div class="card-body mx-2">
                                <h2><strong>DASHBOARD</strong></h2>
                            </div>
                        </div>
                        <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                            <div class="card-body mx-2">
                                <div class="row">
                                    <div class="col-lg-3 col-6 text-white">
                                        <div class="small-box bg-primary">
                                            <div class="inner">
                                                <h3 class=" text-white">LTT</h3>
                                                <p class=" text-white">Long Term Baru</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-book"></i>
                                            </div>
                                            <a href={{ route('longterm') }} class="small-box-footer text-white">Tambah
                                                <i class="fa-solid fa-plus text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_pendinguser }}</h3>
                                                <p class=" text-white">LTT Tertunda</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-hourglass-start"></i>
                                            </div>
                                            <a href={{ route('longterm.pending') }}
                                                class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-success text-white">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_approveuser }}</h3>
                                                <p class=" text-white">LTT Disetujui</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                            <a href={{ route('longterm.approved') }}
                                                class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-error text-white">
                                            <div class="inner">
                                                <h3 class=" text-white">{{ $ltt_declineuser }}</h3>
                                                <p class=" text-white">LTT Ditolak</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </div>
                                            <a href={{ route('longterm.declined') }}
                                                class="small-box-footer text-white">Detail
                                                <i class="fas fa-arrow-circle-right text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                            <div class="card-body mx-2">
                                <h2 class="mb-2">Selamat Datang, <b style="text-transform: uppercase">
                                        {{ auth()->user()->name }}! </b>
                                </h2>
                                <p>Kamu memiliki {{ $ltt_approve }} rencana yang belum terpenuhi. Silahkan cek
                                    <b>disini</b> untuk
                                    lebih lanjut
                                </p>
                            </div>
                        </div> --}}
                        <div class="row mb-4">
                            <div class="col-12 col-lg-4 col-md-5">
                                <div class="card sm:w-full mt-4 mx-2 lg:min-h-full bg-white shadow-xl text-black">
                                    <div class="card-body mx-2">
                                        <div class="card instant-print">
                                            <div class="title">
                                                <h2><strong>DAILY REPORT</strong></h2>
                                            </div>
                                            <div class="row my-3.5 ">
                                                <a href={{ route('dailysd.create') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-error text-white elevation-1"><i
                                                            class="fa-solid fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Self-Development</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailysduser }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailybp.create') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-success text-white elevation-1"><i
                                                            class="fa-solid fa-money-bill-trend-up"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Bisnis/Profit</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailybpuser }} </p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailykl.create') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-warning elevation-1"><i
                                                            class="fa-solid fa-building-columns text-white"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Kelembagaan</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailykluser }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href={{ route('dailyic.create') }} class="info-box hover:bg-slate-100">
                                                    <span class="info-box-icon bg-primary text-white elevation-1"><i
                                                            class="fa-solid fa-pen-ruler"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <h4><strong>Inovasi/Creativity</strong></h4>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p>Hari ini: {{ $dailyicuser }}</p>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 col-md-7">
                                <div class="card sm:w-full my-4 mx-2 lg:min-h-full bg-white shadow-xl text-black">
                                    <div class="card-body mx-2 lg:mt-5">
                                        <div class="title">
                                            <h2><strong>RENCANA MINGGU INI</strong></h2>
                                        </div>
                                        <div class="overflow-x-auto overflow-y-auto h-72 lg:h-96">
                                            <table class="table border table-compact w-full text-sm">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="6"
                                                            class="text-xl font-bold text-center bg-error text-white">SD
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklysd as $wsd)
                                                            <td class="bg-red-100">{{ $wsd->plan1 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklysd as $wsd)
                                                            <td class="bg-red-100">{{ $wsd->plan2 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklysd as $wsd)
                                                            <td class="bg-red-100">{{ $wsd->plan3 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklysd as $wsd)
                                                            <td class="bg-red-100">{{ $wsd->plan4 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklysd as $wsd)
                                                            <td class="bg-red-100">{{ $wsd->plan5 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="6"
                                                            class="text-xl font-bold text-center bg-success text-white">
                                                            BP</td>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklybp as $wbp)
                                                            <td class="bg-green-100">{{ $wbp->plan1 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklybp as $wbp)
                                                            <td class="bg-green-100">{{ $wbp->plan2 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklybp as $wbp)
                                                            <td class="bg-green-100">{{ $wbp->plan3 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklybp as $wbp)
                                                            <td class="bg-green-100">{{ $wbp->plan4 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklybp as $wbp)
                                                            <td class="bg-green-100">{{ $wbp->plan5 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="6"
                                                            class="text-xl font-bold bg-warning text-white text-center">
                                                            KL</td>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklykl as $wkl)
                                                            <td class="bg-yellow-100">{{ $wkl->plan1 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklykl as $wkl)
                                                            <td class="bg-yellow-100">{{ $wkl->plan2 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklykl as $wkl)
                                                            <td class="bg-yellow-100">{{ $wkl->plan3 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklykl as $wkl)
                                                            <td class="bg-yellow-100">{{ $wkl->plan4 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklykl as $wkl)
                                                            <td class="bg-yellow-100">{{ $wkl->plan5 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="6"
                                                            class="text-xl font-bold text-center bg-primary text-white">IC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklyic as $wic)
                                                            <td class="bg-blue-100">{{ $wic->plan1 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklyic as $wic)
                                                            <td class="bg-blue-100">{{ $wic->plan2 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklyic as $wic)
                                                            <td class="bg-blue-100">{{ $wic->plan3 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklyic as $wic)
                                                            <td class="bg-blue-100">{{ $wic->plan4 }}</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        @foreach ($weeklyic as $wic)
                                                            <td class="bg-blue-100">{{ $wic->plan5 }}</td>
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
