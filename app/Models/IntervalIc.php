<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalIc extends Model
{
    use HasFactory;
    protected $table = 'intervalic';
    protected $fillable = [
        'id', 'user_id', 'interval_ic', 'timestart_ic', 'timestop_ic'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
