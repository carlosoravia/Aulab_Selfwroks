<div class="card m-5" style="width: 18rem;">
    <img src="{{ Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h1 class="card-title">{{$article->title}}</h1>
        <h3 class="card-subtitle">{{$article->subtitle}}</h3>
        <p class="card-text">scritto da : <a href="{{ route('articles.for.user', $article->user)}}" class="text-dark ">{{$article->user->name}}</a>
        </p>
    </div>
</div>
