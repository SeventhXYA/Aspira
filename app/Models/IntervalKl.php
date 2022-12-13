<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalKl extends Model
{
    use HasFactory;
    protected $table = 'intervalkl';
    protected $fillable = [
        'id', 'user_id', 'interval_kl', 'timestart_kl', 'timestop_kl'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
