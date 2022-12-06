<?php

namespace App\Http\Controllers;
use App\Models\AcademicYear;
use App\Models\StudentPractice;
use App\Models\Practice;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
    function deletePractice($id){
        Practice::where('id',$id)->first()->delete();
    }
    function updatePractice($request){
        $practice = Practice::where('id',$request->id)
            ->first();
        $practice->update(
                ['label'=> $request->label,
                'description'=> $request->description,
                'contract_type_id'=> $request->contractType,
                'study_programme_id'=> $request->studyProgram,
                'updated_at'=> Carbon::now()]);
    }
    function createPractice($request,$company_id){
        $practice = new Practice();
        $practice->company_id = $company_id;
        $practice->label = $request->label;
        $practice->description = $request->description;
        $practice->contract_type_id = $request->contractType;
        $practice->study_programme_id = $request->studyProgram;
        $practice->created_at = Carbon::now();
        $practice->save();
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
