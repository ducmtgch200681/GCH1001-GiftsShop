@extends('masters.adMaster')

@section('main')
    <div class="container">
        <br>
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <h1 class="display-4">New Category</h1>
        </div>
        @include('partials.errors')
        <!-- To send file, please add enctype="multipart/form-data" to the tag form -->
        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('AdminSite.category.cateFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
