<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ar_description'=>fake()->text(200),
            'ar_title'=>fake()->text(100),
            'en_description'=>fake()->text(200),
            'en_title'=>fake()->text(100),
            'image'=>fake()->imageUrl(200,200),
            'date'=>fake()->date('Y-m-d')
        ];
    }
}
