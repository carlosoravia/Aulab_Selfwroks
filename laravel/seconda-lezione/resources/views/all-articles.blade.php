<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/masthead.css">
    <title> | blog</title>
</head>
<body>

<div class="container-fluid">

    <div class="container py-4">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">See more</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold p-1 mx-3 px-0 active" aria-current="page" href="{{'/'}}">Home</a>
                    <a class="nav-link fw-bold p-1 mx-3 px-0 active" href="#">Blog</a>
                    <a class="nav-link fw-bold p-1 mx-3 px-0 active" href="#">Ultimi articoli</a>
                </nav>
            </div>
        </header>
    </div>
    <main>
        <!-- -------- inizio articoli -------- -->
        <div class="container-fluid d-flex">
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
        <!-- -------- fine articoli -------- -->
    </main>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
