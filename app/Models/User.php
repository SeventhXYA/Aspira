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
    protected $fillable = ['pict', 'firstname', 'lastname', 'gender_id', 'tempatlahir', 'tanggallahir', 'bulan_id', 'tahunlahir', 'nohp', 'email', 'address', 'divisi_id', 'username', 'password'];

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
        return $evaluateplan5ic->evaluate_plan5;
    }

    public function getTotalBpAttribute()
    {
        $IntervalBp = $this->intervalbp->first();
        if ($IntervalBp === null) {
            return '00:00:00';
        }
        if ($IntervalBp->created_at < Carbon::today()) {
            return '00:00:00';
        }
        // }

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
        if ($IntervalSd === null) {
            return '00:00:00';
        }
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
        if ($IntervalKl === null) {
            return '00:00:00';
        }
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
        if ($IntervalIc === null) {
            return '00:00:00';
        }
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
        if ($IntervalMb === null) {
            return '00:00:00';
        }
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
        if ($IntervalTp === null) {
            return '00:00:00';
        }
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
        if ($IntervalEv === null) {
            return '00:00:00';
        }
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
