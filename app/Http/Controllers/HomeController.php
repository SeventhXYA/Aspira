<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailysd;
use App\Models\Dailybp;
use App\Models\Dailykl;
use App\Models\Dailyic;
use App\Models\IntervalBp;
use App\Models\IntervalIc;
use App\Models\IntervalKl;
use App\Models\IntervalOthers;
use App\Models\IntervalSd;
use App\Models\Longtermtarget;
use App\Models\User;
use App\Models\Weeklybp;
use App\Models\Weeklyic;
use App\Models\Weeklykl;
use App\Models\Weeklysd;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dailysd = Dailysd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailybp = Dailybp::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailykl = Dailykl::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailyic = Dailyic::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $ltt_pending = Longtermtarget::where('status', 0)->count();
        $ltt_approve = Longtermtarget::where('status', 1)->count();
        $ltt_decline = Longtermtarget::where('status', 2)->count();

        $dailysduser = Dailysd::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailybpuser = Dailybp::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailykluser = Dailykl::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();
        $dailyicuser = Dailyic::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->count();

        $ltt_pendinguser = Longtermtarget::where('user_id', Auth::user()->id)->where('status', 0)->count();
        $ltt_approveuser = Longtermtarget::where('user_id', Auth::user()->id)->where('status', 1)->count();
        $ltt_declineuser = Longtermtarget::where('user_id', Auth::user()->id)->where('status', 2)->count();

        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();
        $pomodoro = User::where('level_id', 2)->get();
        $user = User::where('level_id', 2)->get();

        // Carbon::setWeekStartsAt(Carbon::SUNDAY);
        // Carbon::setWeekEndsAt(Carbon::SATURDAY);
        // $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $weeklybp = Weeklybp::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $weeklykl = Weeklykl::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $weeklyic = Weeklyic::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        return view('home', [
            "title" => "Beranda"
        ], compact('users', 'user', 'ltt_pending', 'ltt_approve', 'ltt_decline', 'dailysd', 'dailybp', 'dailykl', 'dailyic', 'dailysduser', 'dailybpuser', 'dailykluser', 'dailyicuser',  'ltt_pendinguser', 'ltt_approveuser', 'ltt_declineuser', 'pomodoro'));
    }
}
