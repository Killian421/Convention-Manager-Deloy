<?php

namespace Database\Factories;

use App\Models\Participation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipationFactory extends Factory
{
    protected $model = Participation::class;

    public function definition()
    {
        return [
            'convention_id' => \App\Models\Convention::factory(),
            'user_id' => \App\Models\User::factory(),
            'type' => $this->faker->randomElement(['Speaker', 'Attendee']),
            'remarks' => $this->faker->sentence,
        ];
    }
}


