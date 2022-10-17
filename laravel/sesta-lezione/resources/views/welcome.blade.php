<x-layout/>
<div class="container-fluid">
    <div class="row">
        <div class="col p-5">
            <h1>Carlo's Blog</h1>
            @guest
                <h3>Non un blog come gli altri... </h3>
            @endguest

            @auth
                <h3>benvenuto {{ Auth::user()->name }}</h3>
            @endauth
        </div>
    </div>
    <div class="row">
        @foreach ($articles as $article)
            <div class="col">
                <x-card-article :article="$article"/>
            </div>
        @endforeach
    </div>
</div>



