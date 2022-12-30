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
use Illuminate\Html\FormFacade as Form;


class PomodoroController extends Controller
{
    public function pomodoro()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $intervalsd = IntervalSd::where('id', Auth::user()->id)->get();
        $intervalbp = IntervalBp::where('id', Auth::user()->id)->get();
        $intervalkl = IntervalKl::where('id', Auth::user()->id)->get();
        $intervalic = IntervalIc::where('id', Auth::user()->id)->get();
        $intervalother = IntervalOthers::where('id', Auth::user()->id)->get();

        return view('pomodoro', [
            "title" => "Pomodoro",
        ], compact('users', 'intervalsd', 'intervalbp', 'intervalkl', 'intervalic', 'intervalother'));
    }

    public function report()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $intervalsd = IntervalSd::where('id', Auth::user()->id)->get();
        $intervalbp = IntervalBp::where('id', Auth::user()->id)->get();
        $intervalkl = IntervalKl::where('id', Auth::user()->id)->get();
        $intervalic = IntervalIc::where('id', Auth::user()->id)->get();
        $intervalother = IntervalOthers::where('id', Auth::user()->id)->get();

        return view('pomodororeport', [
            "title" => "Pomodoro",
        ], compact('users', 'intervalsd', 'intervalbp', 'intervalkl', 'intervalic', 'intervalother'));
    }

    public function recordinterval()
    {
        $users = User::where('level_id', 2)->get();

        $data = [
            'title' => 'Record Daily Interval',
            'users' => $users
        ];
        return view('admin.recordinterval', $data);
    }
}
