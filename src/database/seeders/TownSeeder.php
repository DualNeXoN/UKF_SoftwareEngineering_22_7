<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Helpers\Seed\SeedModeHelper;

class TownSeeder extends Seeder {

    private static $table = 'town';

    public function run() {
        $instance = new TownSeeder;

        DB::table(TownSeeder::$table)->insert($instance->defaults());

        if(SeedModeHelper::isBasicSeed()) return;

        $instance->seedFromJson('Slovakia', 'cities_slovakia.json');

        if(SeedModeHelper::isFastSeed()) return;

        $instance->seedFromJson('Czech Republic', 'cities_czechia.json');
        $instance->seedFromJson('Poland', 'cities_poland.json');
        $instance->seedFromJson('Hungary', 'cities_hungary.json');
        $instance->seedFromJson('Austria', 'cities_austria.json');
        $instance->seedFromJson('Ukraine', 'cities_ukraine.json');
    }

    /**
     * Seeds table through JSON file.
     */
    private function seedFromJson($countryName = null, $file = null) {

        // Checks for valid parameters
        if($countryName == null || $file == null) return;

        // Gets country from database
        $country = Country::where('name', $countryName)->first();

        // Checks for valid retrieved country
        if($country == null) return;

        // Checks if JSON file exists
        if(!file_exists($fullPath = storage_path('seeders/' . $file))) return;

        // Fills table
        $data = json_decode(file_get_contents($fullPath), true);
        foreach ($data as $value) {
            DB::table(TownSeeder::$table)->insert([
                'name' => $value,
                'country_id' => $country->id
            ]);
        }
    }

    /**
     * Seeds table through random names.
     * @deprecated
     */
    private function seedFakeNames() {
        $countries = Country::where('id', '<>', 1)->get();
        foreach($countries as $country) {
            $numOfTownsInCountry = rand(1, 1);
            for($index = 1; $index <= $numOfTownsInCountry; $index++) {
                DB::table(TownSeeder::$table)->insert([
                    'name' => fake()->city(),
                    'country_id' => $country->id
                ]);
            }
        }
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'name' => 'undefined',
            'country_id' => 1
        ];
    }

}
