@extends("layouts.layout")

@section("title", "Home")

@section("content")

<div class="container-lg pt-5">

    <div class="row mb-4">

        <div class="col-lg-6">
            <h1 class=" fw-bold">All Your Developer Tools in One Place</h1>
            <p>Discover, organize, and access the resources you need to build faster and smarter.</p>
        </div>
    </div>

    <div class="row g-3">
        @foreach ($categories as $category)
            @if ($category->visible === 1)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <a href="#" class="link">Open Resource</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</div>

@endsection