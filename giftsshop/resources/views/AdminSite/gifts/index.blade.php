@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <h1 class="display-4">Electronics</h1>
        </div>
        <table class="table table-hover ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Price($)</th>
                <th scope="col">Brand</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <td>{{$p->Elec_Name}}</td>
                    <td>{{$p->CategoryName}}</td>
                    <td>{{$p->Price}}</td>
                    <td>{{$p->Brand}}</td>
                    <td>
                        <a type="button" class="btn btn-primary btn-sm"
                           href="{{route('product.show', ['Elec_id' => $p->Elec_id])}}">Details
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-success btn-sm"
                           href="{{route('product.edit', ['Elec_id' => $p->Elec_id])}}">Edit
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('product.confirm', ['Elec_id' => $p->Elec_id])}}">Delete
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

