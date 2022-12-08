<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermissionController;
use App\Models\Practice;



class AuthorizedWorker extends Controller
{
    public function getAllPractices(){
        if(PermissionController::checkPermision(array(3))){
            $practices = Practice::all();
            return view('workerpractices', compact('practices'));
        }return "U have not permission";
        //return view('availablepractices', compact('practices'));
    }
    public function show($id){
        return "funguje";
        //return view('workerpracticesshow')->with('practice',$practice);
    }
}
