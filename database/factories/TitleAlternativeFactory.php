<?php

namespace Database\Factories;

use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleAlternativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'manga_id' => Manga::factory()->create()->id,
        ];
    }
}
