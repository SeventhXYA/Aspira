<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalBp extends Model
{
    use HasFactory;
    protected $table = 'intervalbp';
    protected $fillable = [
        'timestart_bp1',
        'timestop_bp1',
        'timestart_bp2',
        'timestop_bp2',
        'timestart_bp3',
        'timestop_bp3',
        'timestart_bp4',
        'timestop_bp4',
        'timestart_bp5',
        'timestop_bp5',
        'timestart_bp6',
        'timestop_bp6',
        'timestart_bp7',
        'timestop_bp7',
        'timestart_bp8',
        'timestop_bp8',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
