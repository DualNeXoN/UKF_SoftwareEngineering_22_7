<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $table = 'country';

    protected $guarded = [];

    public function towns() {
        return $this->hasMany(Town::class)->get();
    }
}
