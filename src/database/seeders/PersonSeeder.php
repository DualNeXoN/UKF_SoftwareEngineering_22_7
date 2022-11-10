<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Helpers\Seed\SeedModeHelper;

class PersonSeeder extends Seeder {

    private static $table = "person";

    public function run() {
        $instance = new PersonSeeder;

        DB::table(PersonSeeder::$table)->insert($instance->defaults());

        if(SeedModeHelper::isBasicSeed()) return;

        $instance->pairAndSeed();
    }

    /**
     * Creates db record for all general_user records.
     */
    private function pairAndSeed() {
        $users = DB::table('general_user')->where('id', '>', 1)->get();
        $addresses = json_decode(json_encode(DB::table('address')->get()), true);
        foreach($users as $user) {
            $userId = ((array) $user)['id'];
            $addressId = null;
            if(count($addresses) > 0) $addressId = $addresses[rand(0, count($addresses)-1)]['id'];
            DB::table(PersonSeeder::$table)->insert([
                'general_user_id' => $userId,
                'name' => fake()->firstName(),
                'surname' => fake()->lastName(),
                'birth_date' => fake()->dateTimeBetween($startDate = '-50 years', $endDate = '-19 years')->format("Y-m-d"),
                'address_id' => $addressId,
            ]);
        }
        
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'general_user_id' => 1,
            'name' => 'Admin',
            'surname' => 'PPUtils',
        ];
    }

}
