<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\StudentPractice;
use App\Models\Practice;
use Illuminate\Http\Request;


class PracticeController extends Controller {

    function getAllPractices() {
        $practices = Practice::all();
        //return $practices.$practices->contractType()->contract;
        return view('availablepractices', compact('practices'));
    }
    function getPractice($id) {
        $practice = Practice::where('id', $id)->first();
        return view('practiceprofilepage',compact('practice'));
    }

    function assignStudent(Request $request) {

        $practiceId = $request['practiceId'];
        $studentId = $request['studentId'];

        if($studentId == null) return back();

        StudentPractice::create([
            'student_id' => $studentId,
            'professional_practice_id' => $practiceId,
            'academic_year_id' => AcademicYear::where("year", "2022/2023")->get()->first()->id,
            'practice_state_id' => 1,
        ]);

        return back();
    }

}
