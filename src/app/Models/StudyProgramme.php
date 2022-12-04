<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgramme extends Model {

    protected $table = 'study_programme';

    protected $guarded = [];

    public function degree() {
        return $this->hasOne(Degree::class, 'id', 'degree_id')->get()->first();
    }
    
}
