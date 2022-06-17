<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use App\Repository\MainpageRepos;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index()
    {
        $category = CateRepos::getAllCate();
        $product = MainpageRepos::getAllGift();
        return view('GiftsShop.Mainpage.homepage',
            [
                'category' => $category,
                'product' => $product,
            ]);
    }

}
