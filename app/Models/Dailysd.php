<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailysd extends Model
{
    use HasFactory;
    protected $table = 'dailysd';
    protected $fillable = [
        'date',
        'timestart',
        'timefinish',
        'plan',
        'actual',
        'progress',
        'pict',
        'desc',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
