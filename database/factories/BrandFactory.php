<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_name' => $this->faker->word,
            'company_name' => $this->faker->word,
            'image_id' => null,
            'country_name' => $this->faker->randomElement(['Bangladesh', 'Pakistan', 'Palestine', 'Turkey'])
        ];
    }
}
