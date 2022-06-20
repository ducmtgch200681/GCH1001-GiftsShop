@extends('masters.adMaster')

@section('main')
    <div class="container">
        <br>
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <h1 class="display-4">Update Gifts</h1>
        </div>
        @include('partials.errors')

        <form action="{{route('product.update', ['Gifts_id'=> $product->Gifts_id])}}" method="post" enctype= "multipart/form-data">
            @csrf
            @include('AdminSite.gifts.giftsFieldsFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
