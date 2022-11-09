<?php

namespace App\Http\Controllers;
use Database\Seeders\PersonSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Person;
class UserController extends Controller
{
    public function storeUserData($id){
                $user = User::find($id);
                $person = Person::find($user->id);

                $result = array(
                    "id" => $person->id,
                    "name" => $person->name,
                    "surname" => $person->surname,
                    "birth" => $person->birth_date,
                    "uid" => $user->uid,
                    "password" => $user->password);
                return $result;
    }
}

