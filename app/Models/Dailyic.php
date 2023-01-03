<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailyic extends Model
{
    use HasFactory;
    protected $table = 'dailyic';
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
