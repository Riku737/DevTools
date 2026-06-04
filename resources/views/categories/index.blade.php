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
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100">
                            <div class="bg-light p-4 d-flex justify-content-center align-items-center rounded-top">
                                <img height="40" width="40"
                                    src='https://www.google.com/s2/favicons?sz=64&domain_url={{ $resource->url }}'
                                    alt="{{ $resource->name }} favicon" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    <a href=" {{ $resource->url }}" target="_blank"
                                        rel="noopener noreferrer">{{ $resource->name }}</a>
                                </h5>
                                <p class="card-text">{{ $resource->description }}</p>
                                <div class="mt-auto text-end">
                                    {!! $resource->getPricingBadge() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>

@endsection