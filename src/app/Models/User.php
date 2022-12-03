<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use HasFactory;

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }
    public function role(){
        return $this->hasOne('App\Models\Role');
    }

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
