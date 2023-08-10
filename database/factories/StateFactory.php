<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ar_description'=>fake()->text(20),
            'ar_name'=>fake()->text(20),
            'en_description'=>fake()->text(20),
            'en_name'=>fake()->text(20),
            'image'=>fake()->text(20),
           'price'=>fake()->numberBetween(0,1000),
           'category_id'=>1
        ];
    }
}
