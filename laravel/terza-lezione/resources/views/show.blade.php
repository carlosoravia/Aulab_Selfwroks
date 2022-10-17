<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title> | Articoli</title>
</head>
<body>
    <x-navbar/>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{$article['title']}}</h1>
                <p>{{$article['body']}}</p>
            </div>
        </div>
    </div>
</body>
</html>
