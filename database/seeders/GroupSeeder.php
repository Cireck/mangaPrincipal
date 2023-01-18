<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\DateTime;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->count(20)->create();
        /* DB::table('groups')->insert([
             'user_id' => '1',
             'name' =>  $name='yamato',
             'description' =>  'yamato',
             'email' => 'spartancireck@gmail.com',
             'url' => $name,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
         ]);
 */
    }
}
