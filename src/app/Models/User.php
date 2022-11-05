<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $table = 'general_user';

    protected $fillable = [
        'uid',
        'password',
        'role_id',
    ];

    protected $hidden = [
        'password',
    ];

}
