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
            'uid'=>'required',
            'pass'=>'required',
            'confpass'=>'required'
        ]);

        if($request['pass'] == $request['confpass']){
            $request['pass'] = $this->hashPassword($request['pass']);
        }
        if(User::where('uid',$request['uid'])->first()){
            return back()->with('fail','This user exist.');
        }

        $this->createUser($request);
        $this->createPerson($request);

    }
    public function createUser($data){
        $user = new User();
        $user->uid = $data['uid'];
        $user->password = $data['pass'];
        $user->role_id = 4;
        $user ->save();
    }
    public function createPerson($data){
        $person = new Person();
        $person->general_user_id = User::where('uid',$data['uid'])->first()->id;
        $person->name = $data['name'];
        $person->surname = $data['surname'];
        $person->birth_date = null;
        $person->address_id = null;
        $person ->save();
    }
    public function hashPassword($password){
            return Hash::make($password);
    }
}
