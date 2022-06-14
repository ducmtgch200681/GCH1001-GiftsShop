@extends('masters.adMaster')

@section('main')
  <div class="container">
    <div class="p-2 pt-md-5 pb-md-3 mx-auto">
      <h1 class="text-center">CUSTOMERS INFORMATION</h1>
      @include('AdminSite.customer.customerDetails')
      <a type="button" href="{{route('customer.index')}}" class="btn btn-info">back</a>
    </div>
  </div>
@endsection
