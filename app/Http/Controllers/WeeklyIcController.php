<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weeklyic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyIcController extends Controller
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
        $weeklyic = new Weeklyic($validated_data);
        $weeklyic->user()->associate(Auth::user());
        $weeklyic->save();

        return redirect()->back();
    }


    public function evaluate()
    {
        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();

        return view('weekly.evweeklyic', [
            'title' => 'Evaluasi Weekly IC'
        ], compact('users'));
    }
}
