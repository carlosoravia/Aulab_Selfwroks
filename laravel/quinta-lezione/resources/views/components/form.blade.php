
<div class="container-fluid d-flex justify-content-center">
    <form method="POST" action="{{route('article.index')}}" class="w-25 m-5">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">titolo</label>
            <input type="text" class="form-control" name="title">
            <div name="title" id="emailHelp" class="form-text">metti un titolo</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">sottotitolo</label>
            <input name="subtitle" type="text" class="form-control" name="subtitle">
            <div id="emailHelp" class="form-text">metti un sottotitolo</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">categoria</label>
            <select name="category" name="category" class="form-control">
                <option value="sport">sport</option>
                <option value="economia">economia</option>
                <option value="coding">coding</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" aria-placeholder="contenuto"></label>
            <textarea name="body" name="body" cols="60" rows="10"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


