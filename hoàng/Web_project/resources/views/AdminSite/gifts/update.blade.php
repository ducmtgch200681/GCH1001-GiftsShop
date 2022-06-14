@extends('masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Product</h1>


        @include('partials.error')
        <form action="{{route('product.update', ['Gifts_id' => $product->Gifts_id])}}" method="post" enctype= "multipart/form-data" >
            @csrf
            @include('AdminSite.gifts.proFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
