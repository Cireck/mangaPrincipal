<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->name(),
            'sub_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'score' => rand(1, 10),
            'state' => $this->faker->randomElement(['Publicándose', 'Abandonado', 'Pausado', 'Terminado']),
            // 'synonyms' => $this->faker->name(),
            'type' => $this->faker->randomElement(['Manga', 'Manhwa', 'Manhua', 'Novela', 'One shot', 'Doujinshi', 'Oel']),
            'view' => rand(1, 10),
            'demography' => $this->faker->randomElement(['Seinen', 'Shoujo', 'Shounen', 'Josei', 'Kodomo']),
            'webcomic' => rand(0, 1),
            'yonkowa' => rand(0, 1),
            'amateur' => rand(0, 1),
            'erotic' => rand(0, 1),
            'url' => str_replace(" ", "-", $name),
        ];
    }
}
