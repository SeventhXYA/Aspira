<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalOthers extends Model
{
    use HasFactory;
    protected $table = 'intervalother';
    protected $fillable = [
        'id', 'user_id', 'interval_mb', 'timestart_mb', 'timestop_mb', 'interval_tp', 'timestart_tp', 'timestop_tp', 'interval_cb', 'timestart_cb', 'timestop_cb', 'interval_ev', 'timestart_ev', 'timestop_ev'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
