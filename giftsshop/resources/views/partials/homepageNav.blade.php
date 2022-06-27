{{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom" >--}}
{{--    <h1 class="intro" style=" text-align: center; ">--}}
{{--        <a class="nav-brand" href="{{route('mainpage.index')}}">GiftsShop</a>--}}
{{--    </h1>--}}
{{--    <button class="navbar-toggler"--}}
{{--            type="button"--}}
{{--            data-toggle="collapse"--}}
{{--            data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent"--}}
{{--            aria-expanded="false"--}}
{{--            aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon d-lg-none"></span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--        <ul class="navbar-nav mr-auto">--}}
{{--            <li class="nav-item upper-links ">--}}
{{--                <a class="nav-link active" href="{{route('mainpage.index')}}">--}}
{{--                    Home--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <button class="btn dropdown-toggle text-white"  id="navbarDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    GiftsShop--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                    @foreach($category as $cat)--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href= "{{route( 'mainpage.select', ['Cate_id' => $cat -> Cate_id])}}"--}}
{{--                        >--}}
{{--                            {{$cat -> Cate_Name}}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item upper-links ">--}}
{{--                <a class="nav-link active text-light " href="{{route('mainpage.contact')}}">Contact</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item upper-links ">--}}
{{--                <a class="nav-link active text-light " href="{{route('mainpage.about')}}">About</a>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        <form--}}
{{--            action="{{route('mainpage.search')}}"--}}
{{--              method="post" class="form-inline ">--}}
{{--            @csrf--}}
{{--            <input class="flipkart-navbar-input col-md-7" placeholder="Search for Products" name="search"--}}
{{--                   value="{{$search ?? ''}}"--}}
{{--            >--}}
{{--            <button class="flipkart-navbar-button col-md-1" >--}}
{{--                <svg>--}}
{{--                    <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </form>--}}
{{--        <a class="cart-button">--}}
{{--            <svg class="cart-svg" viewBox="0 0 16 16 ">--}}
{{--                <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <div class=" upper-linkss ">--}}
{{--            <a class="nav-link active text-light col-md-4 col-xs-6" href="{{route('customer.registerCus')}}">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">--}}
{{--                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>--}}
{{--                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<nav class="navbar navbar-dark navbar-expand p-0 bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav d-none d-md-flex mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{route('mainpage.about')}}" data-abc="true">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('mainpage.contact')}}" data-abc="true">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('mainpage.address')}}" data-abc="true">Address</a></li>
        </ul>
        <ul class="navbar-nav d-flex align-items-center">
            <li class=" nav-item ">
                <a class="nav-link active text-light col-md-4 col-xs-6" href="{{route('customer.registerCus')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        //human
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        //plus
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>

</nav>

<section class="header-main border-bottom bg-white">
    <div class="container-fluid">
        <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
            <div class="col-md-2">
{{--                <img  class="d-none d-md-flex" src="https://i.imgur.com/R8QhGhk.png" width="100">--}}
                <h1 class="intro" style=" text-align: center; ">
                    <a class="nav-brand" href="{{route('mainpage.index')}}">GiftsShop</a>
                </h1>
            </div>
            <div class="col-md-8">
                <form class="d-flex form-inputs col-md-15" action="{{route('mainpage.search')}}" method="post">

                        @csrf
                        <input class="form-control" placeholder="Search any product..." type="text" name="search" value="{{$search ?? ''}}">
                        <button class="col-md-1" type="submit">
                            <span class="iconify" data-icon="bx:search" data-width="24" data-height="24"></span>
                        </button>
                </form>
            </div>

        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none d-md-flex" href="#">Categories</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Electronics</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Fashion</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Furnitures</a>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <h2 class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gifts
                    </h2>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($category as $cat)
                            <li><a class="dropdown-item" href= "{{route('mainpage.select', ['Cate_id' => $cat -> Cate_id])}}">
                                {{$cat -> Cate_Name}}
                            </a></li>
                        @endforeach

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

@endsection
