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
                        <div class="flex justify-end">
                            <a href="{{ route('pomodoro.create') }}"
                                class="btn bg-primary hover:bg-primary-focus border-0 mx-1 text-white text-xs"><i
                                    class="fa-solid fa-plus fa-lg mr-2"></i>Interval Record</a>
                        </div>

                        @if (Session::has('success'))
                            <div class="alert bg-green-500 shadow-md my-4 text-white" data-theme="light">
                                <div>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>{{ Session::get('success') }}</span>
                                </div>
                            </div>
                        @elseif (Session::has('edit'))
                            <div class="alert bg-warning shadow-md my-4 text-white" data-theme="light">
                                <div>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>{{ Session::get('edit') }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-4 mt-4 uppercase">
                            @foreach ($users as $user)
                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Bisnis & Profit</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalBp }}</b>/04:00:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-green-600"
                                            style="width: {{ auth()->user()->percentageBp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Self-Development</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalSd }}</b>/01:00:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-red-600"
                                            style="width: {{ auth()->user()->percentageSd }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Kelembagaan</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalKl }}</b>/00:30:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-yellow-400"
                                            style="width: {{ auth()->user()->percentageKl }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Inovasi/Creativity</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalIc }}</b>/00:30:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-blue-600"
                                            style="width: {{ auth()->user()->percentageIc }}%">
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Morning Briefing & 5R</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalMb }}</b>/00:30:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-violet-600"
                                            style="width: {{ auth()->user()->percentageMb }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Technical Planning</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalTp }}</b>/00:30:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-teal-600"
                                            style="width: {{ auth()->user()->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group text-sm">
                                    <div class="flex justify-between">
                                        <p class="font-bold">Evaluasi</p>
                                        <a href=""
                                            class="btn btn-xs bg-warning hover:bg-yellow-500 border-0 mx-1 text-white font-semibold text-xs">Edit</a><br>
                                    </div>
                                    <span class="float-right"><b>{{ auth()->user()->totalEv }}</b>/00:30:00</span>
                                    <div class="progress my-2 progress-sm">
                                        <div class="progress-bar bg-orange-600"
                                            style="width: {{ auth()->user()->percentageEv }}%">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
