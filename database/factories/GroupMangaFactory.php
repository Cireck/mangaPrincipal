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
            'manga_id' => $this->faker->numberBetween(1, Manga::count()),
            'group_id' => $this->faker->numberBetween(1, Group::count()),
        ];
    }
}
