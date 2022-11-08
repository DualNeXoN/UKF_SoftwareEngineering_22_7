<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {

    private static $tableRole = 'role';
    private static $tablePermission = 'permission';
    private static $tableRoleHasPermission = 'role_has_permission';

    public function run() {
        $instance = new RoleSeeder;

        $data = $instance->loadJsonData('roles.json');
        if($data == null) return;

        $instance->seedRolesFromJsonObject($data);
        $instance->seedPermissionsFromJsonObject($data);
        $instance->seedPermissionsPerRoleFromJsonObject($data);
    }

    /**
     * Loads Json data and returns it in string format.
     * @return string
     */
    private function loadJsonData($file = null) {

        // Checks for valid parameters and if JSON file exists
        if(($file == null) || !file_exists($fullPath = storage_path('seeders/' . $file))) return;

        return json_decode(file_get_contents($fullPath), true);
    }

    /**
     * Seeds role table from JSON object.
     * @return void
     */
    private function seedRolesFromJsonObject($data) {

        foreach(array_keys($data) as $role) {
            DB::table(RoleSeeder::$tableRole)->insert([
                'name' => $role
            ]);
        }

    }

    /**
     * Seeds permission table from JSON object.
     * @return void
     */
    private function seedPermissionsFromJsonObject($data) {

        foreach(array_keys($data) as $role) {
            foreach($data[$role] as $permission) {
                DB::table(RoleSeeder::$tablePermission)->updateOrInsert([
                    'value' => $permission
                ]);
            }
        }

    }

    /**
     * Seeds role_has_permission table from JSON object.
     * @return void
     */
    private function seedPermissionsPerRoleFromJsonObject($data) {

        foreach(array_keys($data) as $role) {
            foreach($data[$role] as $permission) {
                DB::table(RoleSeeder::$tableRoleHasPermission)->insert([
                    'role_id' => DB::table(RoleSeeder::$tableRole)->where('name', $role)->value('id'),
                    'permission_value' => $permission
                ]);
            }
        }

    }
}
