<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    use HasFactory;

    protected $table = 'company';

    protected $guarded = [];

    public function address() {
        return $this->hasOne(Address::class, 'id', 'address_id')->get()->first();
    }

    protected function person(){
        return $this->hasOne(Person::class, 'id','contact_person_id');
    }

    public function professional_practice(){
        return $this->hasMany(Practice::class,'company_id','id');
    }
}
