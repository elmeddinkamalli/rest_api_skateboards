<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Skateboard_colors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Skateboard_color::factory(20)->create();
    }
}
