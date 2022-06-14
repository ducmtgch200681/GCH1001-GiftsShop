@extends('masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Category</h1>


        @include('partials.error')

        <form action="{{route('category.update', ['Cate_id' => old('Cate_id')??  $category->Cate_id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('AdminSite.category.cateFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
