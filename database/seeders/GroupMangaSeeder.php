<?php

namespace Database\Seeders;

use App\Models\GroupManga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class GroupMangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupManga::factory()->count(20)->create();
        /* DB::table('group_manga')->insert([
             'group_id' =>  '1',
             'manga_id' =>  '1',
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
         ]);*/
    }
}
