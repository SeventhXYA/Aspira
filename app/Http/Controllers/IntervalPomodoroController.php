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
            'timestart_mb' => 'sometimes',
            'timestop_mb' => 'sometimes',
            'timestart_tp' => 'sometimes',
            'timestop_tp' => 'sometimes',
            'timestart_cb' => 'sometimes',
            'timestop_cb' => 'sometimes',
            'timestart_ev' => 'sometimes',
            'timestop_ev' => 'sometimes',

            'timestart_bp1' => 'sometimes',
            'timestop_bp1' => 'sometimes',
            'timestart_bp2' => 'sometimes',
            'timestop_bp2' => 'sometimes',
            'timestart_bp3' => 'sometimes',
            'timestop_bp3' => 'sometimes',
            'timestart_bp4' => 'sometimes',
            'timestop_bp4' => 'sometimes',
            'timestart_bp5' => 'sometimes',
            'timestop_bp5' => 'sometimes',
            'timestart_bp6' => 'sometimes',
            'timestop_bp6' => 'sometimes',
            'timestart_bp7' => 'sometimes',
            'timestop_bp7' => 'sometimes',
            'timestart_bp8' => 'sometimes',
            'timestop_bp8' => 'sometimes',

            'timestart_ic' => 'sometimes',
            'timestop_ic' => 'sometimes',

            'timestart_kl' => 'sometimes',
            'timestop_kl' => 'sometimes',

            'timestart_sd1' => 'sometimes',
            'timestop_sd1' => 'sometimes',
            'timestart_sd2' => 'sometimes',
            'timestop_sd2' => 'sometimes',

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
