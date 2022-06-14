<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gift;
use App\Repository\CategoryRepos;
use App\Repository\GiftsRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GiftsController extends Controller
{
    public function index()
    {
        $product = GiftsRepos::getAllGifts();
        return view('AdminSite.gifts.index',
            [
                'product' => $product
            ]);
    }


    public function show($Gifts_id)
    {

        $product = GiftsRepos::getGiftsByID($Gifts_id);
        return view('AdminSite.gifts.show',
            [
                'product' => $product[0],
            ]
        );
    }

    public function create()
    {
        $category = CategoryRepos::getAllCate();

        return view(
            'AdminSite.gifts.new',
            ["product" => (object)[
                'Gifts_id' => '',
                'Gifts_Name' => '',
                'Cate_id'=> '',
                'Price' => '',
                'Brand' => '',
                'Gifts_Description' => '',
                'Gifts_Images' => '',
            ],
                "category" =>$category
            ]);

    }


    public function store(Request $request)
    {
//        dd($request->all());
        $this->formValidatePro($request)->validate();
//        $path = $request->file('Gifts_Images')->store('public/Images');
        $file = $request->file('Gifts_Images');
        $fileName = $file->getClientOriginalName();
        $this->moveFileToFolder($file, $fileName);

        $product = (object)[
            'Gifts_Name' => $request->input('Gifts_Name'),
            'Cate_id' => $request->input('Cate_id'),
            'Price' => $request->input('Price'),
            'Brand' => $request->input('Brand'),
            'Gifts_Description' => $request->input('Gifts_Description'),
            'Gifts_Images' => $fileName,
        ];

        $newGift_id = GiftsRepos::insert($product);
        return redirect()
            ->action('GiftsController@index')
            ->with('msg', 'New Gift with id: ' . $newGift_id . ' has been inserted');

    }

    public function edit($Gift_id)
    {
        $product = GiftsRepos::getGiftsByID($Gift_id);
        $category = Category::all();

        return view(
            'AdminSite.gifts.update',
            ["product" => $product[0], "category" => $category]);
    }

    public function update(Request $request, $Gifts_id)
    {
        if ($Gifts_id != $request->input('Gifts_id')) {
            return redirect()->action('GiftsController@index');
        }

        $this->formValidatePro($request)->validate();

        $file = $request->file('Gifts_Images');
        $fileName = $file->getClientOriginalName();
        $this->moveFileToFolder($file, $fileName);
        $product = [
            'Gifts_Name' => $request->input('Gifts_Name'),
            'Cate_id' => $request->input('Cate_id'),
            'Price' => $request->input('Price'),
            'Brand' => $request->input('Brand'),
            'Gifts_Description' => $request->input('Gifts_Description'),
            'Gifts_Images' => $fileName,
        ];
        GiftsRepos::update($Gifts_id, $product);

        return redirect()->action('GiftsController@index')
            ->with('msg', 'Update Successfully');

    }

    public function confirm($Gift_id){
        $deleteProduct = GiftsRepos::getGiftsByID($Gift_id);

        return view('AdminSite.gifts.confirm',
            [
                'product' => $deleteProduct[0]
            ]
        );
    }

    public function destroy(Request $request, $Gifts_id)
    {


//        GiftsRepos::delete($Gifts_id);
//
//        return redirect()->action('GiftsController@index');
        if ($request->input('Gifts_id') != $Gifts_id) {
            //id in query string must match id in hidden input
            return redirect()->action('GiftsController@index');
        }
        GiftsRepos::delete($Gifts_id);


        return redirect()->action('GiftsController@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidatePro(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Gifts_Name' => ['required'],
                'Cate_id' => ['required'],
                'Price' => ['required'],
                'Brand' => ['required'],
                'Gifts_Description' => ['required'],
                'Gifts_Images' => ['required'],
            ]
        );
    }


    private function moveFileToFolder($file, $fileName, $folder = 'image')
    {
        $file->move(public_path($folder), $fileName);
    }

    private function removeFileFromFolder($path)
    {
        unlink($path);
    }
}
