<?php

namespace App\Http\Controllers;

use App\Models\Weeklykl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyKlController extends Controller
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
        $weeklykl = new Weeklykl($validated_data);
        $weeklykl->user()->associate(Auth::user());
        $weeklykl->save();

        return redirect()->back();
    }
}
