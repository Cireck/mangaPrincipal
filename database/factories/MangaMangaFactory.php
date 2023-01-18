<?php

namespace Database\Factories;

use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class MangaMangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manga_id_p' => $this->faker->numberBetween(1, Manga::count()),
            'manga_id_h' => $this->faker->numberBetween(1, Manga::count()),
        ];
    }
}
