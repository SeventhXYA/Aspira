<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Weeklykl;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyKlController extends Controller
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
        $weeklykl = new Weeklykl($validated_data);
        $weeklykl->user()->associate(Auth::user());
        $weeklykl->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $weeklykl = Weeklykl::find($id);
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

        $weeklykl->update($validated_data);
        return redirect()->back();
    }

    public function evaluate()
    {
        $users = User::where('id', Auth::user()->id)->where('level_id', 2)->get();

        return view('weekly.evweeklykl', [
            'title' => 'Evaluasi Weekly KL'
        ], compact('users'));
    }
}
