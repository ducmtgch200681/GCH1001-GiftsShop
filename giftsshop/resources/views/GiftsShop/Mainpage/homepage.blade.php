@extends('masters.giftsshopMaster')
@section('main')
{{--    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img class="d-block w-100" src="{{asset('images/aaa.png')}}" alt="First slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="d-block w-100" src="{{asset('images/bbb.png')}}" alt="Second slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="d-block w-100" src="{{asset('images/ccc.png')}}" alt="Third slide">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
{{--    </div>--}}

    <div class="container">
        <h2>The product</h2>
    </div>
    <div class="grid-container">
        @foreach($product as $s)
            <div class="container page-wrapper">
                <div class="page-inner">
                    <div class="row">
                        <div class="el-wrapper">
                            <div class="box-up">
{{--                                <a  href="{{route('harvelElec.detail', ['Elec_id' => $s->Elec_id])}}">--}}
                                    <img class="img" src="{{asset('storage/'.$s->Gifts_Images )}}" alt="">
{{--                                </a>--}}
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name">I feel like Pablo</span>
                                        <span class="p-company">Yeezy</span>
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
                                    <span class="price">$120</span>
                                    <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
