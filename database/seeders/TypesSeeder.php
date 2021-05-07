<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Type::insert([
            'name'=> 'Small'
        ]);
        \App\Models\Type::insert([
            'name'=> 'Medium'
        ]);
        \App\Models\Type::insert([
            'name'=> 'Big'
        ]);
    }
}
