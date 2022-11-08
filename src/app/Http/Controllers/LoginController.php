<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



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
                    $request->session()->put('user',$user->uid);
                    return view('/home');
                }
            }
           return back()->with('fail','This user not exist.');
       }

        public function logout() {
            if(session()->has('user')){
              //session()->pull('user');
                session()->flush();
                return Redirect('login');
            }

    }
}
