<?php

namespace App\Http\Controllers;

use App\Repository\AdmpageRepos;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        $adminpage = AdmPageRepos::getAllAdminpage();
        return view('AdminSite.adminPage.index',
            [
                'adminpage' => $adminpage,
            ]);
    }
}
