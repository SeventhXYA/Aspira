<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';
    protected $fillable = ['pict', 'firstname', 'lastname', 'gender_id', 'tempatlahir', 'tanggallahir', 'bulan_id', 'tahunlahir', 'nohp', 'email', 'address', 'divisi_id', 'username', 'password', 'level_id'];

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function password_reset()
    {
        return $this->hasMany(PasswordReset::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function bulan()
    {
        return $this->belongsTo(Bulan::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function evaluate()
    {
        return $this->hasMany(Evaluate::class)->latest();
    }

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

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function longtermtarget()
    {
        return $this->hasMany(Longtermtarget::class)->latest();
    }

    public function weekly()
    {
        return $this->hasMany(Weekly::class)->latest();
    }

    public function interval()
    {
        return $this->hasMany(Interval::class)->latest();
    }

    public function weeklysd()
    {
        return $this->hasMany(Weeklysd::class)->latest();
    }

    public function getPlan1sdAttribute()
    {
        $Plan1 = $this->weeklysd->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan1sd = $Plan1->select('plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan1sd === null) {
            return '-';
        }
        return $plan1sd->plan1;
    }

    public function getPlan2sdAttribute()
    {
        $Plan2 = $this->weeklysd->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan2sd = $Plan2->select('plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan2sd === null) {
            return '-';
        }
        return $plan2sd->plan2;
    }

    public function getPlan3sdAttribute()
    {
        $Plan3 = $this->weeklysd->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan3sd = $Plan3->select('plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan3sd === null) {
            return '-';
        }
        return $plan3sd->plan3;
    }

    public function getPlan4sdAttribute()
    {
        $Plan4 = $this->weeklysd->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan4sd = $Plan4->select('plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan4sd === null) {
            return '-';
        }
        return $plan4sd->plan4;
    }

    public function getPlan5sdAttribute()
    {
        $Plan5 = $this->weeklysd->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan5sd = $Plan5->select('plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan5sd === null) {
            return '-';
        }
        return $plan5sd->plan5;
    }

    public function getProgressplan1sdAttribute()
    {
        $Plan1 = $this->weeklysd->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan1sd = $Plan1->select('progress_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan1sd === null) {
            return '-';
        }
        return $progressplan1sd->progress_plan1;
    }

    public function getProgressplan2sdAttribute()
    {
        $Plan2 = $this->weeklysd->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan2sd = $Plan2->select('progress_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan2sd === null) {
            return '-';
        }
        return $progressplan2sd->progress_plan2;
    }

    public function getProgressplan3sdAttribute()
    {
        $Plan3 = $this->weeklysd->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan3sd = $Plan3->select('progress_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan3sd === null) {
            return '-';
        }
        return $progressplan3sd->progress_plan3;
    }

    public function getProgressplan4sdAttribute()
    {
        $Plan4 = $this->weeklysd->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan4sd = $Plan4->select('progress_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan4sd === null) {
            return '-';
        }
        return $progressplan4sd->progress_plan4;
    }

    public function getProgressplan5sdAttribute()
    {
        $Plan5 = $this->weeklysd->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan5sd = $Plan5->select('progress_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan5sd === null) {
            return '-';
        }
        return $progressplan5sd->progress_plan5;
    }

    public function getEvaluateplan1sdAttribute()
    {
        $Plan1 = $this->weeklysd->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan1sd = $Plan1->select('evaluate_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan1sd === null) {
            return '-';
        }
        return $evaluateplan1sd->evaluate_plan1;
    }

    public function getEvaluateplan2sdAttribute()
    {
        $Plan2 = $this->weeklysd->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan2sd = $Plan2->select('evaluate_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan2sd === null) {
            return '-';
        }
        return $evaluateplan2sd->evaluate_plan2;
    }

    public function getEvaluateplan3sdAttribute()
    {
        $Plan3 = $this->weeklysd->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan3sd = $Plan3->select('evaluate_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan3sd === null) {
            return '-';
        }
        return $evaluateplan3sd->evaluate_plan3;
    }

    public function getEvaluateplan4sdAttribute()
    {
        $Plan4 = $this->weeklysd->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan4sd = $Plan4->select('evaluate_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan4sd === null) {
            return '-';
        }
        return $evaluateplan4sd->evaluate_plan4;
    }

    public function getEvaluateplan5sdAttribute()
    {
        $Plan5 = $this->weeklysd->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan5sd = $Plan5->select('evaluate_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan5sd === null) {
            return '-';
        }
        return $evaluateplan5sd->evaluate_plan5;
    }

    public function weeklybp()
    {
        return $this->hasMany(Weeklybp::class)->latest();
    }

    public function getPlan1bpAttribute()
    {
        $Plan1 = $this->weeklybp->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan1bp = $Plan1->select('plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan1bp === null) {
            return '-';
        }
        return $plan1bp->plan1;
    }

    public function getPlan2bpAttribute()
    {
        $Plan2 = $this->weeklybp->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan2bp = $Plan2->select('plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan2bp === null) {
            return '-';
        }
        return $plan2bp->plan2;
    }

    public function getPlan3bpAttribute()
    {
        $Plan3 = $this->weeklybp->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan3bp = $Plan3->select('plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan3bp === null) {
            return '-';
        }
        return $plan3bp->plan3;
    }

    public function getPlan4bpAttribute()
    {
        $Plan4 = $this->weeklybp->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan4bp = $Plan4->select('plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan4bp === null) {
            return '-';
        }
        return $plan4bp->plan4;
    }

    public function getPlan5bpAttribute()
    {
        $Plan5 = $this->weeklybp->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan5bp = $Plan5->select('plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan5bp === null) {
            return '-';
        }
        return $plan5bp->plan5;
    }

    public function getProgressplan1bpAttribute()
    {
        $Plan1 = $this->weeklybp->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan1bp = $Plan1->select('progress_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan1bp === null) {
            return '-';
        }
        return $progressplan1bp->progress_plan1;
    }

    public function getProgressplan2bpAttribute()
    {
        $Plan2 = $this->weeklybp->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan2bp = $Plan2->select('progress_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan2bp === null) {
            return '-';
        }
        return $progressplan2bp->progress_plan2;
    }

    public function getProgressplan3bpAttribute()
    {
        $Plan3 = $this->weeklybp->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan3bp = $Plan3->select('progress_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan3bp === null) {
            return '-';
        }
        return $progressplan3bp->progress_plan3;
    }

    public function getProgressplan4bpAttribute()
    {
        $Plan4 = $this->weeklybp->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan4bp = $Plan4->select('progress_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan4bp === null) {
            return '-';
        }
        return $progressplan4bp->progress_plan4;
    }

    public function getProgressplan5bpAttribute()
    {
        $Plan5 = $this->weeklybp->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan5bp = $Plan5->select('progress_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan5bp === null) {
            return '-';
        }
        return $progressplan5bp->progress_plan5;
    }

    public function getEvaluateplan1bpAttribute()
    {
        $Plan1 = $this->weeklybp->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan1bp = $Plan1->select('evaluate_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan1bp === null) {
            return '-';
        }
        return $evaluateplan1bp->evaluate_plan1;
    }

    public function getEvaluateplan2bpAttribute()
    {
        $Plan2 = $this->weeklybp->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan2bp = $Plan2->select('evaluate_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan2bp === null) {
            return '-';
        }
        return $evaluateplan2bp->evaluate_plan2;
    }

    public function getEvaluateplan3bpAttribute()
    {
        $Plan3 = $this->weeklybp->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan3bp = $Plan3->select('evaluate_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan3bp === null) {
            return '-';
        }
        return $evaluateplan3bp->evaluate_plan3;
    }

    public function getEvaluateplan4bpAttribute()
    {
        $Plan4 = $this->weeklybp->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan4bp = $Plan4->select('evaluate_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan4bp === null) {
            return '-';
        }
        return $evaluateplan4bp->evaluate_plan4;
    }

    public function getEvaluateplan5bpAttribute()
    {
        $Plan5 = $this->weeklybp->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan5bp = $Plan5->select('evaluate_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan5bp === null) {
            return '-';
        }
        return $evaluateplan5bp->evaluate_plan5;
    }

    public function weeklykl()
    {
        return $this->hasMany(Weeklykl::class)->latest();
    }

    public function getPlan1klAttribute()
    {
        $Plan1 = $this->weeklykl->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan1kl = $Plan1->select('plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan1kl === null) {
            return '-';
        }
        if ($plan1kl === null) {
            return '-';
        }
        return $plan1kl->plan1;
    }

    public function getPlan2klAttribute()
    {
        $Plan2 = $this->weeklykl->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan2kl = $Plan2->select('plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan2kl === null) {
            return '-';
        }
        return $plan2kl->plan2;
    }

    public function getPlan3klAttribute()
    {
        $Plan3 = $this->weeklykl->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan3kl = $Plan3->select('plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan3kl === null) {
            return '-';
        }
        return $plan3kl->plan3;
    }

    public function getPlan4klAttribute()
    {
        $Plan4 = $this->weeklykl->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan4kl = $Plan4->select('plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan4kl === null) {
            return '-';
        }
        return $plan4kl->plan4;
    }

    public function getPlan5klAttribute()
    {
        $Plan5 = $this->weeklykl->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan5kl = $Plan5->select('plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan5kl === null) {
            return '-';
        }
        return $plan5kl->plan5;
    }

    public function getProgressplan1klAttribute()
    {
        $Plan1 = $this->weeklykl->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan1kl = $Plan1->select('progress_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan1kl === null) {
            return '-';
        }
        return $progressplan1kl->progress_plan1;
    }

    public function getProgressplan2klAttribute()
    {
        $Plan2 = $this->weeklykl->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan2kl = $Plan2->select('progress_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan2kl === null) {
            return '-';
        }
        return $progressplan2kl->progress_plan2;
    }

    public function getProgressplan3klAttribute()
    {
        $Plan3 = $this->weeklykl->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan3kl = $Plan3->select('progress_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan3kl === null) {
            return '-';
        }
        return $progressplan3kl->progress_plan3;
    }

    public function getProgressplan4klAttribute()
    {
        $Plan4 = $this->weeklykl->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan4kl = $Plan4->select('progress_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan4kl === null) {
            return '-';
        }
        return $progressplan4kl->progress_plan4;
    }

    public function getProgressplan5klAttribute()
    {
        $Plan5 = $this->weeklykl->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan5kl = $Plan5->select('progress_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan5kl === null) {
            return '-';
        }
        return $progressplan5kl->progress_plan5;
    }

    public function getEvaluateplan1klAttribute()
    {
        $Plan1 = $this->weeklykl->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan1kl = $Plan1->select('evaluate_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan1kl === null) {
            return '-';
        }
        return $evaluateplan1kl->evaluate_plan1;
    }

    public function getEvaluateplan2klAttribute()
    {
        $Plan2 = $this->weeklykl->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan2kl = $Plan2->select('evaluate_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan2kl === null) {
            return '-';
        }
        return $evaluateplan2kl->evaluate_plan2;
    }

    public function getEvaluateplan3klAttribute()
    {
        $Plan3 = $this->weeklykl->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan3kl = $Plan3->select('evaluate_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan3kl === null) {
            return '-';
        }
        return $evaluateplan3kl->evaluate_plan3;
    }

    public function getEvaluateplan4klAttribute()
    {
        $Plan4 = $this->weeklykl->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan4kl = $Plan4->select('evaluate_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan4kl === null) {
            return '-';
        }
        return $evaluateplan4kl->evaluate_plan4;
    }

    public function getEvaluateplan5klAttribute()
    {
        $Plan5 = $this->weeklykl->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan5kl = $Plan5->select('evaluate_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan5kl === null) {
            return '-';
        }
        return $evaluateplan5kl->evaluate_plan5;
    }

    public function weeklyic()
    {
        return $this->hasMany(Weeklyic::class)->latest();
    }

    public function getPlan1icAttribute()
    {
        $Plan1 = $this->weeklyic->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan1ic = $Plan1->select('plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan1ic === null) {
            return '-';
        }
        return $plan1ic->plan1;
    }

    public function getPlan2icAttribute()
    {
        $Plan2 = $this->weeklyic->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan2ic = $Plan2->select('plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan2ic === null) {
            return '-';
        }
        return $plan2ic->plan2;
    }

    public function getPlan3icAttribute()
    {
        $Plan3 = $this->weeklyic->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan3ic = $Plan3->select('plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan3ic === null) {
            return '-';
        }
        return $plan3ic->plan3;
    }

    public function getPlan4icAttribute()
    {
        $Plan4 = $this->weeklyic->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan4ic = $Plan4->select('plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan4ic === null) {
            return '-';
        }
        return $plan4ic->plan4;
    }

    public function getPlan5icAttribute()
    {
        $Plan5 = $this->weeklyic->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $plan5ic = $Plan5->select('plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($plan5ic === null) {
            return '-';
        }
        return $plan5ic->plan5;
    }

    public function getProgressplan1icAttribute()
    {
        $Plan1 = $this->weeklyic->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan1ic = $Plan1->select('progress_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan1ic === null) {
            return '-';
        }
        return $progressplan1ic->progress_plan1;
    }

    public function getProgressplan2icAttribute()
    {
        $Plan2 = $this->weeklyic->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan2ic = $Plan2->select('progress_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan2ic === null) {
            return '-';
        }
        return $progressplan2ic->progress_plan2;
    }

    public function getProgressplan3icAttribute()
    {
        $Plan3 = $this->weeklyic->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan3ic = $Plan3->select('progress_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan3ic === null) {
            return '-';
        }
        return $progressplan3ic->progress_plan3;
    }

    public function getProgressplan4icAttribute()
    {
        $Plan4 = $this->weeklyic->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan4ic = $Plan4->select('progress_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan4ic === null) {
            return '-';
        }
        return $progressplan4ic->progress_plan4;
    }

    public function getProgressplan5icAttribute()
    {
        $Plan5 = $this->weeklyic->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $progressplan5ic = $Plan5->select('progress_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($progressplan5ic === null) {
            return '-';
        }
        return $progressplan5ic->progress_plan5;
    }

    public function getEvaluateplan1icAttribute()
    {
        $Plan1 = $this->weeklyic->first();
        if ($Plan1 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan1ic = $Plan1->select('evaluate_plan1')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan1ic === null) {
            return '-';
        }
        return $evaluateplan1ic->evaluate_plan1;
    }

    public function getEvaluateplan2icAttribute()
    {
        $Plan2 = $this->weeklyic->first();
        if ($Plan2 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan2ic = $Plan2->select('evaluate_plan2')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan2ic === null) {
            return '-';
        }
        return $evaluateplan2ic->evaluate_plan2;
    }

    public function getEvaluateplan3icAttribute()
    {
        $Plan3 = $this->weeklyic->first();
        if ($Plan3 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan3ic = $Plan3->select('evaluate_plan3')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan3ic === null) {
            return '-';
        }
        return $evaluateplan3ic->evaluate_plan3;
    }

    public function getEvaluateplan4icAttribute()
    {
        $Plan4 = $this->weeklyic->first();
        if ($Plan4 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan4ic = $Plan4->select('evaluate_plan4')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan4ic === null) {
            return '-';
        }
        return $evaluateplan4ic->evaluate_plan4;
    }

    public function getEvaluateplan5icAttribute()
    {
        $Plan5 = $this->weeklyic->first();
        if ($Plan5 === null) {
            return '-';
        }
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $evaluateplan5ic = $Plan5->select('evaluate_plan5')->latest('created_at')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        if ($evaluateplan5ic === null) {
            return '-';
        }
        return $evaluateplan5ic->evaluate_plan5;
    }

    public function getTotalBpAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $bp1 = Carbon::parse($Interval->timestart_bp1)->diffInSeconds(Carbon::parse($Interval->timestop_bp1));
        $bp2 = Carbon::parse($Interval->timestart_bp2)->diffInSeconds(Carbon::parse($Interval->timestop_bp2));
        $bp3 = Carbon::parse($Interval->timestart_bp3)->diffInSeconds(Carbon::parse($Interval->timestop_bp3));
        $bp4 = Carbon::parse($Interval->timestart_bp4)->diffInSeconds(Carbon::parse($Interval->timestop_bp4));
        $bp5 = Carbon::parse($Interval->timestart_bp5)->diffInSeconds(Carbon::parse($Interval->timestop_bp5));
        $bp6 = Carbon::parse($Interval->timestart_bp6)->diffInSeconds(Carbon::parse($Interval->timestop_bp6));
        $bp7 = Carbon::parse($Interval->timestart_bp7)->diffInSeconds(Carbon::parse($Interval->timestop_bp7));
        $bp8 = Carbon::parse($Interval->timestart_bp8)->diffInSeconds(Carbon::parse($Interval->timestop_bp8));

        $Bp = $bp1 + $bp2 + $bp3 + $bp4 + $bp5 + $bp6 + $bp7 + $bp8;
        $totalBp = CarbonInterval::seconds($Bp)->cascade()->format('%H:%I:%S');

        return $Bp;
    }

    public function getPercentageBpAttribute()
    {
        $a = $this->totalBp;
        $b = ($a / 14400) * 100;
        return $b;
    }

    public function getTotalSdAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }
        $sd1 = Carbon::parse($Interval->timestart_sd1)->diffInSeconds(Carbon::parse($Interval->timestop_sd1));
        $sd2 = Carbon::parse($Interval->timestart_sd2)->diffInSeconds(Carbon::parse($Interval->timestop_sd2));

        $Sd = $sd1 + $sd2;
        return $Sd;
    }

    public function getPercentageSdAttribute()
    {
        $a = $this->totalSd;
        $b = ($a / 3600) * 100;
        return $b;
    }

    public function getTotalKlAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $kl = Carbon::parse($Interval->timestart_kl)->diffInSeconds(Carbon::parse($Interval->timestop_kl));

        $Kl = $kl;
        $totalKl = CarbonInterval::seconds($Kl)->cascade()->format('%H:%I:%S');

        return $Kl;
    }

    public function getPercentageKlAttribute()
    {
        $a = $this->totalKl;
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalIcAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $ic = Carbon::parse($Interval->timestart_ic)->diffInSeconds(Carbon::parse($Interval->timestop_ic));

        $Ic = $ic;
        $totalIc = CarbonInterval::seconds($Ic)->cascade()->format('%H:%I:%S');

        return $Ic;
    }

    public function getPercentageIcAttribute()
    {
        $a = $this->totalIc;
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalMbAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $mb = Carbon::parse($Interval->timestart_mb)->diffInSeconds(Carbon::parse($Interval->timestop_mb));

        $Mb = $mb;
        $totalMb = CarbonInterval::seconds($Mb)->cascade()->format('%H:%I:%S');

        return $Mb;
    }

    public function getPercentageMbAttribute()
    {
        $a = $this->totalMb;
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalTpAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $tp = Carbon::parse($Interval->timestart_tp)->diffInSeconds(Carbon::parse($Interval->timestop_tp));

        $Tp = $tp;
        $totalTp = CarbonInterval::seconds($Tp)->cascade()->format('%H:%I:%S');

        return $Tp;
    }

    public function getPercentageTpAttribute()
    {
        $a = $this->totalTp;
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalCbAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $cb = Carbon::parse($Interval->timestart_cb)->diffInSeconds(Carbon::parse($Interval->timestop_cb));

        $Cb = $cb;
        $totalCb = CarbonInterval::seconds($Cb)->cascade()->format('%H:%I:%S');

        return $Cb;
    }

    public function getPercentageCbAttribute()
    {
        $a = $this->totalEv;
        $b = ($a / 1800) * 100;
        return $b;
    }

    public function getTotalEvAttribute()
    {
        $Interval = $this->interval->first();
        if ($Interval === null) {
            return 0;
        }
        if ($Interval->created_at < Carbon::today()) {
            return 0;
        }

        $ev = Carbon::parse($Interval->timestart_ev)->diffInSeconds(Carbon::parse($Interval->timestop_ev));

        $Ev = $ev;
        $totalEv = CarbonInterval::seconds($Ev)->cascade()->format('%H:%I:%S');

        return $Ev;
    }

    public function getPercentageEvAttribute()
    {
        $a = $this->totalEv;
        $b = ($a / 1800) * 100;
        return $b;
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
