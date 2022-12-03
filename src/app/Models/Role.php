<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    protected $guarded = [];

    const ADMIN_ROLE_NAME = 'Admin';
    const STUDENT_ROLE_NAME = 'Student';

    protected function user(){
        $this->hasMany('App\Models\User');
    }
}
