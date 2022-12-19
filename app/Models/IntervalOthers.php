<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalOthers extends Model
{
    use HasFactory;
    protected $table = 'intervalother';
    protected $fillable = [
        'timestart_mb',
        'timestop_mb',
        'timestart_tp',
        'timestop_tp',
        'timestart_cb',
        'timestop_cb',
        'timestart_ev',
        'timestop_ev',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
