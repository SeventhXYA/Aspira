<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklysd extends Model
{
    use HasFactory;
    protected $table = 'weeklysd';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
