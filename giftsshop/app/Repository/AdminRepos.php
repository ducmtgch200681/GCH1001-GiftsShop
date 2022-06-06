<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin()
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.Ad_Fullname ';

        return DB::select ($sql);
     }

    public static function getAdminById($Ad_id)
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.Ad_id = ? ';

        return DB::select($sql, [$Ad_id]);
    }

    public static function update($admin){
        $sql = 'update admin ';
        $sql .= 'set Ad_Fullname = ?, Ad_Username = ?, Ad_password = ?, Ad_Email = ?, Ad_DoB = ? ';
        $sql .= 'where Ad_id = ? ';

        DB::update($sql, [$admin->Ad_Fullname, $admin->Ad_Username,
            $admin->Ad_password, $admin->Ad_Email, $admin->Ad_DoB, $admin->Ad_id]);

    }

}
