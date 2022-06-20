<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Admin</title>
<body id="body">
<head>
    @include('partials.AdminNav')
</head>

<main class="row ml-5 pl-5">
    @yield('main')
</main>
<footer>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    function readURL(input,img) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                img.attr("src", e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file").change(function () {
        const img = $("#img");
        readURL(this,img);
    });

    function openNav() {
        document.getElementById("sidenav").style.width = "250px";
        document.getElementById("body").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("sidenav").style.width = "0px";
        document.getElementById("body").style.marginLeft = "0px";
    }
</script>
</body>
</html>
