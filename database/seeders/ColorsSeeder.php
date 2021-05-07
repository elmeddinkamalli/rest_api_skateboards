<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Color::insert([
            'name'=>'Black',
            'hex_code'=>'#000',
        ]);
        \App\Models\Color::insert([
            'name'=>'White',
            'hex_code'=>'#fff',
        ]);
        \App\Models\Color::insert([
            'name'=>'Red',
            'hex_code'=>'#ff0707',
        ]);
    }
}
