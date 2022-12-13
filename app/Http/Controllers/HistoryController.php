<?php

namespace App\Http\Controllers;

use App\Models\Dailybp;
use App\Models\Dailyic;
use App\Models\Dailykl;
use App\Models\Dailysd;
use App\Models\Weeklybp;
use App\Models\Weeklyic;
use App\Models\Weeklykl;
use App\Models\Weeklysd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function daily()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $dailyic = Dailyic::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        return view('history.dailyhistory', [
            "title" => "Riwayat Daily Report",
            "sesi" => "RIWAYAT DAILY REPORT"
        ], compact('dailysd', 'dailybp', 'dailykl', 'dailyic'));
    }

    public function weekly()
    {
        $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklybp = Weeklybp::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklykl = Weeklykl::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklyic = Weeklyic::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        return view('history.weeklyhistory', [
            "title" => "Riwayat Weekly Plan",
            "sesi" => "RIWAYAT WEEKLY PLAN"
        ], compact('weeklysd', 'weeklybp', 'weeklykl', 'weeklyic'));
    }
}
