<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        /* DB::table('users')->insert([
    'email' => 'spartancireck@gmail.com',
    'role' => 'admin',
    'name'=>'yamato',
    'password' => Hash::make('shinano1'),
    ]);*/
    }
}
