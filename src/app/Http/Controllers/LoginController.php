<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;

class LoginController extends Controller
{
       public function login()
       {
           return view('/login');
       }
        public function dashboard(){
           return view('dashboard');
        }

       public function loginUser(Request $request)
       {
            $request->validate([
                'uid'=>'required',
                'password'=>'required'
            ]);

            $user = User::where('uid','=',$request->uid)->first();

            if($user){
                if(Hash::check($request->getPassword(), $user->password));
                {
                    if(session()->has('user')){
                        return "U cant log in because another user id logged";
                    }else{
                        $result = $this->userDataStore($user->id);
                        session()->put('user',$result);
                        return session()->get('user');
                    }
                }
            }
           return back()->with('fail','This user not exist.');
       }
       public function userDataStore($data)
       {
           return (new UserController())->storeUserData($data);
       }

        public function logout() {
            if(session()->has('user')){
              //session()->pull('user');
                session()->flush();
                return Redirect('/');
            }

    }
}
