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

    public static function getGiftsById($Gifts_id)
    {
        $sql = 'select p.* ';
        $sql .= 'from gifts as p ';
        $sql .= 'where p.Gifts_id = ? ';

        return DB::select ($sql, [$Gifts_id]);
    }
}
