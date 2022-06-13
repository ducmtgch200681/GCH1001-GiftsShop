<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController
{
    public function index(){
        $customer = CustomerRepos::getAllCus();
        return view('AdminSite.customer.index', [
            'customer' => $customer
        ]);
    }

    public function show($Cus_id){
        $customer = CustomerRepos::getCustomerById($Cus_id);
        return view('AdminSite.customer.show', [
            'customer' => $customer[0]
        ]);
    }

    public function edit($Cus_id){
        $customer = CustomerRepos::getCustomerById($Cus_id);
        return view('AdminSite.customer.update', [
            'customer' => $customer[0]
        ]);
    }

    public function update(Request $request, $Cus_id){
        if($Cus_id != $request->input('Cus_id')){
            return redirect()->action('CustomerController@index');
        }
        $this->formValidate($request)->validate();
        $customer = (object)[
            'Cus_id' => $request->input('Cus_id'),
            'Cus_Fullname' => $request->input('Cus_Fullname'),
            'Cus_Username' => $request->input('Cus_Username'),
            'Cus_password' => $request->input('Cus_password'),
            'Cus_gender' => $request->input('Cus_gender'),
            'Cus_phone' => $request->input('Cus_phone'),
            'Cus_DoB' => $request->input('Cus_DoB'),
            'Cus_add' => $request->input('Cus_add')
        ];
        CustomerRepos::update($customer);
        return redirect()->action('CustomerController@index')->with('msg', 'update successfully');
    }

    public function formValidate($request){
        return Validator::make(
            $request->all(),
            [
                'Cus_Fullname' => ['required'],
                'Cus_Username' => ['required'],
                'Cus_gender' => ['required'],
                'Cus_phone' => ['required'],
                'Cus_DoB' => ['required'],
                'Cus_add' => ['required']
            ]
        );
    }
}
