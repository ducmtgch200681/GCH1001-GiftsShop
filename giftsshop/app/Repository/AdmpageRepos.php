<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdmpageRepos
{
    public static function getAllAdminpage() {
        $sql = 'select a.* ';
        $sql .= 'from adminpage as a ';
//        $sql .= 'order by c.Cate_Name';

        return DB::select ($sql);
    }
}
