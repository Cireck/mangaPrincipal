<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Manga;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Elemento duplicado', 'DMCA', 'Imagen incorrecto', 'Contenido incorrecto', 'Contenido inapropiado', 'Otro']),
            'description' => $this->faker->text(),
            'user_id' => User::factory()->create()->id,
            'manga_id' => $this->faker->numberBetween(1, Manga::count()),
            'episode_id' => $this->faker->numberBetween(1, Episode::count()),
        ];
    }
}
