@extends('masters.giftsshopMaster')
@section('main')
    <div class="container" >
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="container" >
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/image1.jpg')}}" class="d-block w-100" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/image2.jpg')}}" class="d-block w-100" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <img src="{{asset('images/image3.jpg')}}" class="d-block w-100" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <h1 class="text-white">The product</h1>
    </div>
    <div class="grid-container">
        @foreach($product as $s)
            <div class="page-wrapper">
                <div class="page-inner">

                        <div class="el-wrapper">
                            <div class="box-up">
                                <a  href="{{route('mainpage.show', ['Gifts_id' => $s->Gifts_id])}}">
                                    <img class="img" src="{{asset('storage/Images/'.$s->Gifts_Images )}}" alt="" />
                                </a>
                                <div class="img-info">
                                    <div class="info-inner">
                                        <span class="p-name">{{$s->Gifts_Name}}</span>
                                        <span class="p-company">{{$s->Brand}}</span>
                                    </div>
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
