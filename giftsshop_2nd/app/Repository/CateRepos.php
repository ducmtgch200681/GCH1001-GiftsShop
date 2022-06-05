<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CateRepos
{
    public static function getAllCate()
    {
        $sql = 'select ca.* ';
        $sql .= 'from category as ca ';
        $sql .= 'order by ca.Cate_id ';

        return DB::select ($sql);
    }

    public static function getAllCateName()
    {
        $sql = 'select ca.* ';
        $sql .= 'from category as ca ';
        $sql .= 'order by ca.Cate_Name ';

        return DB::select ($sql);
    }

    public static function getCateById($Cate_id)
    {
        $sql = 'select ca.* ';
        $sql .= 'from category as ca ';
        $sql .= 'where ca.Cate_id = ? ';

        return DB::select($sql, [$Cate_id]);
    }

    public static function insert($category)
    {
        $sql = 'insert into category ';
        $sql .= '(Cate_Name, Cate_Description) ';
        $sql .= 'values (?, ?) ';

        $result =  DB::insert($sql, [$category->Cate_Name, $category->Cate_Description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($category)
    {
        $sql = 'update category ';
        $sql .= 'set Cate_Name = ?, Cate_Description = ? ';
        $sql .= 'where Cate_id = ? ';

        DB::update($sql, [$category->Cate_Name, $category->Cate_Description, $category->Cate_id]);
    }


    public static function delete($Cate_id){
        $sql = 'delete from category ';
        $sql .= 'where Cate_id = ? ';

        return DB::delete($sql, [$Cate_id]);
    }

}
