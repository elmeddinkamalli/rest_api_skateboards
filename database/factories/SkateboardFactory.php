<?php

namespace Database\Factories;

use App\Models\Skateboard;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkateboardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skateboard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(rand(1,3)),
            'price' => rand(20, 200),
            'addition' => rand(0, 30),
            'type' => rand(1,3)
        ];
    }
}
