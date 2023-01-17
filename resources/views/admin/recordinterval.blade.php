@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RECORD INTERVAL</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Record Interval users</liusr </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                    <div class="card-body mx-2 ">
                        <div class="alert bg-white">
                            <div>
                                <div class="lg:flex">
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-green-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Bisnis & Profit</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-red-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Self-Development</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-yellow-400">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Kelembagaan</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-blue-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Inovasi/Creativity</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-violet-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Morning Briefing & 5R</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-teal-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Technical Planning</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-teal-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Coffe Break</h4>
                                    </div>
                                    <div class="mr-4 my-2">
                                        <div class="grid w-3 h-3 rounded bg-orange-600">
                                        </div>
                                        <h4 class="ml-4 -mt-5">Evaluasi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figure class="highcharts-figure">
                            <div id="chart" class="w-full"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        const users = [
            @foreach ($users as $usr)
                '{{ $usr->firstname }} {{ $usr->lastname }}',
            @endforeach
        ]
        const bp = [
            @foreach ($users as $usr)
                {{ $usr->totalBp }},
            @endforeach
        ]
        const sd = [
            @foreach ($users as $usr)
                {{ $usr->totalSd }},
            @endforeach
        ]
        const kl = [
            @foreach ($users as $usr)
                {{ $usr->totalKl }},
            @endforeach
        ]
        const ic = [
            @foreach ($users as $usr)
                {{ $usr->totalIc }},
            @endforeach
        ]
        const mb = [
            @foreach ($users as $usr)
                {{ $usr->totalMb }},
            @endforeach
        ]
        const tp = [
            @foreach ($users as $usr)
                {{ $usr->totalTp }},
            @endforeach
        ]
        const cb = [
            @foreach ($users as $usr)
                {{ $usr->totalCb }},
            @endforeach
        ]
        const ev = [
            @foreach ($users as $usr)
                {{ $usr->totalEv }},
            @endforeach
        ]

        Highcharts.chart('chart', {
            chart: {
                type: 'bar',
                height: 5000,
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
