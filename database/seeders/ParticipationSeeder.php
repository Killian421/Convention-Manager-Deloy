<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participation;

class ParticipationSeeder extends Seeder
{
    public function run()
    {
        Participation::factory(10)->create();
    }
}
