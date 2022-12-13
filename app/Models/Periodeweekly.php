<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodeweekly extends Model
{
    use HasFactory;
    protected $table = 'periodeweekly';
    protected $fillable = [
        'id', 'target_start', 'target_end', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
}
