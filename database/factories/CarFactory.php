<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{

    public function definition()
    {
        return [
            'user_id'            => User::all()->random()->id,
            'model_name'         => $this->faker->word,
            'price'              => $this->faker->randomElement(['1.23 Crore', '69 Lakh', '2.5 Crore', '1.65 Crore']),
            'brand_id'           => Brand::all()->random()->id,
            'color'              => $this->faker->randomElement(['red', 'white', 'blue', 'silver', 'black']),
            'noOfSeats'          => $this->faker->numberBetween(1,6),
            'engine_type'        => $this->faker->word,
            'fuel_tank_capacity' => $this->faker->numberBetween(25, 70),
            'image_id'           => null,
            'mileage'            => $this->faker->numberBetween(20, 35),
            'fuel_type'          => $this->faker->randomElement(['petrol', 'diesel', 'octane']),
            'condition'          => $this->faker->randomElement(['new', 'used']),
            'gear_type'          => $this->faker->randomElement(['manuel', 'auto']),
            'description'        => $this->faker->paragraph
          ];
    }
}
