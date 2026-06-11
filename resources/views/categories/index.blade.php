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
                    <x-card :resource="$resource" />
                @endforeach
            </div>
        @endforeach

    </div>

@endsection