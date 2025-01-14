<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'convention_id',
        'user_id',
        'type',
        'remarks',
    ];

    public function convention()
    {
        return $this->belongsTo(Convention::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

