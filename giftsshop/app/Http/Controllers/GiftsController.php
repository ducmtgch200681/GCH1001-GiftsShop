<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use App\Repository\GiftsRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GiftsController extends Controller
{
    public function index()
    {
        $product = GiftsRepos::getAllProductWithCateName();
        return view('electronics.gifts.index',
            [
                'product' => $product
            ]);
    }

    public function show($Elec_id)
    {

        $product = GiftsRepos::getElecByID($Elec_id);
        return view('AdminSite.gifts.show',
            [
                'product' => $product[0]
            ]
        );
    }

    public function create()
    {
        $category = CateRepos::getAllCate();
//        $product = ElecRepos::getAllElec();
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
        $this->formValidatePro($request)->validate();
        $path = $request->file('Elec_Images')->store('public');

        $product = (object)[
            'Elec_Name' => $request->input('Elec_Name'),
            'Cate_id' => $request->input('Cate_id'),
            'Price' => $request->input('Price'),
            'Brand' => $request->input('Brand'),
            'Elec_Description' => $request->input('Elec_Description'),
            'Elec_Images' => substr($path, 7)
        ];

        $newElec_id = GiftsRepos::insert($product);
        return redirect()
            ->action('ElectronicsControllerWithRepos@index')
            ->with('msg', 'New Electric with id: ' . $newElec_id . ' has been inserted');

    }

    public function edit($Elec_id)
    {
        $product = GiftsRepos::getGiftsByID($Elec_id);
        $category = CateRepos::getAllCateName();

        return view(
            'electronics.product.update',
            ["product" => $product[0], "category" => $category]);
    }

    public function update(Request $request, $Elec_id)
    {
        if ($Elec_id != $request->input('Elec_id')) {
            return redirect()->action('ElectronicsControllerWithRepos@index');
        }

        $this->formValidatePro($request)->validate();

        $path = $request->file('Elec_Images')->store('public');

        $product = (object)[
            'Elec_id' => $request->input('Elec_id'),
            'Elec_Name' => $request->input('Elec_Name'),
            'Cate_id' => $request->input('Cate_id'),
            'Price' => $request->input('Price'),
            'Brand' => $request->input('Brand'),
            'Elec_Description' => $request->input('Elec_Description'),
            'Elec_Images' => substr($path, 7)
        ];
        GiftsRepos::update($product);

        return redirect()->action('ElectronicsControllerWithRepos@index');

    }

    public function confirm($Elec_id){
        $product = GiftsRepos::getElecByID($Elec_id);

        return view('electronics.product.confirm',
            [
                'product' => $product[0]
            ]
        );
    }

    public function destroy(Request $request, $Elec_id)
    {


        GiftsRepos::delete($Elec_id);

        return redirect()->action('ElectronicsControllerWithRepos@index');
    }

    private function formValidatePro(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Elec_Name' => ['required'],
                'Price' => ['required'],
                'Brand' => ['required'],
                'Elec_Description' => ['required'],
                'Elec_Images' => ['required'],
            ]
        );
    }
}
