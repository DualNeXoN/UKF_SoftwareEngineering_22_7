<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    protected $guarded = [];

    protected function address() {
        return $this->hasOne(Address::class, 'id', 'address_id')->get()->first();
    }
}
