<?php

namespace App\Http\Controllers;
use Database\Seeders\PersonSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
class UserController extends Controller
{
    public function storeUserData($user){

                $person = Person::where('general_user_id',$user->id)->first();
                $result = array(
                    "uid" => $user->uid,
                    "name" => $person->name,
                    "surname" => $person->surname,
                    "birth" => $person->birth_date,
                    "password" => $user->password);
                return $result;
    }
}

