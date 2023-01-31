<?php

namespace Database\Factories;

use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenderMangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manga_id' => Manga::factory()->create()->id,
            'gender_id' => rand(1, 5),
        ];
    }
}
