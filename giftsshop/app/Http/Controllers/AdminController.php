<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
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


    public function store(Request $request)
    {
        $this->formValidateAd($request)->validate();

        $admin = (object)[
            'Ad_Fullname' => $request->input('Ad_Fullname'),
            'Ad_Username' => $request->input('Ad_Username'),
            'Ad_password' => $request->input('Ad_password'),
            'Ad_Email' => $request->input('Ad_Email'),
            'Ad_DoB' => $request->input('Ad_DoB'),

        ];

        $newAd_Id = AdminRepos::insert($admin);
        return redirect()
            ->action('AdminController@index')
            ->with('msg', 'New book with id: ' . $newAd_Id . ' has been inserted');
    }

    private function formValidateAd(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Ad_Fullname' => ['required'],
                'Ad_Email' => ['required', 'email'],
                'Ad_DoB' => ['required', 'date'],
                'Ad_password' => ['required',
                    function ($attribute, $value, $fail) use ($request) {
                        $username = $request->input('Ad_Username');
                        $account = AdminRepos::getAllAdmin();
                        $n=0;
                        for ($i = 0; $i < count($account); $i++) {
                            if ($username == $account[$i]->Ad_Username) {
                                $value = sha1($request->input('Ad_password'));
                                if ($value != $account[$i]->Ad_password) {
                                    $n++;
                                    break;
                                }
                            }
                        }
                        if($n!=0)
                        {
                            $fail('Password is incorrect');
                        }
                    }],
            ]
        );
    }

}
