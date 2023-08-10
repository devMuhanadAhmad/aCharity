<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orphan>
 */
class OrphanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'en_about_his_life'=>fake()->text(200),
        'en_reason_he_needs_bail'=>fake()->text(200),
        'en_name'=>fake()->text(200),
        'en_address'=>fake()->text(200),
        'en_current_incubator'=>fake()->text(200),
        'en_health_status'=>fake()->text(200),
        'en_brothers'=>fake()->text(200),
        'en_study'=>fake()->text(200),
        'ar_about_his_life'=>fake()->text(200),
        'ar_reason_he_needs_bail'=>fake()->text(200),
        'ar_name'=>fake()->text(200),
        'ar_address'=>fake()->text(200),
        'ar_current_incubator'=>fake()->text(200),
        'ar_health_status'=>fake()->text(200),
        'ar_brothers'=>fake()->text(200),
        'ar_study'=>fake()->text(200),
        'guarantee_amount'=>fake()->numberBetween(0,1000),

        'case'=>'yes',
        'image'=>fake()->imageUrl(200,250)
        ];
    }
}
