<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkateboardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Skateboard::factory(20)->create();
    }
}
