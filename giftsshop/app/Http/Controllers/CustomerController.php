<?php

namespace App\Http\Controllers;

use App\Repository\CusRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController
{
    public function index(){
        $customer = CusRepos::getAllCus();
        return view('AdminSite.customer.index', [
            'customer' => $customer
        ]);
    }

    public function show($Cus_id){
        $customer = CusRepos::getCusById($Cus_id);
        return view('AdminSite.customer.show', [
            'customer' => $customer[0]
        ]);
    }

    public function edit($Cus_id){
        $customer = CusRepos::getCusById($Cus_id);
        return view('AdminSite.customer.update', [
            'customer' => $customer[0]
        ]);
    }

    public function update(Request $request, $Cus_id){
        if($Cus_id != $request->input('Cus_id')){
            return redirect()->action('CustomerController@index');
        }
        $this->formValidateCus($request)->validate();
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
        CusRepos::update($customer);
        return redirect()->action('CustomerController@index')->with('msg', 'update successfully');
    }

    public function formValidateCus($request){
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

    public function loginCus()
    {
        return view('GiftsShop.Log&Reg.login',
            ['customer' => (object)[
                'Cus_Username' => '',
                'Cus_Password' => ''
            ]]);
    }

    public function registerCus()
    {
        return view(
            'GiftsShop.Log&Reg.reg',
            ['customer' => (object)[
                'Cus_id' => '',
                'Cus_Fullname' => '',
                'Cus_Username' => '',
                'Cus_password' => '',
                'Cus_gender' => '',
                'Cus_phone' => '',
                'Cus_DoB' => '',
                'Cus_add' => ''
            ]]);
    }

    public function store(Request $request)
    {
        $this->formValidateCus($request)->validate();
//        dd($request->all());
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


        return redirect()
            ->action('MainpageController@index');

    }
}
