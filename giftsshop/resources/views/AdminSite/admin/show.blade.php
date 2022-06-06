@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">ADMIN INFORMATION</h1>
            @include('AdminSite.admin.detail')
            <a type="button" href="{{route('admin.index')}}" class="btn btn-info">back</a>
        </div>
    </div>
@endsection
