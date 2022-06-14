@extends('w301- web.GCH1001.web_project.resources.views.AdminSite.masters.adMaster')

@section('main')


    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Category Details</h1>
        </div>
        @include('AdminSite.category.detail')
        <a type="button" href="{{route('category.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </div>
@endsection
