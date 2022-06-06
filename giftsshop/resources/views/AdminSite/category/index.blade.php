@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <br>
            <h1 class="display-4">Category</h1>
        </div>
        <table class="table table-hover ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $ca)
                <tr>
                    <td>{{$ca->Cate_Name}}</td>
                    <td>
                        <a type="button" class="btn btn-primary btn-sm"
                           href="{{route('category.show', ['Cate_id' => $ca->Cate_id])}}">Details
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-success btn-sm"
{{--                           href="{{route('category.edit', ['Cate_id' => $ca->Cate_id])}}"--}}
                        >Edit
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
{{--                           href="{{route('category.confirm', ['Cate_id' => $ca->Cate_id])}}"--}}
                        >Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection

