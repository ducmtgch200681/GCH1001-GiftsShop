@extends('masters.adMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Category Manager</h1>
        @include('partials.message')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Name</th>
{{--                <th scope="col">Description</th>--}}
{{--                <th scope="col">Image</th>--}}
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($category as $c)
                <tr>
                    <td>{{$c->Cate_Name}}</td>
{{--                    <td>{{$c->Cate_Description}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{route('category.show', ['Cate_id' =>$c->Cate_id])}}">--}}
{{--                            <img src="{{asset('image/'. $c->Cate_image)}}" alt="" style="width: 30%">--}}
{{--                        </a>--}}
{{--                    </td>--}}
                    <td>
                        <a type="button" class="btn btn-primary btn-sm"
                           href="{{route('category.show', ['Cate_id' => $c->Cate_id])}}">Details
                        </a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('category.update', ['Cate_id' => $c->Cate_id])}}"
                        >Edit</a>
                    </td>
                    <td>

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('category.confirm', ['Cate_id' => $c->Cate_id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
