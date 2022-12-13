<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';
    protected $fillable = [
        'id', 'pict', 'name', 'gender_id', 'divisi_id', 'nohp', 'username', 'email', 'password', 'level_id', 'address'
    ];


    public function dailysd()
    {
        return $this->hasMany(Dailysd::class)->latest();
    }

    public function dailybp()
    {
        return $this->hasMany(Dailybp::class)->latest();
    }
    public function dailykl()
    {
        return $this->hasMany(Dailykl::class)->latest();
    }
    public function dailyic()
    {
        return $this->hasMany(Dailyic::class)->latest();
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class)->latest();
    }

    public function level()
    {
        return $this->belongsTo(Level::class)->latest();
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class)->latest();
    }

    public function longtermtarget()
    {
        return $this->hasMany(Longtermtarget::class)->latest();
    }

    public function weekly()
    {
        return $this->hasMany(Weekly::class)->latest();
    }

    public function intervalsd()
    {
        return $this->hasMany(IntervalSd::class)->latest();
    }

    public function intervalbp()
    {
        return $this->hasMany(IntervalBp::class)->latest();
    }

    public function intervalkl()
    {
        return $this->hasMany(IntervalKl::class)->latest();
    }

    public function intervalic()
    {
        return $this->hasMany(IntervalIc::class)->latest();
    }

    public function intervalothers()
    {
        return $this->hasMany(IntervalOthers::class)->latest();
    }


    public function weeklysd()
    {
        return $this->hasMany(Weeklysd::class);
    }

    public function weeklybp()
    {
        return $this->hasMany(Weeklybp::class);
    }

    public function weeklykl()
    {
        return $this->hasMany(Weeklykl::class);
    }

    public function weeklyic()
    {
        return $this->hasMany(Weeklyic::class);
    }



    public function getTotalBpAttribute()
    {
        $IntervalBp = $this->intervalbp->first();
        if ($IntervalBp->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $bp1 = Carbon::parse($IntervalBp->timestart_bp1)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp1));
        $bp2 = Carbon::parse($IntervalBp->timestart_bp2)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp2));
        $bp3 = Carbon::parse($IntervalBp->timestart_bp3)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp3));
        $bp4 = Carbon::parse($IntervalBp->timestart_bp4)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp4));
        $bp5 = Carbon::parse($IntervalBp->timestart_bp5)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp5));
        $bp6 = Carbon::parse($IntervalBp->timestart_bp6)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp6));
        $bp7 = Carbon::parse($IntervalBp->timestart_bp7)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp7));
        $bp8 = Carbon::parse($IntervalBp->timestart_bp8)->diffInSeconds(Carbon::parse($IntervalBp->timestop_bp8));

        $Bp = $bp1 + $bp2 + $bp3 + $bp4 + $bp5 + $bp6 + $bp7 + $bp8;
        $totalBp = CarbonInterval::seconds($Bp)->cascade()->format('%H:%I:%S');

        return $totalBp;
    }

    public function getPercentageBpAttribute()
    {
        $a = Carbon::parse($this->totalBp)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 14400) * 100;
        return $b;
    }

    public function getTotalSdAttribute()
    {
        $IntervalSd = $this->intervalsd->first();
        if ($IntervalSd->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $sd1 = Carbon::parse($IntervalSd->timestart_sd1)->diffInSeconds(Carbon::parse($IntervalSd->timestop_sd1));
        $sd2 = Carbon::parse($IntervalSd->timestart_sd2)->diffInSeconds(Carbon::parse($IntervalSd->timestop_sd2));

        $Sd = $sd1 + $sd2;
        $totalSd = CarbonInterval::seconds($Sd)->cascade()->format('%H:%I:%S');

        return $totalSd;
    }

    public function getPercentageSdAttribute()
    {
        $a = Carbon::parse($this->totalSd)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 3600) * 100;
        return $b;
    }

    public function getTotalKlAttribute()
    {
        $IntervalKl = $this->intervalkl->first();
        if ($IntervalKl->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $kl = Carbon::parse($IntervalKl->timestart_kl)->diffInSeconds(Carbon::parse($IntervalKl->timestop_kl));

        $Kl = $kl;
        $totalKl = CarbonInterval::seconds($Kl)->cascade()->format('%H:%I:%S');

        return $totalKl;
    }

    public function getPercentageKlAttribute()
    {
        $a = Carbon::parse($this->totalKl)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalIcAttribute()
    {
        $IntervalIc = $this->intervalic->first();
        if ($IntervalIc->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $ic = Carbon::parse($IntervalIc->timestart_ic)->diffInSeconds(Carbon::parse($IntervalIc->timestop_ic));

        $Ic = $ic;
        $totalIc = CarbonInterval::seconds($Ic)->cascade()->format('%H:%I:%S');

        return $totalIc;
    }

    public function getPercentageIcAttribute()
    {
        $a = Carbon::parse($this->totalIc)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalMbAttribute()
    {
        $IntervalMb = $this->intervalothers->first();
        if ($IntervalMb->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $mb = Carbon::parse($IntervalMb->timestart_mb)->diffInSeconds(Carbon::parse($IntervalMb->timestop_mb));

        $Mb = $mb;
        $totalMb = CarbonInterval::seconds($Mb)->cascade()->format('%H:%I:%S');

        return $totalMb;
    }

    public function getPercentageMbAttribute()
    {
        $a = Carbon::parse($this->totalMb)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalTpAttribute()
    {
        $IntervalTp = $this->intervalothers->first();
        if ($IntervalTp->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $tp = Carbon::parse($IntervalTp->timestart_tp)->diffInSeconds(Carbon::parse($IntervalTp->timestop_tp));

        $Tp = $tp;
        $totalTp = CarbonInterval::seconds($Tp)->cascade()->format('%H:%I:%S');

        return $totalTp;
    }

    public function getPercentageTpAttribute()
    {
        $a = Carbon::parse($this->totalTp)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalEvAttribute()
    {
        $IntervalEv = $this->intervalothers->first();
        if ($IntervalEv->created_at < Carbon::today()) {
            return '00:00:00';
        }

        $ev = Carbon::parse($IntervalEv->timestart_ev)->diffInSeconds(Carbon::parse($IntervalEv->timestop_ev));

        $Ev = $ev;
        $totalEv = CarbonInterval::seconds($Ev)->cascade()->format('%H:%I:%S');

        return $totalEv;
    }

    public function getPercentageEvAttribute()
    {
        $a = Carbon::parse($this->totalEv)->diffInSeconds(Carbon::parse('00:00:00'));
        $b = ($a / 1800) * 100;
        return $b;
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
