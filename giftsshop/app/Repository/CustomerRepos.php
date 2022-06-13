<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCus(){
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'order by c.Cus_id ';

        return DB::select($sql);
    }

    public static function getCustomerById($Cus_id){
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'where c.Cus_id = ? ';

        return DB::select($sql, [$Cus_id]);
    }

    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'set Cus_Fullname = ?, Cus_Username = ?, Cus_gender = ?, Cus_password = ?, Cus_phone = ?, Cus_DoB = ?, Cus_add = ? ';
        $sql .= 'where Cus_id = ? ';

        return DB::select($sql, [$customer->Cus_Fullname, $customer->Cus_Username, $customer->Cus_gender, $customer->Cus_password,
            $customer->Cus_phone, $customer->Cus_DoB, $customer->Cus_add, $customer->Cus_id]);
    }
}
