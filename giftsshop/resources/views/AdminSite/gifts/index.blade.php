@extends('masters.adMaster')

@section('main')
    <div class="container">
        <br>
        <div class="p-2 pt-md-5 pb-md-3 mx-auto ">
            <h1 class="display-4">Gifts</h1>
            @include('partials.message')
        </div>
        <table class="table table-hover ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
{{--                <th scope="col">Price($)</th>--}}
{{--                <th scope="col">Brand</th>--}}
{{--                <th scope="col">Image</th>--}}
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <td>
                        <div class="tooltips">
                            {{$p->Gifts_Name}}
                            <div class="tooltipimage">
                                <img src="{{asset('storage/Images/'.$p->Gifts_Images)}}" alt="" style="width: 350px"/>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="tooltips">
                            {{$p->CategoryName}}
                            <div class="tooltipimage">
                                <img src="{{asset('storage/Images/'. $p->CategoryImage)}}" alt="" style="width: 350px"/>
                            </div>
                        </div>
                    </td>
{{--                    <td>{{$p->Price}}</td>--}}
{{--                    <td>{{$p->Brand}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{route('product.show', ['Gifts_id' => $p->Gifts_id])}}">--}}
{{--                            <img src="{{asset('storage/Images/'.$p->Gifts_Images)}}" alt="" style="width: 350px">--}}
{{--                        </a>--}}
{{--                    </td>--}}
                    <td>
                        <a type="button" class="btn btn-primary btn-sm"
                           href="{{route('product.show', ['Gifts_id' => $p->Gifts_id])}}">Details
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-success btn-sm"
                           href="{{route('product.edit', ['Gifts_id' => $p->Gifts_id])}}"
                        >Edit
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('product.confirm', ['Gifts_id' => $p->Gifts_id])}}"
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
