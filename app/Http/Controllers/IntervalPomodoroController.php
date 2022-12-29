<?php

namespace App\Http\Controllers;

use App\Models\IntervalBp;
use App\Models\IntervalIc;
use App\Models\IntervalKl;
use App\Models\IntervalOthers;
use App\Models\IntervalSd;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class IntervalPomodoroController extends Controller
{
    public function store(Request $request)
    {
        // $user = User::all();
        // $intervalbp = IntervalBp::all();
        $validated_data = $request->validate([
            'timestart_mb' => 'required',
            'timestop_mb' => 'required',
            'timestart_tp' => 'required',
            'timestop_tp' => 'required',
            'timestart_cb' => 'required',
            'timestop_cb' => 'required',
            'timestart_ev' => 'required',
            'timestop_ev' => 'required',

            'timestart_bp1' => 'required',
            'timestop_bp1' => 'required',
            'timestart_bp2' => 'required',
            'timestop_bp2' => 'required',
            'timestart_bp3' => 'required',
            'timestop_bp3' => 'required',
            'timestart_bp4' => 'required',
            'timestop_bp4' => 'required',
            'timestart_bp5' => 'required',
            'timestop_bp5' => 'required',
            'timestart_bp6' => 'required',
            'timestop_bp6' => 'required',
            'timestart_bp7' => 'required',
            'timestop_bp7' => 'required',
            'timestart_bp8' => 'required',
            'timestop_bp8' => 'required',

            'timestart_ic' => 'required',
            'timestop_ic' => 'required',

            'timestart_kl' => 'required',
            'timestop_kl' => 'required',

            'timestart_sd1' => 'required',
            'timestop_sd1' => 'required',
            'timestart_sd2' => 'required',
            'timestop_sd2' => 'required',

        ]);

        $intervalother = new IntervalOthers($validated_data);
        $intervalother->user()->associate(Auth::user());
        $intervalother->save();

        $intervalbp = new IntervalBp($validated_data);
        $intervalbp->user()->associate(Auth::user());
        $intervalbp->save();

        $intervalic = new IntervalIc($validated_data);
        $intervalic->user()->associate(Auth::user());
        $intervalic->save();

        $intervalkl = new IntervalKl($validated_data);
        $intervalkl->user()->associate(Auth::user());
        $intervalkl->save();

        $intervalsd = new IntervalSd($validated_data);
        $intervalsd->user()->associate(Auth::user());
        $intervalsd->save();

        return redirect('pomodoro');
    }

    public function charts()
    {
        $users = User::where('id', Auth::user()->id)->get();

        return view('charts', [
            "title" => "Charts",
        ], compact('users'));
    }
}
