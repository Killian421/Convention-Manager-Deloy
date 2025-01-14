<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password',
        'remember_token',
    ];

    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
