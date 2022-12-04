<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Practice extends Model {

    protected $table = 'professional_practice';

    protected $guarded = [];

    public function company() {
        return $this->hasOne(Company::class, 'id', 'company_id')->get()->first();
    }

    public function studyProgramme() {
        return $this->hasOne(StudyProgramme::class, 'id', 'study_programme_id')->get()->first();
    }

    public function contractType() {
        return $this->hasOne(Contract::class, 'id', 'contract_type_id')->get()->first();
    }

    public function isAvailable() {
        $result = DB::table('student_professional_practice')->where('professional_practice_id', $this->id)->get();
        return count($result) == 0 ? true : false;
    }

    public function isUserAssigned($id = null) {
        if($id == null) return false;
        $result = DB::table('student_professional_practice')->where('professional_practice_id', $this->id)->get()->value('student_id');
        return $result == $id;
    }
    
}
