<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $admin = AdminRepos::getAllAdmin();
        return view('AdminSite.admin.index',
            [
                'admin' => $admin,
            ]);
    }

    public function show($Ad_id)
    {

        $admin = AdminRepos::getAdminById($Ad_id);
        return view('Adminsite.admin.show',
            [
                'admin' => $admin[0]
            ]
        );
    }

    public function edit($Ad_id){
        $admin = AdminRepos::getAdminById($Ad_id);
        return view('AdminSite.admin.update', ["admin" => $admin[0]]);
    }

    public function update(Request $request, $Ad_id){
        if($Ad_id != $request->input('Ad_id')){
            return redirect()->action('AdminController@index');
        }
        $this->formValidate($request)->validate();
        $admin = (object)[
            'Ad_id' => $request->input('Ad_id'),
            'Ad_Fullname' => $request->input('Ad_Fullname'),
            'Ad_Username' => $request->input('Ad_Username'),
            'Ad_password' => Hash::make(sha1($request->input('Ad_password'))),





            'Ad_Email' => $request->input('Ad_Email'),
            'Ad_DoB' => $request->input('Ad_DoB')
        ];
        AdminRepos::update($admin);
        return redirect()->action('AdminController@index')
            ->with('msg', 'update successfully');



    }


    public function formValidate($request){
        return Validator::make(
            $request->all(),
            [
                'Ad_Fullname' => ['required'],
                'Ad_Username' => ['required', 'ends-with:T,D,H,I,O'],
                'Ad_Email' => ['required', 'email:rfc,dns'],
                'Ad_DoB' => ['required', 'before:2004-01-01'],
                'Ad_password' => ['required'
//                    ,
//                        function(Request $request, $hashedPassword, $fail){
//                            $hashedPassword = Hash::make(sha1($request->input('Ad_password')));
//                            if(Hash::check('Ad_password', $hashedPassword)){
//                                //$hashedPassword = true;
//                            }
//                            else{
//                                //$hashedPassword = false;
//                                $fail('Wrong password');
//                            }
//                        }

                
                    ]
            ]
        );
    }

}
