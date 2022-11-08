<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticeStateSeeder extends Seeder {

    private static $table = 'practice_state';

    public function run() {
        $instance = new PracticeStateSeeder;

        $data = $instance->loadJsonData('practice_states.json');
        if($data == null) return;

        $instance->seedPracticeStatesFromJsonObject($data);
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
     * Seeds practice_state table from JSON object.
     * @return void
     */
    private function seedPracticeStatesFromJsonObject($data) {

        foreach(array_keys($data) as $state) {
            DB::table(PracticeStateSeeder::$table)->insert([
                'state' => $state
            ]);
        }

    }

}
