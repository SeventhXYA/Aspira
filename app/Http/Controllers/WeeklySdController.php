<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weeklysd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklySdController extends Controller
{
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan1' => 'required',
            'evaluate_plan1' => 'required',
            'progress_plan1' => 'required',
            'plan2' => 'required',
            'evaluate_plan2' => 'required',
            'progress_plan2' => 'required',
            'plan3' => 'required',
            'evaluate_plan3' => 'required',
            'progress_plan3' => 'required',
            'plan4' => 'required',
            'evaluate_plan4' => 'required',
            'progress_plan4' => 'required',
            'plan5' => 'required',
            'evaluate_plan5' => 'required',
            'progress_plan5' => 'required',
        ]);
        $weeklysd = new Weeklysd($validated_data);
        $weeklysd->user()->associate(Auth::user());
        $weeklysd->save();

        return redirect()->back();
    }

    public function evaluate()
    {
        // Carbon::setWeekStartsAt(Carbon::SATURDAY);
        // Carbon::setWeekEndsAt(Carbon::FRIDAY);
        // $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();
        return view('weekly.evweeklysd', [
            'title' => 'Evaluasi Weekly SD'
        ], compact('users'));
    }
    // public function delete($id)
    // {
    //     $weeklysd = Weeklysd::find($id);
    //     $weeklysd->delete();

    //     return redirect()->back();
    // }
}
