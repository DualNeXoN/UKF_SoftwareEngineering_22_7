<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Helpers\Seed\SeedModeHelper;
use App\Helpers\Seed\SeedDefaultsHelper;

class UserSeeder extends Seeder {

    private static $table = "general_user";

    public function run() {
        $instance = new UserSeeder;

        DB::table(UserSeeder::$table)->insert($instance->defaults());

        if(SeedModeHelper::isBasicSeed()) return;

        $instance->factorySeedStudents((SeedModeHelper::isFastSeed() ? 20 : 400));
    }

    /**
     * Seeds table through UserFactory.
     */
    private function factorySeedStudents($count) {
        $defaultStudentRoleId = SeedDefaultsHelper::getStudentRoleId();
        User::factory($count)->create([
            'role_id' => $defaultStudentRoleId,
        ]);
    }

    /**
     * Gets defaults.
     */
    private function defaults() {
        return [
            'uid' => 100000,
            'password' => Hash::make('123'),
            'role_id' => SeedDefaultsHelper::getAdminRoleId(),
        ];
    }

}
