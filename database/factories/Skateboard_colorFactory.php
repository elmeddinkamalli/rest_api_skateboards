<?php

namespace Database\Factories;

use App\Models\Skateboard_color;
use Illuminate\Database\Eloquent\Factories\Factory;

class Skateboard_colorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skateboard_color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'skateboard_id' => rand(1,20),
            'color_id' => rand(1,3)
        ];
    }
}
