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
        $weeklysd = Weeklysd::where('id', Auth::user()->id)->get();
        $weeklybp = Weeklybp::where('id', Auth::user()->id)->get();
        $weeklykl = Weeklykl::where('id', Auth::user()->id)->get();
        $weeklyic = Weeklyic::where('id', Auth::user()->id)->get();
        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();
        return view('weekly.weekly', [
            "title" => "Weekly Plan"
        ], compact('users', 'weeklysd', 'weeklybp', 'weeklykl', 'weeklyic'));
        // ], compact('users', 'weeklysd', 'weeklybp', 'weeklykl', 'weeklyic'));
    }
    // public function updatesd(Request $request, $id)
    // {
    //     $weeklysd = Weeklysd::find($id);
    //     $weeklysd->update($request->all());
    //     return redirect('weeklysd');
    // }
    // public function updatebp(Request $request, $id)
    // {
    //     $weeklybp = WeeklyBp::find($id);
    //     $weeklybp->update($request->all());
    //     return redirect('weeklybp');
    // }
    // public function updatekl(Request $request, $id)
    // {
    //     $weeklykl = WeeklyKl::find($id);
    //     $weeklykl->update($request->all());
    //     return redirect('weeklykl');
    // }
    // public function updateic(Request $request, $id)
    // {
    //     $weeklyic = WeeklyIc::find($id);
    //     $weeklyic->update($request->all());
    //     return redirect('weeklyic');
    // }
}
