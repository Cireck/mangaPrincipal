<?php

namespace Database\Seeders;

use App\Models\GroupUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupUser::factory()->count(20)->create();
        /*DB::table('group_user')->insert([
            'user_id' =>  '1',
            'group_id' =>  '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);*/
    }
}
