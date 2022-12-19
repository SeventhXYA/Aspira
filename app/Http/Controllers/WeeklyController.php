<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Weekly;
use App\Models\User;
use App\Models\Weeklybp;
use App\Models\Weeklyic;
use App\Models\Weeklykl;
use App\Models\Weeklysd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WeeklyController extends Controller
{
    public function index()
    {
        // $weeklysd = Weeklysd::where('id', Auth::user()->id)->get();
        // $weeklybp = Weeklybp::where('id', Auth::user()->id)->get();
        // $weeklykl = Weeklykl::where('id', Auth::user()->id)->get();
        // $weeklyic = Weeklyic::where('id', Auth::user()->id)->get();
        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();
        return view('weekly.weekly', [
            "title" => "Weekly Plan",
            "sesi" => "WEEKLY PLAN"
        ], compact('users'));
        // ], compact('users', 'weeklysd', 'weeklybp', 'weeklykl', 'weeklyic'));
    }
}
