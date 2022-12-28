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
        \App\Models\Restaurant::factory(10)->create();
        \App\Models\Feature::factory(4)->create();
        \App\Models\Dishe::factory(100)->create();
        \App\Models\Category::factory(7)->create();
    }
}
