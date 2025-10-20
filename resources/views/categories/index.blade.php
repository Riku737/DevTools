@extends("layouts.layout")

@section("title", "$category->name")

@section("content")

<div class="container-lg mt-5">

    <div class="row">
        <h1 class="mb-4 fw-bold">{{ $category->name }}</h1>
    </div>

    @foreach ($subcategories as $subcategory)
    <h3 class="mb-3 fw-bold">{{ $subcategory->name }}</h3>
    <div class="row g-3 mb-4">
        @foreach ($resources->where('subcategory_id', $subcategory->id) as $resource)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ $resource->url }}" target="_blank" rel="noopener noreferrer">{{ $resource->name }}</a>
                        </h5>
                        <p class="card-text">{{ $resource->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach

</div>

@endsection