<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Categoria</th>
            <th scope="col">Actions</th>
            <th scope="col"> </th>
        </tr>
    </thead>
    <tbody>
        @foreach (Auth::user()->articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->user->name}}</td>
            <td>{{$article->category->name}}</td>
            <td>
                <a href="{{ route('article.edit', $article)}}" class="btn btn-primary btn-lg px-4 gap-3">Edit</a>
            </td>
            <td>
                <form action="{{ route('article.delete', $article)}}" method="POST">
                @method('delete')
                @csrf
                <a href="{{ route('article.delete', $article)}}" class="btn btn-danger btn-lg px-4 gap-3">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
