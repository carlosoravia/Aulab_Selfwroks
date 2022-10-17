<x-layout/>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Modifica l'articolo  {{$article->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <x-form-edit-article :article="$article"/>
        </div>
        <div class="col">
        </div>
    </div>
</div>
