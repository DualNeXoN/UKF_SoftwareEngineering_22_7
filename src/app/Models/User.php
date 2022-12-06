<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use HasFactory;

    protected $table = 'general_user';

    protected $fillable = [
        'uid',
        'password',
        'role_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function person() {
        return $this->belongsTo(Person::class,'id','general_user_id')->get()->first();
    }

    public function role() {
        return $this->hasOne(Role::class, 'id', 'role_id')->get()->first();
    }

}
