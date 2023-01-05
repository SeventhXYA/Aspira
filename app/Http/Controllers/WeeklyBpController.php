<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weeklybp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyBpController extends Controller
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
        $weeklybp = new Weeklybp($validated_data);
        $weeklybp->user()->associate(Auth::user());
        $weeklybp->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $weeklybp = Weeklybp::find($id);
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

        $weeklybp->update($validated_data);
        return redirect()->back();
    }

    public function evaluate()
    {
        $users = User::where('id', Auth::user()->id)->where('level_id', 3)->get();

        return view('weekly.evweeklybp', [
            'title' => 'Evaluasi Weekly BP'
        ], compact('users'));
    }
}
