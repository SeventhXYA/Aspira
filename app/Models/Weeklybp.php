<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklybp extends Model
{
    use HasFactory;
    protected $table = 'weeklybp';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
