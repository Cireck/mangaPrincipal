<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Group;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idioma' => $this->faker->randomElement(['spanish', 'english']),
            'link_descarga' => $this->faker->name(),
            'link_apoyo' => $this->faker->name(),
            'date_publication' => $this->faker->dateTime(),
            'episode_id' => $this->faker->numberBetween(1, Episode::count()),
            'group_id' => $this->faker->numberBetween(1, Group::count()),
            'manga_id' => $this->faker->numberBetween(1, Group::count()),
        ];
    }
}
