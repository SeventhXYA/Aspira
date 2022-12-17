<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailybp extends Model
{
    use HasFactory;
    protected $table = 'dailybp';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
