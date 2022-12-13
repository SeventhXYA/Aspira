<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pomodoro extends Model
{
    use HasFactory;
    protected $table = 'pomodoro';
    protected $fillable = ['focustime'];
}
