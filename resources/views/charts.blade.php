@extends('layouts.form')
@section('form')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Interval Goal</strong>
                            </p>
                            @foreach ($users as $user)
                                <div class="progress-group">
                                    Bisnis & Profit
                                    <span class="float-right"><b>{{ $user->totalBp }}</b>/04:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green-600" style="width: {{ $user->percentageBp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Self-Development
                                    <span class="float-right"><b>{{ $user->totalSd }}</b>/01:00:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-red-600" style="width: {{ $user->percentageSd }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Kelembagaan
                                    <span class="float-right"><b>{{ $user->totalKl }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-yellow-400" style="width: {{ $user->percentageKl }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Inovasi/Creativity
                                    <span class="float-right"><b>{{ $user->totalIc }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue-600" style="width: {{ $user->percentageIc }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Morning Briefing & 5R
                                    <span class="float-right"><b>{{ $user->totalMb }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-violet-600" style="width: {{ $user->percentageMb }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Technical Planning
                                    <span class="float-right"><b>{{ $user->totalTp }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-teal-600" style="width: {{ $user->percentageTp }}%">
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-group">
                                    Evaluasi
                                    <span class="float-right"><b>{{ $user->totalEv }}</b>/00:30:00</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-orange-600" style="width: {{ $user->percentageEv }}%">
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
