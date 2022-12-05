<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Person;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PracticeController;



class CompanyController extends Controller
{
    function companyProfile($id)
    {
        if (Session::has('user')) {
            if (Session::get('user')) {
                $company = Company::where('contact_person_id', $id)->first();
                return view('companies')->with('company', $company);;
            }
        }return 'niesi prihlaseny';
    }

     function getAllCompanies(){
       return Company::all();
    }
    function deleteCompany($id){
        $company = Company::where($id,'id')->delete();
        return back();
    }
    function deletePractice($id){
        $PracticeControllr = new PracticeController();
        $PracticeControllr->deletePractice($id);
        return back();
    }
    function updatePractice(Request $request){
        $request->validate([
            'label'=>'required',
            'studyProgram'=>'required',
            'contractType'=>'required'
        ]);
        $practiceController = new PracticeController();
        $practiceController->updatePractice($request);
        return back();
    }
    function addPractice(Request $request){
        $request->validate([
            'label'=>'required',
            'studyProgram'=>'required',
            'contractType'=>'required'
        ]);
        $practiceController = new PracticeController();
        $practiceController->createPractice($request,$this->getCompany(Session::get('user')->id)->id);

        return back();
    }
    function companyPractices(){
        if(Session::has('user')){

            $practices = $this->getCompany(Session::get('user')->id);
            $practices = $practices->professional_practice()->get();
            return view('companyperson')->with('practices',$practices);
        }
        else return 'Niesi Prihlaseny';
    }
     function getContactPerson($id)
    {
        return Person::where('id',$id)->first();
    }

}
