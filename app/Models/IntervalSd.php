<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalSd extends Model
{
    use HasFactory;
    protected $table = 'intervalsd';
    protected $fillable = [
        'id', 'user_id', 'interval_sd1', 'timestart_sd1', 'timestop_sd1', 'interval_sd2', 'timestart_sd2', 'timestop_sd2'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
