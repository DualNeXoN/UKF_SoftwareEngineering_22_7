<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request){



        $request->validate([
            'uid'=>'required|numeric|digits:6',
            'First_Name' => 'required',
            'Last_Name' => 'required',
        ]);

        $this->createUser($request);
        $this->createPerson($request);
            return back()->with('success','Registration was success');
    }
    public function createUser($data){
        $user = new User();
        $user->uid = $data['uid'];
        $user->password = Hash::make('123');
        $user->role_id = $data['role'];
        $user ->save();
    }
    public function createPerson($data){
        $person = new Person();
        $person->general_user_id = User::where('uid',$data['uid'])->first()->id;
        $person->name = $data['First_Name'];
        $person->surname = $data['Last_Name'];
        $person->birth_date = $data['birth'];
        $person->address_id = null;
        $person ->save();
    }
    public function hashPassword($password){
            return Hash::make($password);
    }
}
