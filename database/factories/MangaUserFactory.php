<?php

namespace Database\Factories;

use App\Models\Manga;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MangaUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['watch', 'pending', 'follow', 'wish', 'have', 'abandoned']),
            'last_episode' => 0,
            'like' => rand(0, 1),
            'user_id' => User::factory()->create()->id,
            'manga_id' => $this->faker->numberBetween(1, Manga::count()),
        ];
    }
}
