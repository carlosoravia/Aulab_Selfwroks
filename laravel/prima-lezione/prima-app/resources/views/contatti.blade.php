<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

    <title>Contatti</title>
</head>


<body>
<h1 class="text-center display-1 my-5 text-danger">chi siamo</h1>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">Prodotti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        @foreach($contacts as $contact)
        <div class="col col-md-6 d-flex justify-content-center">
            <div class="card m-2" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title">{{$contact['name']}} {{$contact['surname']}}</h5>
                        <p class="card-text">{{$contact['age']}}</p>
                        <a href="#" class="btn btn-primary">vedi di più</a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
    
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>