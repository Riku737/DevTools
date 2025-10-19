@extends("layouts.layout")

@section("title", "Search")

@section("content")

<div class="container-lg mt-5">

    <div class="row mb-5">

        <div class="col-lg-6">
            
            <h1 class="mb-4 fw-bold">Search</h1>
            <p class="mb-3">Discover developer tools, resources, and solutions—search our library to find exactly what you need.</p>
        
            <div class="input-group">
                <button class="btn btn-primary" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
                <input type="text" class="form-control" placeholder="Search by name, category, or subcategory" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-4">

            <div class="card mb-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">

            <div class="card mb-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>
        
        <div class="col-lg-4">

            <div class="card mb-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>

    </div>


</div>

@endsection