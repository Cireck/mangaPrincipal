<?php

namespace Database\Seeders;

use App\Models\TitleAlternative;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class TitleAlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TitleAlternative::factory()->count(20)->create();
        /*DB::table('title_alternatives')->insert([
            'manga_id' =>  '1',
            'title' =>  'musachi',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);*/
    }
}
