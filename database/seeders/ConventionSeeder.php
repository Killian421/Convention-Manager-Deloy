<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Convention;

class ConventionSeeder extends Seeder
{
    public function run()
    {
        Convention::factory(10)->create();
    }
}

