<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailykl extends Model
{
    use HasFactory;
    protected $table = 'dailykl';
    protected $fillable = [
        'id', 'user_id', 'name', 'plan', 'actual', 'progress', 'pict'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
