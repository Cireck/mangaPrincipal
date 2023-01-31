<?php

namespace Database\Seeders;

use App\Models\EpisodeGroup;
use Illuminate\Database\Seeder;

class EpisodeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EpisodeGroup::factory()->count(10)->create();
    }
}
