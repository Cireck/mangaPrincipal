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
            'episode_id' => Episode::factory()->create()->id,
            'group_id' => Group::factory()->create()->id,
            'manga_id' => Manga::factory()->create()->id,
        ];
    }
}
