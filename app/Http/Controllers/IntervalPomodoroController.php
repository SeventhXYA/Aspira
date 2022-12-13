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

        return redirect('/');
    }

    public function charts()
    {
        // $IntervalOther = IntervalOthers::where('user_id', Auth::user()->id)->latest('created_at')->first();
        // $IntervalSd = IntervalSd::where('user_id', Auth::user()->id)->latest('created_at')->whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->first();
        // $IntervalBp = IntervalBp::where('user_id', Auth::user()->id)->latest('created_at')->whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->first();
        // $IntervalKl = IntervalKl::where('user_id', Auth::user()->id)->latest('created_at')->whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->first();
        // $IntervalIc = IntervalIc::where('user_id', Auth::user()->id)->latest('created_at')->whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->first();

        $users = User::where('id', Auth::user()->id)->get();


        // $bp1 = Carbon::parse($IntervalBp->timestart_bp1)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp1));
        // $bp2 = Carbon::parse($IntervalBp->timestart_bp2)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp2));
        // $bp3 = Carbon::parse($IntervalBp->timestart_bp3)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp3));
        // $bp4 = Carbon::parse($IntervalBp->timestart_bp4)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp4));
        // $bp5 = Carbon::parse($IntervalBp->timestart_bp5)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp5));
        // $bp6 = Carbon::parse($IntervalBp->timestart_bp6)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp6));
        // $bp7 = Carbon::parse($IntervalBp->timestart_bp7)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp7));
        // $bp8 = Carbon::parse($IntervalBp->timestart_bp8)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp8));

        // $Bp = $bp1 + $bp2 + $bp3 + $bp4 + $bp5 + $bp6 + $bp7 + $bp8;
        // $totalBp = CarbonInterval::seconds($Bp)->cascade()->format('%H:%I:%S');
        // $percentageBp = ($Bp / 14400) * 100;

        // $sd1 = Carbon::parse($IntervalSd->timestart_sd1)->diffInSeconds(Carbon::parse($IntervalSd->timestop_sd1));
        // $sd2 = Carbon::parse($IntervalSd->timestart_sd2)->diffInSeconds(Carbon::parse($IntervalSd->timestop_sd2));

        // $Sd = $sd1 + $sd2;
        // $totalSd = CarbonInterval::seconds($Sd)->cascade()->format('%H:%I:%S');
        // $percentageSd = ($Sd / 3600) * 100;

        // $Mb = Carbon::parse($IntervalOther->timestart_mb)->diffInSeconds(Carbon::parse($IntervalOther->timestop_mb));
        // $totalMb = CarbonInterval::seconds($Mb)->cascade()->format('%I:%S');
        // $percentageMb = ($Mb / 1800) * 100;

        // $Tp = Carbon::parse($IntervalOther->timestart_tp)->diffInSeconds(Carbon::parse($IntervalOther->timestop_tp));
        // $totalTp = CarbonInterval::seconds($Tp)->cascade()->format('%I:%S');
        // $percentageTp = ($Tp / 1800) * 100;

        // $Cb = Carbon::parse($IntervalOther->timestart_cb)->diffInSeconds(Carbon::parse($IntervalOther->timestop_cb));
        // $totalCb = CarbonInterval::seconds($Cb)->cascade()->format('%I:%S');
        // $percentageCb = ($Cb / 1800) * 100;

        // $Ev = Carbon::parse($IntervalOther->timestart_ev)->diffInSeconds(Carbon::parse($IntervalOther->timestop_ev));
        // $totalEv = CarbonInterval::seconds($Ev)->cascade()->format('%I:%S');
        // $percentageEv = ($Ev / 1800) * 100;

        // $Kl = Carbon::parse($IntervalKl->timestart_kl)->diffInSeconds(Carbon::parse($IntervalKl->timestop_kl));
        // $totalKl = CarbonInterval::seconds($Kl)->cascade()->format('%I:%S');
        // $percentageKl = ($Kl / 1800) * 100;

        // $Ic = Carbon::parse($IntervalIc->timestart_ic)->diffInSeconds(Carbon::parse($IntervalIc->timestop_ic));
        // $totalIc = CarbonInterval::seconds($Ic)->cascade()->format('%I:%S');
        // $percentageIc = ($Ic / 1800) * 100;
        // $Mb = IntervalOthers::where('user_id', Auth::user()->id)->get();
        return view('charts', [
            "title" => "Charts",
            "sesi" => "GRAFIK"
        ], compact('users'));
    }
}
