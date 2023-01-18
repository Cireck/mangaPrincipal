<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'episode' => rand(1, 10),
            'volumen' => rand(1, 10),
            'view' => rand(1, 10),
            'title' => $this->faker->name(),
            'manga_id' => $this->faker->numberBetween(1, Manga::count()),
        ];
    }
}
