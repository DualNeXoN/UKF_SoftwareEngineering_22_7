<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder {

    private static $table = 'contract_type';

    public function run() {
        $instance = new ContractTypeSeeder;

        $data = $instance->loadJsonData('contract_types.json');
        if($data == null) return;

        $instance->seedContractTypesFromJsonObject($data);
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
     * Seeds contract_type table from JSON object.
     * @return void
     */
    private function seedContractTypesFromJsonObject($data) {

        foreach(array_keys($data) as $type) {
            DB::table(ContractTypeSeeder::$table)->insert([
                'contract' => $type
            ]);
        }

    }

}
