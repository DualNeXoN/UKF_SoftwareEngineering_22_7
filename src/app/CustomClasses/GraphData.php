<?php

namespace App\CustomClasses;
use App\Models\AcademicYear;
use App\Models\StudentPractice;

class GraphData
{
    public function assignedPractices(){
        // Assigned students counted by years

        $data = ['academicYears' =>
                    AcademicYear::get(['year'])->pluck('year'),
                'assignedStudents' => [
                    StudentPractice::where('academic_year_id', 1)->count(),
                    StudentPractice::where('academic_year_id', 2)->count(),
                    StudentPractice::where('academic_year_id', 3)->count(),
                    StudentPractice::where('academic_year_id', 4)->count()]
        ];

        return json_encode($data);

    }
}
