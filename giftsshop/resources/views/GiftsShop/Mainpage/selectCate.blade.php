@extends('masters.giftsshopMaster')

@section('main')
    <div class="container1">
        <h2>The category</h2>
    </div>

    <div class="grid-container">
{{--        @foreach($product as $s)--}}
{{--            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">--}}
{{--                <div class=" card" style="background-color: #e0c3fc">--}}
{{--                    <table class="card-body">--}}
{{--                        <tr>--}}
{{--                            <td class="d-flex justify-content-between align-items-center ">--}}
{{--                                <a class="product-name card-title">{{$s->Elec_Name}}</a>--}}
{{--                                <h3 class="price card-text">{{$s->Price}}$</h3>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <a class="brand" style="padding-left: 1rem">Brand: {{$s->Brand}}</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <a href="{{route('harvelElec.preview', ['Elec_id' => $s->Elec_id])}}">--}}
{{--                                    <img width = 200rem; src="{{asset('storage/'.$s->Elec_Images )}}" /></a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <a class="btn btn-primary-custom text-light" style="margin-left: 180px" >Add to cart</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}


    <div class="container">
        <br>
        <h2>The product</h2>
    </div>
    <div class="grid-container">
        @foreach($product as $s)
            <div class="page-wrapper">
                <div class="page-inner">

                    <div class="el-wrapper">
                        <div class="box-up">
                            <a  href="{{route('mainpage.show', ['Gifts_id' => $s->Gifts_id])}}">
                                <img class="img" src="{{asset('storage/'.$s->Gifts_Images )}}" alt="">
                            </a>
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name">{{$s->Gifts_Name}}</span>
                                        <span class="p-company">{{$s->Brand}}</span>
                                    </div>
                                    {{--                                    <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span>--}}
                                    {{--                                    </div>--}}
                                </div>

                        </div>
                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">{{$s->Price}}</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                    </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        @endforeach

    </div>

@endsection


