<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder {

    private static $table = 'contact';

    public function run() {
        $instance = new ContactSeeder;

        $data = $instance->loadJsonData('contacts.json');
        if($data == null) return;

        $instance->seedContactsFromJsonObject($data);
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
     * Seeds contact table from JSON object.
     * @return void
     */
    private function seedContactsFromJsonObject($data) {

        foreach($data as $contact) {
            DB::table(ContactSeeder::$table)->insert([
                'label' => $contact['label']
            ]);
        }

    }

}
