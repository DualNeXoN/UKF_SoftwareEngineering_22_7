<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgrammeSeeder extends Seeder {

    private static $tableStudyProgramme = 'study_programme';
    private static $tableDegree = 'degree';
    private static $tableCourse = 'course';

    public function run() {
        $instance = new StudyProgrammeSeeder;

        $data = $instance->loadJsonData('study_programmes.json');
        if($data == null) return;

        $instance->seedDegreesFromJsonObject($data);
        $instance->seedStudyProgrammesFromJsonObject($data);
        $instance->seedCoursesFromJsonObject($data);
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
     * Seeds degree table from JSON object.
     * @return void
     */
    private function seedDegreesFromJsonObject($data) {

        foreach($data as $degree) {

            DB::table(StudyProgrammeSeeder::$tableDegree)->insert([
                'name' => $degree['name'],
            ]);
        }

    }

    /**
     * Seeds study_programme table from JSON object.
     * @return void
     */
    private function seedStudyProgrammesFromJsonObject($data) {

        foreach($data as $degree) {
            foreach($degree['study_programmes'] as $studyProgramme) {
                DB::table(StudyProgrammeSeeder::$tableStudyProgramme)->insert([
                    'name' => $studyProgramme['name'],
                    'abbreviation' => $studyProgramme['abbreviation'],
                    'degree_id' => DB::table(StudyProgrammeSeeder::$tableDegree)->where('name', '=', $degree['name'])->get()->value('id'),
                ]);
            }
        }

    }

    /**
     * Seeds course table from JSON object.
     * @return void
     */
    private function seedCoursesFromJsonObject($data) {

        foreach($data as $degree) {
            foreach($degree['study_programmes'] as $studyProgramme) {
                foreach($studyProgramme['courses'] as $course) {
                    DB::table(StudyProgrammeSeeder::$tableCourse)->insert([
                        'name' => $course['name'],
                        'abbreviation' => $course['abbreviation'],
                        'study_programme_id' => DB::table(StudyProgrammeSeeder::$tableStudyProgramme)->where('abbreviation', '=', $studyProgramme['abbreviation'])->get()->value('id'),
                    ]);
                }
            }
        }

    }

}
