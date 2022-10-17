<x-layout/>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col">
            <h1>Articoli scritti da {{ $user->name }}</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($user->articles as $article)
            <div class="col">
                <x-card-article :article="$article"/>
            </div>
        @endforeach
    </div>
</div>
