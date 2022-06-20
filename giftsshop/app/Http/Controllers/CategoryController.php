<?php

namespace App\Http\Controllers;

use App\Repository\CateRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $category = CateRepos::getAllCate();
        return view('AdminSite.category.index',
            [
                'category' => $category,
            ]);
    }
    public function show($Cate_id)
    {
        $category = CateRepos::getCateById($Cate_id);

        return view('AdminSite.category.show',
            [
                'category' => $category[0]
            ]
        );
    }
    public function create()
    {
        return view(
            'AdminSite.category.new',
            ["category" => (object)[
                'Cate_id' => '',
                'Cate_Name' => '',
                'Cate_Description' => '',
                'Cate_image' => ''

            ]]);

    }
    public function store(Request $request)
    {
        $this->formValidate($request)->validate();

//        $path = $request->file('Cate_image')->store('public/Images');
//        $file = $request->file('Cate_image');

//        $fileName = $file->getClientOriginalName();
//        $this->moveFileToFolder($file, $fileName);

        $category = (object)[
            'Cate_Name' => $request->input('Cate_Name'),
            'Cate_Description' => $request->input('Cate_Description'),
            'Cate_image' => $request->input('Cate_image'),
        ];

        $newCate_id = CateRepos::insert($category);
        return redirect()
            ->action('CategoryController@index')
            ->with('msg', 'New book with id: '.$newCate_id.' has been inserted');
    }

    public function edit($Cate_id)
    {
        $category = CateRepos::getCateById($Cate_id); //this is always an array


        return view(
            'AdminSite.category.update',
            ["category" => $category[0]]);
    }

    public function update(Request $request, $Cate_id)
    {
        if ($Cate_id != $request->input('Cate_id')) {
            return redirect()->action('CategoryController@index');
        }

        $this->formValidate($request)->validate(); //shortcut


        $path = $request->file('Cate_image')->store('public/Images');
//        $array = explode('/', $path);
//        $path = end($array);
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($request->input('Cate_id'));
        $file = $request->file('Cate_image');

        $fileName = $file->getClientOriginalName();
        $this->moveFileToFolder($file, $fileName);
        $category = [
            'Cate_id' => $request->input('Cate_id'),
            'Cate_Name' => $request->input('Cate_Name'),
            'Cate_Description' => $request->input('Cate_Description'),
            'Cate_image' => $fileName,
        ];
        CateRepos::update($Cate_id, $category);


        return redirect()->action('CategoryController@index')
            ->with('msg', 'Update Successfully');
    }

    public function confirm($Cate_id){
        $category = CateRepos::getCateById($Cate_id); //this is always an array

        return view('AdminSite.category.confirm',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroy(Request $request, $Cate_id)
    {
        if ($request->input('Cate_id') != $Cate_id) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryController@index');
        }


        CateRepos::delete($Cate_id);

//        if (CateRepos::delete($Cate_id) === false)
//            return redirect()->action('CategoryController@index')
//                ->with('err', 'Please delete all the gifts before deleteing this category');

        return redirect()->action('CategoryController@index')
            ->with('msg', 'Delete Successfully');
    }
    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'Cate_Name' => ['required'],
                'Cate_Description' => ['required'],
                'Cate_image' => ['required']
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
