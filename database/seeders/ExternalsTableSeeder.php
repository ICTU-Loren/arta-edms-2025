<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExternalsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Externals::factory()->count(100)->create();
    }
}
