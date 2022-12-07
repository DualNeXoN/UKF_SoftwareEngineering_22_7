<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    protected $guarded = [];

    public function address() {
        return $this->hasOne(Address::class, 'id', 'address_id')->get()->first();
    }
    public function user(){
        return $this->hasOne(User::class,'id', 'general_user_id')->get()->first();
    }
    public function company(){
        return $this->belongsTo(Company::class,'id','contact_person_id')->get()->first();
    }

}
