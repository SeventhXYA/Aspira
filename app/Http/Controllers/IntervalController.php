<?php

namespace App\Http\Controllers;

use App\Models\Interval;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntervalController extends Controller
{
    public function pomodoro()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $interval = Interval::where('id', Auth::user()->id)->get();

        return view('pomodoro.pomodoro', [
            "title" => "Pomodoro",
        ], compact('users', 'interval'));
    }

    public function create()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $interval = Interval::where('id', Auth::user()->id)->get();

        return view('pomodoro.pomodororeport', [
            "title" => "Pomodoro",
        ], compact('users', 'interval'));
    }

    public function store(Request $request)
    {
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

        $interval = new Interval($validated_data);
        $interval->user()->associate(Auth::user());
        $interval->save();

        return redirect('pomodoro');
    }

    public function destroy(Interval $interval)
    {
        $interval->delete();
        return redirect()->back()->with([
            'success' => 'Data berhasil dihapus.'
        ]);
    }


    public function recordinterval()
    {
        $users = User::where('level_id', 3)->get();

        $data = [
            'title' => 'Record Daily Interval',
            'users' => $users
        ];
        return view('admin.recordinterval', $data);
    }

    public function viewadmin()
    {
        $interval = Interval::orderBy('user_id', 'ASC')->simplePaginate(10);

        return view('admin.intervalpomodoro', [
            "title" => "Daily Report Self-Development"
        ], compact('interval'));
    }
}
