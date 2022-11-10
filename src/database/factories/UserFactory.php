<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Helpers\Seed\SeedDefaultsHelper;
use Hash;

class UserFactory extends Factory {

    public function definition() {
        return [
            'uid' => fake()->unique()->numberBetween(200001, 999999),
            'password' => Hash::make('123'),
            'role_id' => SeedDefaultsHelper::getAdminRoleId(),
        ];
    }

}
