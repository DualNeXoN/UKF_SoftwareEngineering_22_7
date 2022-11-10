<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory {

    public function definition() {
        return [
            'number' => rand(1, 200),
            'street' => fake()->streetName(),
            'postcode' => rand(10000, 99999),
            'town_id' => 1
        ];
    }
}
