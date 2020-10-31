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
        // \App\Models\Gallery::factory(20)->create();
        // \App\Models\Agenda::factory(20)->create();
        // \App\Models\Profile::factory(1)->create();
        // \App\Models\Vision::factory(1)->create();
        // \App\Models\Video::factory(5)->create();
        // \App\Models\User::factory(5)->create();
        // \App\Models\Option::factory(1)->create();
        \App\Models\Admin::factory(1)->create();
    }
}
