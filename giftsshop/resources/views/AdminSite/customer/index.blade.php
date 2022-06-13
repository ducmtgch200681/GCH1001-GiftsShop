@extends('masters.adMaster')

@section('main')
  <div class="container">
    <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
      <br>
      <h1 class="display-4">Customers Account</h1>
      @include('partials.message')
    </div>
    <table class="table table-hover ">
      <thead class="thead-dark">
      <tr>
        <th scope="col">Fullname</th>
        <th scope="col">Username</th>
        <th scope="col">Gender</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        {{--        <th scope="col">&nbsp;</th>--}}
      </tr>
      </thead>
      <tbody>
      @foreach($customer as $c)
        <tr>
          <td>{{$c->Cus_Fullname}}</td>
          <td>{{$c->Cus_Username}}</td>
          <td>{{$c->Cus_gender}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('customer.show', ['Cus_id' => $c->Cus_id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('customer.edit', ['Cus_id' => $c->Cus_id])}}"
            >Edit</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
