<?php

namespace Database\Seeders;

use App\Models\MangaManga;
use Illuminate\Database\Seeder;

class MangaMangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MangaManga::factory()->count(10)->create();
    }
}
