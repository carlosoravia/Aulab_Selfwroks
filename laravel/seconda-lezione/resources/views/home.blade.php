<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/masthead.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    {{-- ------ my style ------ --}}
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/main.css">
    <title> | home</title>
</head>

<body class="d-flex text-center text-bg-dark">
<div class="container-fluid d-inline">
    <main>
        <div class="container py-4">
            <header class="mb-auto">
                <div>
                    <h3 class="float-md-start mb-0">See more</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link fw-bold p-1 mx-3 px-0 active" aria-current="page" href="#">Home</a>
                        <a class="nav-link fw-bold p-1 mx-3 px-0 active" href="{{'/tutti-gli-articoli'}}">Blog</a>
                        <a class="nav-link fw-bold p-1 mx-3 px-0 active" href="#">Ultimi articoli</a>
                    </nav>
                </div>
            </header>

            <div class="p-5">
                <h1>where all starts</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero enim mollitia nihil modi adipisci voluptates, hic sit corrupti perferendis, animi minima quam odit, numquam corporis magnam sed natus nemo neque!</p>
            </div>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold text-dark">Mega lorem</h1>
                    <p class="col-md-8 fs-4 text-center text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, voluptatum, officiis eos, quas maiores officia aspernatur quaerat optio vitae repellendus ducimus odio. Magnam eaque iusto recusandae consectetur suscipit fugit sapiente.</p>
                </div>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                        <h2 class="text-white">Mega lorem</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tempora nesciunt. Vel ipsam ducimus provident cum quisquam architecto, veniam recusandae? Asperiores dolorem quibusdam consequuntur voluptates libero velit quos enim quae!</p>
                        <button class="btn btn-outline-light" type="button">Vedi di più</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2 class="text-dark">Mega lorem</h2>
                        <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime nulla, vitae esse quod suscipit quasi sed atque porro fugiat eveniet qui mollitia blanditiis nihil sapiente ipsum minus consectetur enim. Odio!</p>
                        <button class="btn btn-outline-secondary" type="button">Vedi di più</button>
                    </div>
                </div>
            </div>
        </div>
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
                                <h5 class="card-title text-dark">{{$article['title']}}</h5>
                                <p class="card-text text-dark">{{substr($article['subtitle'],0, 20)}}...</p>
                                <p class="card-text text-dark">Categoria: {{$article['category']}}</p>
                                <a href="#" class="btn btn-primary">Vedi di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</div>

{{-- ------ fine main ------ --}}










<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
