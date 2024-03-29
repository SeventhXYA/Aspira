@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl lg:py-5">
        <div class="row justify-center">
            <div class="col col-12">
                @if (auth()->user()->level_id == 1 || auth()->user()->level_id == 2)
                    <div class="card lg:w-full mt-4 mx-2 shadow-xl text-black">
                        <div class="card-body mx-2">
                            <h3 class="font-bold">DASHBOARD</h3>
                        </div>
                    </div>
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black" data-theme="light">
                        <div class="card-body mx-2">
                            <div class="row">
                                <div class="col-lg-3 col-6 text-white">
                                    <div class="small-box bg-info">
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
                                            <p class=" text-white">Target Tertunda</p>
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
                                            <p class=" text-white">Target Disetujui</p>
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
                                            <p class=" text-white">Target Ditolak</p>
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
                            <div class="card sm:w-full mt-4 mx-2 lg:min-h-full bg-white shadow-xl text-black"
                                data-theme="light">
                                <div class="card-body mx-2">
                                    <div class="card instant-print">
                                        <div class="title mb-7">
                                            <h3 class="font-bold">CETAK LAPORAN</h3>
                                        </div>
                                        <div class="row">
                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-error text-white elevation-1"><i
                                                            class="fa-solid fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Self-Development</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailysd }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content">
                                                    <div class="justify-center flex p-0 m-0" data-theme="cmyk">
                                                        <a href={{ route('dailysdnowpdf') }} target="_blank"
                                                            class="btn btn-xs bg-info text-white border-0 mr-1">Harian</a>
                                                        <a href="{{ route('dailysd.viewadmin') }}"
                                                            class="btn btn-xs bg-error text-white border-0 mr-1">Riwayat
                                                            Laporan</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-success text-white elevation-1"><i
                                                            class="fa-solid fa-chart-simple"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Bisnis/Profit</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailybp }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content">
                                                    <div class="justify-center flex p-0 m-0" data-theme="cmyk">
                                                        <a href={{ route('dailybpnowpdf') }}
                                                            class="btn btn-xs bg-info text-white border-0 mr-1">Harian</a>
                                                        <a href="{{ route('dailybp.viewadmin') }}"
                                                            class="btn btn-xs bg-error text-white border-0 mr-1">Riwayat
                                                            Laporan</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-warning text-white elevation-1"><i
                                                            class="fa-solid fa-building-columns"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Kelembagaan</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailykl }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content">
                                                    <div class="justify-center flex p-0 m-0" data-theme="cmyk">
                                                        <a href={{ route('dailyklnowpdf') }}
                                                            class="btn btn-xs bg-info text-white border-0 mr-1">Harian</a>
                                                        <a href="{{ route('dailykl.viewadmin') }}"
                                                            class="btn btn-xs bg-error text-white border-0 mr-1">Riwayat
                                                            Laporan</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-info text-white elevation-1"><i
                                                            class="fa-solid fa-pen-ruler"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Inovasi/Creativity</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailyic }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content">
                                                    <div class="justify-center flex p-0 m-0" data-theme="cmyk">
                                                        <a href={{ route('dailyicnowpdf') }}
                                                            class="btn btn-xs bg-info text-white border-0 mr-1">Harian</a>
                                                        <a href="{{ route('dailyic.viewadmin') }}"
                                                            class="btn btn-xs bg-error text-white border-0 mr-1">Riwayat
                                                            Laporan</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-violet-500 text-white elevation-1"><i
                                                            class="fas fa-clipboard-check"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Evaluasi Harian</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $evaluate }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <div class="justify-center flex p-0 m-0" data-theme="cmyk">

                                                        <a href={{ route('evaluatenowpdf') }}
                                                            class="btn btn-xs bg-info text-white border-0 mr-1">Harian</a>
                                                        <a href="{{ route('evaluate.viewadmin') }}"
                                                            class="btn btn-xs bg-error text-white border-0 mr-1">Riwayat
                                                            Laporan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 col-md-7">
                            <div class="card sm:w-full my-4 mx-2 lg:min-h-full bg-white shadow-xl text-black"
                                data-theme="light">
                                <div class="card-body mx-2">
                                    <div class="title">
                                        <h3 class="font-bold">INTERVAL RECORD PENGGUNA HARI INI</h3>
                                    </div>
                                    <div class="flex justify-end mb-4">
                                        <a href={{ route('recordintervalpdf') }} target="_blank"
                                            class="btn bg-error hover:bg-red-600 border-0 text-white">
                                            <p> <i class="fa-solid fa-file-pdf"></i>
                                                Cetak PDF </p>
                                        </a>
                                    </div>
                                    <div class="overflow-x-auto overflow-y-auto h-96" data-theme="cmyk">
                                        <figure class="highcharts-figure">
                                            <div id="chart" class="w-full"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->level_id == 3)
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black" data-theme="light">
                        <div class="card-body mx-2">
                            <h3 class="font-bold">DASHBOARD</h3>
                        </div>
                    </div>
                    <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                        <div class="card-body mx-2">
                            <div class="row">
                                <div class="col-lg-3 col-6 text-white">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3 class=" text-transparent md:text-white">Monthly</h3>
                                            <p class=" text-white">Monthly Target</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-solid fa-book"></i>
                                        </div>
                                        <a href={{ route('monthly') }} class="small-box-footer text-white">Tambah
                                            <i class="fa-solid fa-plus text-white"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3 class=" text-white">{{ $ltt_pendinguser }}</h3>
                                            <p class=" text-white">Target Tertunda</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-solid fa-hourglass-start"></i>
                                        </div>
                                        <a href={{ route('monthly.pending') }} class="small-box-footer text-white">Detail
                                            <i class="fas fa-arrow-circle-right text-white"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success text-white">
                                        <div class="inner">
                                            <h3 class=" text-white">{{ $ltt_approveuser }}</h3>
                                            <p class=" text-white">Target Disetujui</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </div>
                                        <a href={{ route('monthly.approved') }} class="small-box-footer text-white">Detail
                                            <i class="fas fa-arrow-circle-right text-white"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-error text-white">
                                        <div class="inner">
                                            <h3 class=" text-white">{{ $ltt_declineuser }}</h3>
                                            <p class=" text-white">Target Ditolak</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </div>
                                        <a href={{ route('monthly.declined') }} class="small-box-footer text-white">Detail
                                            <i class="fas fa-arrow-circle-right text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12 col-lg-4 col-md-5">
                            <div class="card sm:w-full mt-4 mx-2 lg:min-h-full bg-white shadow-xl text-black"
                                data-theme="light">
                                <div class="card-body mx-2">
                                    <div class="card instant-print">
                                        <div class="title mb-4">
                                            <h3 class="font-bold">ACTIVITY REPORT</h3>
                                        </div>
                                        <div class="row">
                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-error text-white elevation-1"><i
                                                            class="fa-solid fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Self-Development</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailysduser }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <a href={{ route('dailysd') }}
                                                        class="btn btn-xs bg-primary hover:bg-primary-focus text-white border-0 mr-1">Laporan
                                                        Harian</a>
                                                    <a href={{ route('dailysd.history') }}
                                                        class="btn btn-xs bg-error hover:bg-red-700 text-white border-0 mr-1">Riwayat</a>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-success text-white elevation-1"><i
                                                            class="fa-solid fa-chart-simple"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Bisnis/Profit</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailybpuser }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <a href={{ route('dailybp') }}
                                                        class="btn btn-xs bg-primary hover:bg-primary-focus text-white border-0 mr-1">Laporan
                                                        Harian</a>
                                                    <a href={{ route('dailybp.history') }}
                                                        class="btn btn-xs bg-error hover:bg-red-700 text-white border-0 mr-1">Riwayat</a>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-warning text-white elevation-1"><i
                                                            class="fa-solid fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Kelembagaan</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailykluser }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <a href={{ route('dailykl') }}
                                                        class="btn btn-xs bg-primary hover:bg-primary-focus text-white border-0 mr-1">Laporan
                                                        Harian</a>
                                                    <a href={{ route('dailykl.history') }}
                                                        class="btn btn-xs bg-error hover:bg-red-700 text-white border-0 mr-1">Riwayat</a>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-info text-white elevation-1"><i
                                                            class="fa-solid fa-pen-ruler"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Inovasi/Creativity</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $dailyicuser }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <a href={{ route('dailyic') }}
                                                        class="btn btn-xs bg-primary hover:bg-primary-focus text-white border-0 mr-1">Laporan
                                                        Harian</a>
                                                    <a href={{ route('dailyic.history') }}
                                                        class="btn btn-xs bg-error hover:bg-red-700 text-white border-0 mr-1">Riwayat</a>
                                                </div>
                                            </div>

                                            <div class="collapse border rounded-box w-full">
                                                <input type="checkbox" class="peer" />
                                                <div class="collapse-title text-xl font-medium info-box">
                                                    <span class="info-box-icon bg-violet-500 text-white elevation-1"><i
                                                            class="fas fa-clipboard-check"></i></span>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">
                                                            <p class="font-bold text-sm">Evaluasi Harian</p>
                                                        </span>
                                                        <span class="info-box-number">
                                                            <p class="text-sm">Hari ini: {{ $evaluateuser }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="collapse-content" data-theme="cmyk">
                                                    <a href={{ route('evaluate') }}
                                                        class="btn btn-xs bg-primary hover:bg-primary-focus text-white border-0 mr-1">Evaluasi
                                                        Harian</a>
                                                    <a href={{ route('evaluate.history') }}
                                                        class="btn btn-xs bg-error hover:bg-red-700 text-white border-0 mr-1">Riwayat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 col-md-7">
                            <div class="card sm:w-full my-4 mx-2 lg:min-h-full bg-white shadow-xl text-black"
                                data-theme="light">
                                <div class="card-body mx-2 ">
                                    <div class="title">
                                        <h3 class="font-bold mb-4">RENCANA MINGGU INI</h3>
                                    </div>
                                    <div class="overflow-x-auto overflow-y-auto h-72 lg:h-96">
                                        <table class="table border table-compact w-full text-sm">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="6"
                                                        class="text-xl font-bold text-center bg-error w-10 text-white">SD
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
                                                        class="text-xl font-bold text-center bg-success w-10 text-white">
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
                                                        class="text-xl font-bold bg-warning w-10 text-white text-center">
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
                                                        class="text-xl font-bold text-center bg-info w-10 text-white">IC
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        const users = [
            @foreach ($pomodoro as $pmd)
                '{{ $pmd->firstname }} {{ $pmd->lastname }}',
            @endforeach
        ]
        const bp = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalBp }},
            @endforeach
        ]
        const sd = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalSd }},
            @endforeach
        ]
        const kl = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalKl }},
            @endforeach
        ]
        const ic = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalIc }},
            @endforeach
        ]
        const mb = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalMb }},
            @endforeach
        ]
        const tp = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalTp }},
            @endforeach
        ]
        const cb = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalCb }},
            @endforeach
        ]
        const ev = [
            @foreach ($pomodoro as $pmd)
                {{ $pmd->totalEv }},
            @endforeach
        ]

        Highcharts.chart('chart', {
            chart: {
                type: 'bar',
                height: 5000
            },
            title: {
                text: '',
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: users,
                title: {
                    text: null
                },
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Waktu',
                    align: 'low'
                },
                tickInterval: 1800,
                labels: {
                    overflow: 'justify',
                    formatter: function() {
                        return Highcharts.dateFormat('%H:%M:%S', this.value * 1000)
                    },
                },
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            tooltip: {
                formatter: function() {
                    return `${this.x}<br/>${this.series.name}: <b>${Highcharts.dateFormat('%H:%M:%S', this.y * 1000)}</b><br/>`
                },
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true,
                        formatter: function() {
                            return Highcharts.dateFormat('%H:%M:%S', this.y * 1000)
                        }
                    },
                }
            },
            series: [{
                name: 'Bisnis & Profit',
                data: bp
            }, {
                name: 'Self-Development',
                data: sd
            }, {
                name: 'Kelembagaan',
                data: kl
            }, {
                name: 'Inovasi/Creativity',
                data: ic
            }, {
                name: 'Morning Briefing & 5R',
                data: mb
            }, {
                name: 'Technical Planning',
                data: tp
            }, {
                name: 'Coffee Break',
                data: cb
            }, {
                name: 'Evaluasi',
                data: ev
            }],
        });
    </script>
@endsection
