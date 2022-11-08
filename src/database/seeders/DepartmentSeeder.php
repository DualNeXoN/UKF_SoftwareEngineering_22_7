<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder {

    private static $table = 'department';

    public function run() {
        $instance = new DepartmentSeeder;

        $data = $instance->loadJsonData('departments.json');
        if($data == null) return;

        $instance->seedDepartmentsFromJsonObject($data);
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
     * Seeds department table from JSON object.
     * @return void
     */
    private function seedDepartmentsFromJsonObject($data) {

        foreach(array_keys($data) as $department) {
            DB::table(DepartmentSeeder::$table)->insert([
                'name' => $department
            ]);
        }

    }

}
