<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white mx-5" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white mx-5" href="">Articoli</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{route('article.create')}}" class="nav-link active text-white mx-5">Crea Articolo</a>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav me-auto mb-auto mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link active text-white mx-5" href="{{route('login')}}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white mx-5" href="{{route('register')}}">register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout')}} ">
                            @csrf
                            <button class="btn btn-danger text-white m-3">Log-Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
