<x-layout/>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{$article->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="{{ Storage::url($article->img)}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>{{ $article->body}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Categoria: {{$article->category->name}}</p>
            <p>Autore: {{$article->user->name}}</p>
        </div>
    </div>
</div>
