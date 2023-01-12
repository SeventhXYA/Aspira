@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <p class="font-bold">POMODORO INTERVAL</p>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Pomodoro Interval</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert text-sm bg-cyan-700 text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    Interval Record
                                </span>
                            </div>
                        </div>
                        <div class="flex gap-3 justify-between">
                            @if (!is_null($user->interval()->first()) && $user->interval()->first()->created_at >= \Carbon\Carbon::today())
                                <a href="{{ route('interval.edit') }}"
                                    class="btn bg-warning hover:bg-yellow-500 border-0 mx-1 text-white text-xs">
                                    <i class="fa-solid fa-pen-to-square fa-lg mr-2"></i>
                                    Edit
                                </a>
                            @endif
                            <a href="{{ route('interval.create') }}"
                                class="btn bg-primary hover:bg-primary-focus border-0 mx-1 text-white text-xs"><i
                                    class="fa-solid fa-plus fa-lg mr-2"></i>Record Baru</a>
                        </div>
                        <div class="mt-4 uppercase">
                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Bisnis & Profit</p>
                                    <span><b>{{ $user->totalBp }}</b>/04:00:00</span>
                                </div>
                                <div class="progress h-2 my-2 progress-sm">
                                    <div class="progress-bar bg-green-600" style="width: {{ $user->percentageBp }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Self-Development</p>
                                    <span><b>{{ $user->totalSd }}</b>/01:00:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-red-600" style="width: {{ $user->percentageSd }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Kelembagaan</p>
                                    <span><b>{{ $user->totalKl }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-yellow-400" style="width: {{ $user->percentageKl }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Inovasi / Creativity</p>
                                    <span><b>{{ $user->totalIc }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-blue-600" style="width: {{ $user->percentageIc }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Morning Briefing & 5R</p>
                                    <span><b>{{ $user->totalMb }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-violet-600" style="width: {{ $user->percentageMb }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Technical Planning</p>
                                    <span><b>{{ $user->totalTp }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-teal-600" style="width: {{ $user->percentageTp }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Coffee Break</p>
                                    <span class="float-right"><b>{{ $user->totalCb }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-orange-600" style="width: {{ $user->percentageCb }}%">
                                    </div>
                                </div>
                            </div>

                            <div class="progress-group text-sm mb-5">
                                <div class="flex gap-3 items-center justify-between">
                                    <p class="font-bold">Evaluasi</p>
                                    <span class="float-right"><b>{{ $user->totalEv }}</b>/00:30:00</span>
                                </div>
                                <div class="progress my-2 progress-sm">
                                    <div class="progress-bar bg-red-900" style="width: {{ $user->percentageEv }}%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
