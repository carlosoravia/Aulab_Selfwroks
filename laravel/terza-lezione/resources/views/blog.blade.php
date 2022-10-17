<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title> | Blog</title>
</head>
<body>
    <x-navbar/>

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-lg-4">
                <img src="{{$article['img']}}" class="img-article-home">

                <h2 class="fw-normal">{{$article['title']}}</h2>
                <p>{{$article['subtitle']}}</p>
                <p><a class="btn btn-secondary" href="#">scopri di più &raquo;</a></p>
            </div>
        @endforeach
    </div><!-- /.row -->
</body>
</html>
