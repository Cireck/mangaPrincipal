<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            //   UserSeeder::class,
            ProfileSeeder::class,
            // MangaSeeder::class,
             GroupSeeder::class,
             EpisodeSeeder::class,
            GenderSeeder::class,
            GroupMangaSeeder::class,
            GroupUserSeeder::class,
             MangaUserSeeder::class,
             GenderMangaSeeder::class,
            EpisodeGroupSeeder::class,
            TitleAlternativeSeeder::class,
            ReportSeeder::class,
            MangaMangaSeeder::class,
        ]);
    }
}
