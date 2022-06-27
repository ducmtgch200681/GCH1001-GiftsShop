@extends('masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('AdminSite.gifts.detail')

        <form action="{{route('product.destroy', ['Gifts_id' =>$product->Gifts_id])}}" method="post">
            @csrf
            <input type="hidden" name="Gifts_id" value="{{$product->Gifts_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('product.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
