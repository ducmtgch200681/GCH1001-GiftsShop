<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Utils;

class CategoryRepos
{
    public static function getAllCate() {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'order by c.Cate_Name';

        return DB::select ($sql);
    }
//
//    public static function getAllCateName()
//    {
//        $sql = 'select ca.* ';
//        $sql .= 'from category as ca ';
//        $sql .= 'order by ca.Cate_Name ';
//
//        return DB::select ($sql);
//    }

    public static function getCateById($Cate_id)
    {
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'where c.Cate_id = ? ';

        return DB::select($sql, [$Cate_id]);
    }

//    public static function getCatenamebyGiftsID($Gifts_id)
//    {
//        $sql = 'select c.* ';
//        $sql .= 'from category as c ';
//        $sql .= 'join gifts as p on c.Cate_Id = p.Cate_id ';
//        $sql .= 'where p.Gifts_id = ? ';
//
//        return DB::select($sql, [$Gifts_id]);
//    }

    public static function insert($category)
    {
        $sql = 'insert into category ';
        $sql .= '(Cate_Name, Cate_Description, Cate_image) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$category->Cate_Name, $category->Cate_Description, $category->Cate_image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($id, $category)
    {
        return DB::table('category')->where('Cate_id', $id)->update($category);
    }

    public static function delete($Cate_id){
        $sql = 'delete from category ';
        $sql .= 'where Cate_id = ? ';

        return DB::delete($sql, [$Cate_id]);
    }
}
