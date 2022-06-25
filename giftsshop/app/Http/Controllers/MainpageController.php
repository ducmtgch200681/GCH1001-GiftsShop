<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use App\Repository\MainpageRepos;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index(){
        $category = CateRepos::getAllCate();
        $product = MainpageRepos::getAllGift();
        return view('GiftsShop.Mainpage.homepage',
            [
                'category' => $category,
                'product' => $product,
            ]);
    }

    public function show($Gifts_id){
        $category = CateRepos::getCatenamebyGiftsID($Gifts_id);
        $product = MainpageRepos::getGiftsById($Gifts_id);
        return view('GiftsShop.Mainpage.show', [
            'category' => $category[0],
            'product' => $product[0],
        ]);
    }

    public function about(){
        return view('GiftsShop.Mainpage.about', [

        ]);
    }

    public function contact(){
        return view('GiftsShop.Mainpage.contact', [

        ]);
    }

    public function address(){
        return view('GiftsShop.Mainpage.address', [

        ]);
    }
}
