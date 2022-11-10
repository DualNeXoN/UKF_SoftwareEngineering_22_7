<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\Town;
use Database\Factories\AddressFactory;
use App\Helpers\Seed\SeedModeHelper;

class AddressSeeder extends Seeder {

    private static $table = "address";

    public function run() {
        $instance = new AddressSeeder;

        DB::table(AddressSeeder::$table)->insert($instance->defaults());

        if(SeedModeHelper::isBasicSeed()) return;

        $instance->factoryRandomSeed(0, (SeedModeHelper::isFastSeed() ? 2 : 5));
    }

    /**
     * Seeds table through AddressFactory.
     */
    private function factoryRandomSeed($minPerTown, $maxPerTown) {
        $towns = Town::where('id', '<>', 1)->get();
        foreach($towns as $town) {
            Address::factory(rand($minPerTown, $maxPerTown))->create([
                'town_id' => $town->id
            ]);
        }
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'number' => 'undefined',
            'street' => 'undefined',
            'postcode' => 'undefined',
            'town_id' => 1
        ];
    }

}
