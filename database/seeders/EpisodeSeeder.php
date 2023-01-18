<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Episode::factory()->count(20)->create();
        /* DB::table('episodes')->insert([
             'manga_id' => '1',
             'group_id' => '1',
             'episode' => 1,
             'title' =>  Str::random(10),
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
         ]);
         DB::table('episodes')->insert([
             'manga_id' => '1',
             'group_id' => '1',
             'episode' => 2,
             'title' =>  Str::random(10),
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
         ]);*/
    }
}
