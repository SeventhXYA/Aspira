<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Longtermtarget extends Model
{
    use HasFactory;
    protected $table = 'longtermtarget';
    protected $fillable = [
        'sesi',
        'period',
        'target',
        'desc',
        'benefit',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
