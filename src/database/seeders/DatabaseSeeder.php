<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Helpers\Seed\SeedModeHelper;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call($this->seedClasses());
    }

    /**
     * Array of enabled seed classes
     */
    private function seedClasses() {
        return [
            CountrySeeder::class,
            TownSeeder::class,
            AddressSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            ContactSeeder::class,
            PersonSeeder::class,
            AcademicYearSeeder::class,
            PracticeStateSeeder::class,
            ContractTypeSeeder::class,
            CompanySeeder::class,
            StudyProgrammeSeeder::class,
        ];
    }

}
