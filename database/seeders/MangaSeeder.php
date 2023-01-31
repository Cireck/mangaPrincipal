<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manga::factory()->count(10)->create();
        /* DB::table('mangas')->insert([
             'name' => $name= 'shinano',
             'sub_name' =>  'yamato',
             'description' =>  'yamatoss',
             'score' =>  10,
             'state' =>  'Publicadonse',
             'synonyms' =>  'yaamaa',
             'type' =>  'manga',
             'demography' =>  1,
             'webcomic' =>  0,
             'yonkowa' =>  1,
             'amateur' =>  0,
             'erotic' =>  1,
             'url' =>  $name,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
         ]);*/
    }
}
