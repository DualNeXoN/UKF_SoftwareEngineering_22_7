<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $fillable = [
        'uId',
        'roleId',
    ];

    protected $hidden = [
        'password',
    ];

}
