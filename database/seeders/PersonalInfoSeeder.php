<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;

class PersonalInfoSeeder extends Seeder
{
    public function run()
    {
        PersonalInfo::factory(10)->create();
    }
}
