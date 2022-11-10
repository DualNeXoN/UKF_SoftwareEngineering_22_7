<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder {

    private static $table = 'academic_year';

    public function run() {
        $instance = new AcademicYearSeeder;

        $data = $instance->loadJsonData('academic_years.json');
        if($data == null) return;

        $instance->seedAcademicYearsFromJsonObject($data);
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
     * Seeds academic_year table from JSON object.
     * @return void
     */
    private function seedAcademicYearsFromJsonObject($data) {

        foreach(array_keys($data) as $year) {
            DB::table(AcademicYearSeeder::$table)->insert([
                'year' => $year
            ]);
        }

    }

}
