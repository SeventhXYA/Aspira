<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklyic extends Model
{
    use HasFactory;
    protected $table = 'weeklyic';
    protected $fillable = [
        'id', 'user_id', 'plan1', 'progress_plan1', 'plan2', 'progress_plan2', 'plan3', 'progress_plan3', 'plan4', 'progress_plan4', 'plan5', 'progress_plan5'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function periodeweekly()
    {
        return $this->belongsTo(Periodeweekly::class);
    }
}
