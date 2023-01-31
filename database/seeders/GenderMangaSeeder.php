<?php

namespace Database\Seeders;

use App\Models\GenderManga;
use Illuminate\Database\Seeder;

class GenderMangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenderManga::factory()->count(10)->create();
        /* DB::table('gender_manga')->insert([
    'manga_id' => '1',
    'gender_id' => '1',
    'created_at' => new DateTime,
    'updated_at' => new DateTime,
    ]);*/
    }
}
