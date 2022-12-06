<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PermissionController extends Controller
{
    public static function checkPermision($roles){
        if(Session::has('user')){
            $role_id = Session::get('user')->user()->role_id;
                foreach ($roles as $item) {
                    if($item == $role_id){
                        return true;
                    }
            } return false;
        }return "Nie ste prihlásený";
    }
}
