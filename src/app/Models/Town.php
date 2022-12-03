<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {

    protected $table = 'town';

    protected $guarded = [];

    public function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id')->get()->first();
    }

    public function addresses() {
        return $this->hasMany(Address::class)->get();
    }

}
