<x-layout/>

<div class="container-fluid p-5 text-center">
    <div class="row">
        <div class="col mb-5">
            <h1>Esegui Log-In</h1>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col">
        </div>
        <div class="col">
            <form method="POST" action="{{route('login')}}">
            @csrf
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="inserisci nome">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="inserire password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>


