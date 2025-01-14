<?php

namespace Database\Factories;

use App\Models\Convention;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConventionFactory extends Factory
{
    protected $model = Convention::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'start' => $this->faker->date,
            'end' => $this->faker->date,
            'venue' => $this->faker->address,
            'speakers' => $this->faker->sentence,
        ];
    }
}

