<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;
use App\Helpers\Seed\SeedDefaultsHelper;

class CompanyFactory extends Factory {

    public function definition() {
        return [
            'name' => fake()->company(),
            'address_id' => Address::inRandomOrder()->get()->value('id'),
            'contact_person_id' => null,
        ];
    }

}
