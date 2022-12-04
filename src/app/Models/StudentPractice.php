<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentPractice extends Model {

    protected $table = 'student_professional_practice';

    protected $guarded = [];

    public function student() {
        return $this->hasOne(Person::class, 'id', 'student_id')->get()->first();
    }

    public function practice() {
        return $this->hasOne(Practice::class, 'id', 'professional_practice_id')->get()->first();
    }

    public function academicYear() {
        return $this->hasOne(AcademicYear::class, 'id', 'academic_year_id')->get()->first();
    }
    
}
