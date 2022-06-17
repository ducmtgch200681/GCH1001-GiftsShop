<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class MainpageRepos
{
    public static function getAllGift()
    {
        $sql = 'select p.* ';
        $sql .= 'from gifts as p ';
        $sql .= 'order by p.Gifts_Name ';

        return DB::select ($sql);
    }
}
