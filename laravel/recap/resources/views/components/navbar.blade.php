<div class="container-flex">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('home')}}" class="nav-link px-2 active">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-dark active">Articoli</a></li>
            @auth
            <li><a href="{{route('article')}}" class="nav-link px-2 link-dark active">Scrivi Articolo</a></li>
            <li><a href="{{route('article.index')}}" class="nav-link px-2 link-dark active">Edita Articoli</a></li>
            @endauth

        </ul>
        @auth
        <div class="col-md-3 text-end mx-3">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger me-2">Log-Out</button>
            </form>
        </div>
        @endauth
        @guest
        <div class="col-md-3 text-end mx-3">
            <a class="btn btn-outline-primary me-2" href="{{route('login')}}">Login</a>
            <a class="btn btn-outline-danger me-2" href="{{route('register')}}">Register</a>
        </div>
        @endguest
    </header>
</div>
