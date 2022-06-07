@extends('masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('AdminSite.category.detail')

        <form action="{{route('category.destroy', ['Cate_id' =>$category->Cate_id])}}" method="post">
            @csrf
            <input type="hidden" name="Cate_id" value="{{$category->Cate_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
