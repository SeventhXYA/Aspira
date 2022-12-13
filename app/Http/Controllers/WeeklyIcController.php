<?php

namespace App\Http\Controllers;

use App\Models\Weeklyic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyIcController extends Controller
{
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan1' => 'required',
            'progress_plan1' => 'required',
            'plan2' => 'required',
            'progress_plan2' => 'required',
            'plan3' => 'required',
            'progress_plan3' => 'required',
            'plan4' => 'required',
            'progress_plan4' => 'required',
            'plan5' => 'required',
            'progress_plan5' => 'required',
        ]);
        $weeklyic = new Weeklyic($validated_data);
        $weeklyic->user()->associate(Auth::user());
        $weeklyic->save();

        return redirect()->back();
    }
}
