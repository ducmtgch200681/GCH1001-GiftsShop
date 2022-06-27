<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1, shrink-to-fit=no">


    <!--Fonts-->
    <link rel="dns-prefetch" href="http://fonts.gstatic.com">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicom.png">


    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">
</head>
<body>

<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
        /*background: url("https://th.bing.com/th/id/R.19f7630dbaff3652e139e0a19d2bb4b9?rik=fLPkI8UY%2fXmkdA&riu=http%3a%2f%2fspasalon.com%2fwp-content%2fuploads%2f2012%2f02%2flight-blue-background.jpg&ehk=BqDx6vEEq59oq8WOLEC6vL%2bwkykNX4rQ9LKpqnPBbOA%3d&risl=&pid=ImgRaw&r=0") no-repeat;*/
        background: url("https://img.freepik.com/free-photo/christmas-background-with-text-space_53876-128580.jpg?w=1380&t=st=1656348160~exp=1656348760~hmac=a404524ac1ccf524802e5001fd113a1a45460a2d6a9738a1e97e381ebf8c6d2f") no-repeat;
        background-size: cover;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand, .nav-link, .my-form, .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }

</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Gifts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register </a>
                </li>
            </ul>

        </div>
    </div>
</nav>



<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{route('auth.signin')}}" method="post">
                            @csrf
                            <div class="form-group row">

                                <label for="Ad_Username" class="col-md-4 col-form-label text-md-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    </svg>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" id="Ad_Username" class="form-control" placeholder="Username" name="Ad_Username" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Ad_password" class="col-md-4 col-form-label text-md-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </label>
                                <div class="col-md-6">
                                    <input type="password" id="Ad_password" class="form-control"  placeholder="Password" name="Ad_password" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-info">Sign In</button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>


</body>
</html>

