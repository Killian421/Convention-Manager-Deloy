<?php

use Illuminate\Support\Facades\Route;

Route::get('/check-database', function () {
    $users = App\Models\User::all();
    $personalInfos = App\Models\PersonalInfo::all();
    $participations = App\Models\Participation::all();
    $conventions = App\Models\Convention::all();

    return view('check-database', compact('users', 'personalInfos', 'participations', 'conventions'));
});
