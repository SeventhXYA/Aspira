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
use Illuminate\Support\Facades\Auth;

class PomodoroController extends Controller
{
    public function pomodoro()
    {
        $users = User::where('id', Auth::user()->id)->get();

        return view('pomodoro', [
            "title" => "Pomodoro",
            "sesi" => "POMODORO TIMER",
        ], compact('users'));
    }

    public function pomodoroExport()
    {
        return Excel::download(new PomodoroRecord, 'pomodororecord.xlsx');
    }

    public function recordinterval()
    {
        $users = User::where('level_id', 2)->get();

        $data = [
            'title' => 'Record Daily Interval',
            'sesi' => 'RECORD DAILY INTERVAL',
            'users' => $users
        ];
        return view('admin.recordinterval', $data);
    }
}
