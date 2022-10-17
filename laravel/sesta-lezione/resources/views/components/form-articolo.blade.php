<form action="{{ route('article.store')}}" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Sottotitolo</label>
        <input type="text" class="form-control" name="subtitle">
    </div>
    {{-- <div class="col-12">
        <label for="inputAddress" class="form-label">Sottotitolo</label>
        <select name="category_id">
            @foreach ($cateories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="col-12">
        <label for="inputAddress" class="form-label">Paragrafo</label>
        <textarea class="form-control" name="body" cols="30" rows="10"></textarea>
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Img</label>
        <input type="file" class="form-control" name="img">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Carica</button>
    </div>
</form>
