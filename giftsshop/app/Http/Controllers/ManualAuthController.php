<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthController extends Controller
{
    public function Authlogin(){
        $Ad_id = Session::get('Ad_id');
        if($Ad_id){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('auth.ask') ->send();
        }
    }

    public function ask(){
        return view('AdminSite.manualAuth.login');
    }

    public function signin(Request $request)
    {

        $Ad_Username = $request->input('Ad_Username');
        $Ad_password = sha1($request->input('Ad_password'));

        $account = AdminRepos::getAllAdmin();

        $this->formValidate($request)->validate();

        for ($i = 0; $i < count($account); $i++) {
            if ($Ad_Username == $account[$i]->Ad_Username && $Ad_password == $account[$i]->Ad_password) {
                break;
            }
        }
        if ($i < count($account)) {
            Session::put('Ad_Username', $request->input('Ad_Username'));
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('auth.ask');
        }
    }


    public function signout(){
        if (Session::has('Ad_Username')){
            Session::forget('Ad_Username');
        }
        return redirect()->action('ManualAuthController@ask');
    }


    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Ad_Username' => ['required'],
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
