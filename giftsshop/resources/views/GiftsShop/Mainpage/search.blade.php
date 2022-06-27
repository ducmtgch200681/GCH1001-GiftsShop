@extends('masters.giftsshopMaster')

@section('main')

    <div class="container1">
        <br>
        <h2 class="text-white">There are {{count($product)}} product(s)</h2>
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
