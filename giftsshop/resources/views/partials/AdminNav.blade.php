{{--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: #718096">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#">Admin Page</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
{{--                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">Administrator</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="adminDropdown">--}}
{{--                        <a class="dropdown-item" href="{{route('admin.index')}}">View all admin accounts</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="customerDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        Customer--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="customerDropdown">--}}
{{--                        <a class="dropdown-item" href="{{route('customer.index')}}">View all customer accounts</a>--}}
{{--                        <a class="dropdown-item" href="{{route('customer.create')}}">New customer account</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        Gifts--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="productDropdown">--}}
{{--                        <a class="dropdown-item" href="{{route('product.index')}}">View All Gifts</a>--}}
{{--                        <a class="dropdown-item" href="{{route('product.create')}}">New Gifts</a>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        Category--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">--}}
{{--                        <a class="dropdown-item" href="{{route('category.index')}}">View All Category</a>--}}
{{--                        <a class="dropdown-item" href="{{route('category.create')}}">New Category</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item mr-3">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <i class="bi bi-person"></i>--}}
{{--                        {{\Illuminate\Support\Facades\Session::has('Ad_Username')?--}}
{{--                            \Illuminate\Support\Facades\Session::get('Ad_Username') : ''}}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('auth.signout')}}">--}}
{{--                        <i class="bi bi-box-arrow-left"></i>--}}
{{--                        Logout--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<div id="sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="menu navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Administrator</a>
            <div class="dropdown-menu" aria-labelledby="adminDropdown">
                <a class="dropdown-item" href="{{route('admin.index')}}">View all admin accounts</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="customerDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Customer
            </a>
            <div class="dropdown-menu" aria-labelledby="customerDropdown">
                <a class="dropdown-item" href="{{route('customer.index')}}">View all customer accounts</a>
                {{--                        <a class="dropdown-item" href="{{route('customer.create')}}">New customer account</a>--}}
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Gifts
            </a>
            <div class="dropdown-menu" aria-labelledby="productDropdown">
                <a class="dropdown-item" href="{{route('product.index')}}">View All Gifts</a>
                <a class="dropdown-item" href="{{route('product.create')}}">New Gifts</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Category
            </a>
            <div class="dropdown-menu" style="position: relative" aria-labelledby="categoryDropdown">
                <a class="dropdown-item" href="{{route('category.index')}}">View All Category</a>
                <a class="dropdown-item" href="{{route('category.create')}}">New Category</a>
            </div>
        </li>
        <div class="sidebar-footer">
            <li class="bottom">
                <a class="nav-link" href="#" id="adminDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person"></i>
                    {{\Illuminate\Support\Facades\Session::has('Ad_Username')?
                        \Illuminate\Support\Facades\Session::get('Ad_Username') : ''}}
                </a>
            </li>
            <li class="bottom">
                <a class="nav-link" href="{{route('auth.signout')}}" id="adminDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-box-arrow-right"></i>

                    Logout
                </a>
            </li>
        </div>
    </ul>
</div>
<nav class="navbar navbar-dark">
    <button class="navbar-toggler bg-dark" style="display: block" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span onclick="openNav()" class="navbar-toggler-icon"></span> <a class="navbar-brand" onclick="openNav()">Admin Page</a>
    </button>
</nav>
