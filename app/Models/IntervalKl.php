<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalKl extends Model
{
    use HasFactory;
    protected $table = 'intervalkl';
    protected $fillable = [
        'timestart_kl',
        'timestop_kl',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
