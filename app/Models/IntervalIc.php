<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervalIc extends Model
{
    use HasFactory;
    protected $table = 'intervalic';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
