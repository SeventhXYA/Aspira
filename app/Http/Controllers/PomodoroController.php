<?php

namespace App\Http\Controllers;

// use Excel;
// use App\Models\Pomodoro;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PomodoroRecord;
use App\Models\IntervalBp;
use App\Models\IntervalIc;
use App\Models\IntervalKl;
use App\Models\IntervalOthers;
use App\Models\IntervalSd;
use App\Models\User;
use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function pomodoro()
    {
        return view('pomodoro', [
            "title" => "Pomodoro",
            "sesi" => "POMODORO TIMER",
        ]);
    }

    public function pomodoroExport()
    {
        return Excel::download(new PomodoroRecord, 'pomodororecord.xlsx');
    }

    public function recordinterval()
    {
        $users = User::where('level_id', 2)->get();
        // $IntervalSd = IntervalSd::all();
        // $IntervalBp = IntervalBp::all();
        // $IntervalKl = IntervalKl::all();
        // $IntervalIc = IntervalIc::all();
        // $IntervalOthers = IntervalOthers::all();
        $data = [
            'title' => 'Record Daily Interval',
            'sesi' => 'RECORD DAILY INTERVAL',
            'users' => $users
        ];
        return view('admin.recordinterval', $data);
    }
}
