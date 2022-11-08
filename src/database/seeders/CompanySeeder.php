<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Helpers\Seed\SeedModeHelper;

class CompanySeeder extends Seeder {

    private static $table = "company";

    public function run() {
        $instance = new CompanySeeder;

        DB::table(CompanySeeder::$table)->insert($instance->defaults());

        if(SeedModeHelper::isBasicSeed()) return;

        $instance->factorySeedCompanies(10);
    }

    /**
     * Seeds table through CompanyFactory.
     */
    private function factorySeedCompanies($count) {
        Company::factory($count)->create();
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'name' => 'undefined',
            'address_id' => 1,
            'contact_person_id' => null,
        ];
    }

}
