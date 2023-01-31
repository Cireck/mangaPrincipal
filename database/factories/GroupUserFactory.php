<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role' => $this->faker->randomElement(['lider', 'miembro']),
            'follow' => rand(0, 1),
            'user_id' => User::factory()->create()->id,
            'group_id' => Group::factory()->create()->id,
        ];
    }
}
