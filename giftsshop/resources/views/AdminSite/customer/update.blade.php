@extends('masters.adMaster')

@section('main')
  <div class="container">
    <div class="p-2 pt-md-5 pb-md-3 mx-auto">
      <h1 class="text-center">CUSTOMERS EDIT</h1>
      @include('partials.errors')
      <form action="{{route('customer.update', ['Cus_id' => $customer->Cus_id])}}" method="post">
        @csrf
        @include('AdminSite.customer.customerFields')
        <button type="submit" class="btn btn-dark">Submit</button>
        <a type="button" class="btn btn-danger" href="{{route('customer.index')}}">Back</a>
      </form>
    </div>
  </div>
@endsection
