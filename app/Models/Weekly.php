<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekly extends Model
{
    use HasFactory;
    protected $table = 'weekly';
    protected $fillable = [
        'id', 'target_start', 'target_end', 'user_id', 'weeklysd', 'descweeklysd', 'weeklybp', 'descweeklybp', 'weeklykl', 'descweeklykl', 'weeklyic', 'descweeklyic'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
