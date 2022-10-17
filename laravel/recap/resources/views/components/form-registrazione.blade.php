
<div class="container-fluid d-flex justify-content-center">
    <form method="POST" action="{{route('article.index')}}" class="w-25 m-5">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <input name="subtitle" type="text" class="form-control" name="subtitle">
            <div id="emailHelp" class="form-text">metti un sottotitolo</div>
        </div>
        <div class="mb-3">
            <select name="category" name="category" class="form-control">
                <option value="sport">sport</option>
                <option value="economia">economia</option>
                <option value="coding">coding</option>
            </select>
        </div>
        <div class="mb-3">
            <textarea name="body" name="body" cols="60" rows="10"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
