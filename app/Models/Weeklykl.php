<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklykl extends Model
{
    use HasFactory;
    protected $table = 'weeklykl';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
