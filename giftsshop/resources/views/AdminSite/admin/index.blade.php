@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <br>
            <h1 class="display-4">Administrator Account</h1>

        </div>
        <table class="table table-hover ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Fullname</th>
                <th scope="col">Username</th>
                <th scope="col">E-mai</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admin as $a)
                <tr>
                    <td>{{$a->Ad_Fullname}}</td>
                    <td>{{$a->Ad_Username}}</td>
                    <td>{{$a->Ad_Email}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('admin.show', ['Ad_id' => $a->Ad_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.edit', ['Ad_id' => $a->Ad_id])}}"
                        >Edit</a>
                    </td>
                    <td>
{{--                        <a type="button" class="btn btn-danger btn-sm"--}}
{{--                           href="{{route('admin.confirm', ['Ad_id' => $a->Ad_id])}}"--}}
{{--                        >Delete</a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection

