@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16 pb-5">
        <div class="row justify-center">
            <div class="col col-12">
                {{-- @if (auth()->user()->level_id == 2) --}}
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>DETAIL DATA PENGGUNA</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('datapengguna') }}">Data Pengguna</a></li>
                                    <li>Detail Data Pengguna</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                    <div class="card-body mx-2 mb-10">
                        <div class="flex justify-end">
                            <a href="{{ route('profile.edit') }}"
                                class="btn bg-primary hover:bg-primary-focus text-xs border-0 text-white"><i
                                    class="fa-solid fa-gear fa-xl"></i></a>
                        </div>
                        <div class="alert text-sm bg-cyan-800 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    PROFIL
                                </span>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-3">
                            <div class="form-control w-full max-w-xs">
                                <img class="mask mask-circle w-48 lg:w-80 md:w-60"
                                    src="{{ is_null($user->pict) ? 'img/user.jpg' : asset($user->pict) }}"
                                    alt="Profile Picture" />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Nama Depan: </strong></span>
                                </label>
                                <input type="text" placeholder="Type here"
                                    class="input input-bordered bg-slate-100 w-full max-w-xs" value="{{ $user->firstname }}"
                                    readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Nama Belakang: </strong></span>
                                </label>
                                <input type="text" placeholder="Type here"
                                    class="input input-bordered bg-slate-100 w-full max-w-xs" value="{{ $user->lastname }}"
                                    readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Jenis Kelamin: </strong></span>
                                </label>
                                <input type="text" placeholder="Type here"
                                    class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->gender->gender }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Tempat Lahir: </strong></span>
                                </label>
                                <input type="text" placeholder="Type here"
                                    class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->tempatlahir }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Tanggal Lahir: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->tanggallahir }}-{{ $user->bulan->bulan }}-{{ $user->tahunlahir }}"
                                    readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>No Hp: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->nohp }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Email: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->email }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Alamat: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->address }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-md"><strong>Divisi: </strong></span>
                                </label>
                                <input type="text" class="input input-bordered bg-slate-100 w-full max-w-xs"
                                    value="{{ $user->divisi->divisi }}" readonly />
                            </div>
                        </div>
                        <div class="mt-5 alert text-sm bg-cyan-800 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    INTERVAL TERPENUHI
                                </span>
                            </div>
                        </div>
                        <div id="chartInterval"></div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    <script>
        $('#pict').change(function() {
            const [file] = document.getElementById('pict').files
            if (file) {
                document.getElementById('preview').style.backgroundImage = 'url(' + URL.createObjectURL(file) + ')'
            }
        })
    </script>
    <script>
        Highcharts.chart('chartInterval', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Interval Pomodoro'
            },
            // subtitle: {
            //     text: 'Source: WorldClimate.com'
            // },
            xAxis: {
                categories: [
                    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Waktu Interval'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Self-Development',
                data: [49.9, 71.5, 106.4, 129.2, 144.0]

            }, {
                name: 'Bisnis & Profit',
                data: [83.6, 78.8, 98.5, 93.4, 106.0]

            }, {
                name: 'Kelembagaan',
                data: [48.9, 38.8, 39.3, 41.4, 47.0]

            }, {
                name: 'Inovasi/Creativity',
                data: [42.4, 33.2, 34.5, 39.7, 52.6]

            }, {
                name: 'Morning Briefing',
                data: [42.4, 33.2, 34.5, 39.7, 52.6]

            }, {
                name: 'Technical Planning',
                data: [42.4, 33.2, 34.5, 39.7, 52.6]

            }, {
                name: 'Evaluasi',
                data: [42.4, 33.2, 34.5, 39.7, 52.6]

            }]
        });
    </script>
@endsection
@section('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
