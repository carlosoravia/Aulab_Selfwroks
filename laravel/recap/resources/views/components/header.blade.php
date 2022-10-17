<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://picsum.photos/1000/400" >
    <h1 class="display-5 fw-bold">Carlo's Blog</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, veniam. Rem nesciunt aperiam incidunt tenetur quasi sapiente error iusto, fugiat quae alias voluptatem facilis quam? Excepturi totam eaque vitae numquam.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ route('article.index')}}" class="btn btn-primary btn-lg px-4 gap-3">Vedi Articoli</a>
            @auth
            <a href="{{ route('article')}}" class="btn btn-outline-secondary btn-lg px-4">Scrivi Articolo</a>
            @endauth
        </div>
    </div>
</div>
