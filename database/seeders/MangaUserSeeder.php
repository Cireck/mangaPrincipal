<?php

namespace Database\Seeders;

use App\Models\MangaUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class MangaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MangaUser::factory()->count(20)->create();
        /*  DB::table('manga_user')->insert([
              'manga_id' =>  '1',
              'user_id' =>  '1',
              'type' => 'following',
              'last_episode' => 0,
              'created_at' => new DateTime,
              'updated_at' => new DateTime,
          ]);*/
    }
}
