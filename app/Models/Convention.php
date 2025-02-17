<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start',
        'end',
        'venue',
        'speakers',
    ];

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
