@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col col-12">
                    <div class="card lg:w-full my-4 mx-2 min-h-screen bg-white shadow-xl text-black">
                        <div class="card-body mx-2 ">
                            <div class="row">
                                <div class="card border-2 w-full">
                                    <div class="card-body">
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
                                                <div class="grid w-3 h-3 rounded bg-orange-600">
                                                </div>
                                                <h4 class="ml-4 -mt-5">Evaluasi</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row lg:grid gap-4 grid-cols-3">
                                @foreach ($users as $user)
                                    <div class="col-12 inline-block">
                                        <h3 class="font-bold">{{ $user->name }}</h3>
                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalBp }}</b>/04:00:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-green-600"
                                                    style="width: {{ $user->percentageBp }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalSd }}</b>/01:00:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-red-600"
                                                    style="width: {{ $user->percentageSd }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalKl }}</b>/00:30:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-yellow-400"
                                                    style="width: {{ $user->percentageKl }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalIc }}</b>/00:30:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-blue-600"
                                                    style="width: {{ $user->percentageIc }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalMb }}</b>/00:30:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-violet-600"
                                                    style="width: {{ $user->percentageMb }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalTp }}</b>/00:30:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-teal-600"
                                                    style="width: {{ $user->percentageTp }}%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="progress-group">
                                            <span class="float-right text-sm"><b>{{ $user->totalEv }}</b>/00:30:00</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-orange-600"
                                                    style="width: {{ $user->percentageEv }}%">
                                                </div>
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
    </div>
@endsection
