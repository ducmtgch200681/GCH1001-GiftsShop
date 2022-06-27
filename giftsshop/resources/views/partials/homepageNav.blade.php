<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('mainpage.index')}}">Gifts Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('mainpage.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Handmade</a></li>
                    <li><a class="dropdown-item" href="#">Sweet</a></li>
                    <li><a class="dropdown-item" href="#">Luxury</a></li>
                    <li><hr class="dropdown-divider"></li>

                </ul>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link disabled">Link</a>--}}
{{--            </li>--}}
        </ul>
        <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom" >
    <h1 class="intro" style=" text-align: center; ">
        <a class="nav-brand" href="{{route('mainpage.index')}}">GiftsShop</a>
    </h1>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon d-lg-none"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item upper-links ">
                <a class="nav-link active" href="{{route('mainpage.index')}}">
                    Home
                </a>
            </li>
            <li class="nav-item dropdown">
                <button class="btn dropdown-toggle text-white"  id="navbarDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    GiftsShop
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($category as $cat)
                        <a class="dropdown-item"
                           href= "{{route( 'mainpage.select', ['Cate_id' => $cat -> Cate_id])}}"
                        >
                            {{$cat -> Cate_Name}}
                        </a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item upper-links ">
                <a class="nav-link active text-light " href="{{route('mainpage.contact')}}">Contact</a>
            </li>
            <li class="nav-item upper-links ">
                <a class="nav-link active text-light " href="{{route('mainpage.about')}}">About</a>
            </li>
        </ul>

        <form
            action="{{route('mainpage.search')}}"
              method="post" class="form-inline ">
            @csrf
            <input class="flipkart-navbar-input col-md-7" placeholder="Search for Products" name="search"
                   value="{{$search ?? ''}}"
            >
            <button class="flipkart-navbar-button col-md-1" >
                <svg>
                    <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                </svg>
            </button>
        </form>
        <a class="cart-button">
            <svg class="cart-svg" viewBox="0 0 16 16 ">
                <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
            </svg>
        </a>
        <div class=" upper-linkss ">
            <a class="nav-link active text-light col-md-4 col-xs-6" href="{{route('customer.registerCus')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>

