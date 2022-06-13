<?php

namespace App\Http\Controllers;

use App\Repository\CusRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = CusRepos::getAllCus();
        return view('AdminSite.customer.index',
            [
                'customer' => $customer
            ]);
    }

    public function show($Cus_id)
    {
        $customer = CusRepos::getCusById($Cus_id);
        return view('AdminSite.customer.show',
            [
                'customer' => $customer[0]
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
                'Cus_Email' => '',
                'Cus_DoB' => '',
                'Phone' => '',
                'Address' => ''
            ]]);
    }
    public function store(Request $request)
    {
        $this->formValidateCus($request)->validate();

        $customer = (object)[
            'Cus_Fullname' => $request->input('Cus_Fullname'),
            'Cus_Username' => $request->input('Cus_Username'),
            'Cus_Email' => $request->input('Cus_Email'),
            'Cus_DoB' => $request->input('Cus_DoB'),
            'Phone' => $request->input('Phone'),
            'Address' => $request->input('Address'),
        ];

        $newCus_Id = CusRepos::insert($customer);
        return redirect()
            ->route('GiftsShop.homepage')
            ->with('msg', 'New customer with id: '.$newCus_Id.' has been Update');

    }

    public function edit($Cus_id)
    {
        $customer = CusRepos::getCusById($Cus_id);

        return view(
            'AdminSite.customer.update',
            ["customer" => $customer[0]]);
    }

    public function update(Request $request, $Cus_id)
    {
        if ($Cus_id != $request->input('Cus_id')) {
            return redirect()->action('CustomerController@index');
        }

        $this->formValidateCus($request)->validate();

        $customer = (object)[
            'Cus_id' => $request->input('Cus_id'),
            'Cus_Fullname' => $request->input('Cus_Fullname'),
            'Cus_Username' => $request->input('Cus_Username'),
            'Cus_Email' => $request->input('Cus_Email'),
            'Cus_DoB' => $request->input('Cus_DoB'),
            'Phone' => $request->input('Phone'),
            'Address' => $request->input('Address'),
        ];
        CusRepos::update($customer);
        return redirect()->action('CustomerController@index');

    }

//    public function confirm($Cus_id){
//        $customer = CusRepos::getCusById($Cus_id);
//
//        return view('AdminSite.customer.confirm',
//            [
//                'customer' => $customer[0]
//            ]
//        );
//    }
//
//    public function destroy(Request $request, $Cus_id)
//    {
//        if ($request->input('Cus_id') != $Cus_id) {
//            return redirect()->action('CustomerController@index');
//        }
//
//        CusRepos::delete($Cus_id);
//
//        return redirect()->action('CustomerController@index');
//    }

    private function formValidateCus($request)
    {
        return Validator::make(
            $request->all(),
            [
                'Cus_Fullname' => ['required'],
                'Cus_Username' => ['required'],
                'Cus_Email' => ['required', 'email'],
                'Cus_DoB' => ['required', 'date'],
                'Phone' => ['required', 'max:10'],
                'Address' => ['required'],
            ],
        );

    }
}
