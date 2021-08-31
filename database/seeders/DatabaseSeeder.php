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
        \App\Models\Skill::factory(6)->create();
        \App\Models\Portfolio::factory(9)->create();
        $this->call([
            AboutSeeder::class,
            ContactSeeder::class,
            TitreSeeder::class,
            
            
        ]);
    }
}
