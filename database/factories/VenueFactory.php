<?php

namespace Database\Factories;

use App\Models\venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $capacityMin = $this->faker->numberBetween(50, 200);
        return [
            'name'         => $this->faker->company() . ' Venue',
            'description'  => $this->faker->paragraph(),
            'address'      => $this->faker->streetAddress(),
            'city'         => $this->faker->city(),
            'capacity_min' => $capacityMin,
            'capacity_max' => $this->faker->numberBetween($capacityMin, 1000),
            'base_price'   => $this->faker->randomFloat(2, 500, 5000),
            'hourly_rate'  => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
