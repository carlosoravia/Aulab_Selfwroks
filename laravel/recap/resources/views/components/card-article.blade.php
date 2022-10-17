
<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{ $article->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->subtitle }}</p>
        <p class="card-text">Categoria : {{ $article->category->name}}</p>
        <p class="card-text">Creato da: {{ $article->user->name}}</p>
        <p class="card-text">Nel: {{ $article->created_at->format('d/m/y')}}</p>
        <a href="{{ route('article.show', $article)}}" class="btn btn-primary">Vedi Articolo</a>
    </div>
</div>
