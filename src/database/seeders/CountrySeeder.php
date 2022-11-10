<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    private static $table = 'country';

    public function run() {
        $instance = new CountrySeeder;

        DB::table(CountrySeeder::$table)->insert($instance->defaults());

        $instance->seedFromJson('countries.json');
    }

    /**
     * Seeds table through JSON file.
     */
    private function seedFromJson($file = null) {

        // Checks for valid parameters and if JSON file exists
        if(($file == null) || !file_exists($fullPath = storage_path('seeders/' . $file))) return;

        // Fills table
        $data = json_decode(file_get_contents($fullPath), true);
        foreach ($data as $value) {
            DB::table(CountrySeeder::$table)->insert([
                'name' => $value
            ]);
        }
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'name' => 'undefined'
        ];
    }

}
