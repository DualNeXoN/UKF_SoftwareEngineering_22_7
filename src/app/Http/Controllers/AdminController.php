<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;


class AdminController extends Controller
{

    //get list of all users
    function getUsers(){
            $data = (new UserController())->getAllUsers();
            return view('adminusers',compact('data'));
    }

    //remove user from database
    function removeUser($id){
     $person = Person::where('id',$id)->first();
     $general_user = User::where('id',$person->general_user_id)->first();
     $company = Company::where();
     //$report = $person->name." ".$person->surname." ".$general_user->id;
     if($person == null || $general_user == null){
          return "null";
      }else {

         $person->delete();
         $general_user->delete();
     }
     return back();
    }

    //user password hash reset
    function resetPassword(){
        $id = Request::input('id');
        $hashed_random_password = Hash::make(Str::random(12));
        User::where('id',$id)->first()->update(['password'=>$hashed_random_password]);
        return back();

    }

}
