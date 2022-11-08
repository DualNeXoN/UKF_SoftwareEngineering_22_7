<?php

namespace App\Helpers\Seed;

use DB;

class SeedDefaultsHelper {

    public static function getAdminRoleId() {
        return DB::table('role')->select('id')->where('name', '=', config('seeding.admin_role'))->value('id');
    }

    public static function getStudentRoleId() {
        return DB::table('role')->select('id')->where('name', '=', config('seeding.student_role'))->value('id');
    }

}