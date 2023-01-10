<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
    use HasFactory;
    protected $table = 'interval';
    protected $fillable = [
        'timestart_mb',
        'timestop_mb',

        'timestart_tp',
        'timestop_tp',

        'timestart_bp1',
        'timestop_bp1',
        'timestart_bp2',
        'timestop_bp2',
        'timestart_bp3',
        'timestop_bp3',
        'timestart_bp4',
        'timestop_bp4',

        'timestart_ic',
        'timestop_ic',

        'timestart_sd1',
        'timestop_sd1',

        'timestart_kl',
        'timestop_kl',

        'timestart_bp5',
        'timestop_bp5',
        'timestart_bp6',
        'timestop_bp6',
        'timestart_bp7',
        'timestop_bp7',
        'timestart_bp8',
        'timestop_bp8',

        'timestart_cb',
        'timestop_cb',

        'timestart_ev',
        'timestop_ev',

        'timestart_sd2',
        'timestop_sd2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
