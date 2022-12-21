@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16 lg:py-5">
        <div class="row justify-center">
            <div class="col col-12">
                @if (auth()->user()->level_id == 1)
                    <div class="card lg:w-full mt-4 mx-2 shadow-xl text-black">
                        <div class="card-body mx-2">
                            <h3><strong>DASHBOARD</strong></h3>
                        </div>
                    </div>
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="row">
                                <div class="col-lg-3 col-6 text-white">
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3 class=" text-white">{{ $user->count() }}</h3>
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
                                            <h3><strong>CETAK LAPORAN HARI INI</strong></h3>
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
                                            class="btn bg-error hover:bg-red-600 border-0 text-white">
                                            <p> <i class="fa-solid fa-file-pdf"></i>
                                                Cetak PDF </p>
                                        </a>
                                    </div>
                                    <div class="overflow-x-auto overflow-y-auto h-96" data-theme="cmyk">
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
                                                @foreach ($pomodoro as $pmd)
                                                    <tr>
                                                        <td class="font-bold">{{ $pmd->firstname }}</td>
                                                        <td>
                                                            @if ($pmd->totalBp == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalBp }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalSd == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalSd }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalKl == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalKl }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalIc == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalIc }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalMb == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalMb }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalTp == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalTp }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pmd->totalEv == '00:00:00')
                                                                <span class="text-error">00:00:00</span>
                                                            @else
                                                                {{ $pmd->totalEv }}
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
                            <h3><strong>DASHBOARD</strong></h3>
                        </div>
                    </div>
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="row">
                                <div class="col-lg-3 col-6 text-white">
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3 class=" text-white">LTT</h3>
                                            <p class=" text-white">LTT Baru</p>
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
                                        <a href={{ route('longterm.pending') }} class="small-box-footer text-white">Detail
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
                                <h3 class="mb-2">Selamat Datang, <b style="text-transform: uppercase">
                                        {{ auth()->user()->name }}! </b>
                                </h3>
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
                                            <h3><strong>DAILY REPORT</strong></h3>
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
                                        <h3><strong>RENCANA MINGGU INI</strong></h3>
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
                                                    @foreach ($users as $user)
                                                        <td class="bg-red-100"> {{ $user->plan1sd }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-red-100"> {{ $user->plan2sd }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-red-100"> {{ $user->plan3sd }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-red-100"> {{ $user->plan4sd }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-red-100"> {{ $user->plan5sd }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td rowspan="6"
                                                        class="text-xl font-bold text-center bg-success text-white">
                                                        BP</td>
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-green-100">{{ $user->plan1bp }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-green-100">{{ $user->plan2bp }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-green-100">{{ $user->plan3bp }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-green-100">{{ $user->plan4bp }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-green-100">{{ $user->plan5bp }} </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td rowspan="6"
                                                        class="text-xl font-bold bg-warning text-white text-center">
                                                        KL</td>
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-yellow-100">{{ $user->plan1kl }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-yellow-100">{{ $user->plan2kl }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-yellow-100">{{ $user->plan3kl }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-yellow-100">{{ $user->plan4kl }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-yellow-100">{{ $user->plan5kl }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td rowspan="6"
                                                        class="text-xl font-bold text-center bg-primary text-white">IC
                                                    </td>
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-blue-100">{{ $user->plan1ic }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-blue-100">{{ $user->plan2ic }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-blue-100">{{ $user->plan3ic }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-blue-100">{{ $user->plan4ic }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($users as $user)
                                                        <td class="bg-blue-100">{{ $user->plan5ic }}</td>
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
@endsection
