<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CusRepos
{
    public static function getAllCus()
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'order by c.Cus_id ';

        return DB::select ($sql);
    }

    public static function getCusById($Cus_id)
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'where c.Cus_id = ? ';

        return DB::select($sql, [$Cus_id]);
    }

    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'Cus_Username = ?, Cus_Email = ?, Phone = ?, Address= ?';
        $sql .= 'where Cus_id = ? ';

        DB::update($sql, [$customer->Cus_id, $customer->Cus_Usename, $customer->Cus_email, $customer->Phone, $customer->Address]);

    }

    public static function delete($Cus_id){
        $sql = 'delete from customer ';
        $sql .= 'where Cus_id = ? ';

        DB::delete($sql, [$Cus_id]);
    }


}
