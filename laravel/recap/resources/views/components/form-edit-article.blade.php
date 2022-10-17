<form method="POST" action="{{ route('article.update', $article)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" name="title" value="{{$article->title}}" placeholder="inserisci titolo">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="subtitle" value="{{$article->subtitle}}" placeholder="inserisci sotto-titolo">
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" name="img">
        <img src="{{ Storage::url($article->img)}}" class="w-25">
    </div>
    <div class="mb-3">
        <label class="form-label">Categorie</label>
        <select name="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 form-check">
        <textarea name="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
    </div>
    <label class="form-label">Tags</label>
        <select name="tags[]" class="form-control" multiple>
            {{-- controllo se i tag sono pre-selezionati  --}}
            @foreach ($tags as $tag)
            <option value="{{$tag->id}} {{ $article->tags->contains($tag) ? 'selecetd' : ''}}">{{$tag->name}}</option>
            @endforeach
        </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
