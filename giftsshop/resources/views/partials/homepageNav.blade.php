<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<nav class="navbar navbar-dark navbar-expand p-0 bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav d-none d-md-flex mr-auto" style="font-size: 20px;">
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
                        <button class="col-md-1 btn btn-danger" type="submit">
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
