@extends('w301- web.GCH1001.web_project.resources.views.AdminSite.masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Category</h1>


        @include('w301- web.GCH1001.web_project.resources.views.AdminSite.partials.errors')

        <form action="{{route('category.update', ['Cate_id' => $category->Cate_id])}}" method="post">
            @csrf
            @include('AdminSite.category.cateFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
