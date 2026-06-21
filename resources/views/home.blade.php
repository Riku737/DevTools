@extends("layouts.layout")

@section("title", "Home")

@section("content")

    <div class="row mb-4">

        <h1 class="fw-bold">All Your Developer Tools in One Place</h1>
        <p>Discover, organize, and access the resources you need to build faster and smarter.</p>

    </div>

    <div class="row g-3">
        @foreach ($categories as $category)
            @if ($category->visible === 1)
                <x-category-card :category="$category" />
            @endif
        @endforeach
    </div>

@endsection