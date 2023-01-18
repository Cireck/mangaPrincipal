<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->unique()->name(),
            'description' => $this->faker->text(),
            'type' => $this->faker->randomElement(['Scanlation', 'Uploader', 'Amateur']),
            'verified' => rand(0, 1),
            'tablon' => $this->faker->text(),
            'email' => $this->faker->email(),
            'facebook' => $this->faker->name(),
            'paypal' => $this->faker->name(),
            'twitter' => $this->faker->name(),
            'google+' => $this->faker->name(),
            'discord' => $this->faker->name(),
            'sitio_web' => $this->faker->name(),
            'url' => str_replace(" ", "-", $name),
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
