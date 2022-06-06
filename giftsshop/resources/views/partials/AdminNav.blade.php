<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: #718096">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Administrator</a>
                    <div class="dropdown-menu" aria-labelledby="bookDropdown">
                        <a class="dropdown-item"
                           href="{{route('admin.index')}}"
                        >View all admin accounts</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="publisherDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="publisherDropdown">
                        <a class="dropdown-item"
{{--                           href="{{route('customer.index')}}"--}}
                           A>View all customer accounts</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Electronics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="formatDropdown">
                        <a class="dropdown-item"
{{--                           href="{{route('product.index')}}"--}}
                        >View All Gifts</a>
                        <a class="dropdown-item"
{{--                           href="{{route('product.create')}}"--}}
                        >New Gifts</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="formatDropdown">
                        <a class="dropdown-item"
                           href="{{route('category.index')}}"
                        >View All Category</a>
                        <a class="dropdown-item"
                           href="{{route('category.create')}}"
                        >New Category</a>
                    </div>
                </li>
            </ul>

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
        </div>
    </div>
</nav>
