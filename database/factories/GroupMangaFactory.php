<?php

namespace Database\Factories;


use App\Models\Group;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupMangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state' => $this->faker->randomElement(['Terminado', 'Abandonado', 'Activo']),
            'manga_id' => Manga::factory()->create()->id,
            'group_id' => Group::factory()->create()->id,
        ];
    }
}
