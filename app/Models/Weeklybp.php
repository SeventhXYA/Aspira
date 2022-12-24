<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklybp extends Model
{
    use HasFactory;
    protected $table = 'weeklybp';
    protected $fillable = [
        'plan1',
        'evaluate_plan1',
        'progress_plan1',
        'plan2',
        'evaluate_plan2',
        'progress_plan2',
        'plan3',
        'evaluate_plan3',
        'progress_plan3',
        'plan4',
        'evaluate_plan4',
        'progress_plan4',
        'plan5',
        'evaluate_plan5',
        'progress_plan5',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
