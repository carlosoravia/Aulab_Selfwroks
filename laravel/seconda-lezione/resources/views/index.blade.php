<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/masthead.css">
    <title>blog</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('article.index')}}">Tutti Gli Articoli</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
            <h1 class="">Blog Hack 53 Carlo</h1>
            <p class="lead">A great starter layout for a landing page</p>
        </div>
        </div>
    </div>
</header>
<div class="container my-2">
    <div class="row my-2">
        <div class="col-12-text-center">
            <h2>Ultimi articoli</h2>
        </div>
    </div>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-12 col-md-3 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{$article['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article['title']}}</h5>
                        <p class="card-text">{{substr($article['subtitle'],0, 20)}}...</p>
                        <p class="card-text">Categoria: {{$article['category']}}</p>
                        <a href="#" class="btn btn-primary">Vedi di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
