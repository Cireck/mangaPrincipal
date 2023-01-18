<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nick' => $nick = $this->faker->name(),
            'email' => $this->faker->email(),
            'country' => rand(1, 50),
            'gender' => $this->faker->randomElement(['F', 'M']),
            'birthday' => $this->faker->date(),
            'facebook' => $this->faker->name(),
            'twitter' => $this->faker->name(),
            'sitio_web' => $this->faker->name(),
            'mode_view' => rand(0, 2),
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
            'url' => str_replace(" ", "-", $nick),
        ];
    }
}
