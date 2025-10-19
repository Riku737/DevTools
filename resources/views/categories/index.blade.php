@extends("layouts.layout")

@section("title", "Deals")

@section("content")

<div class="container-lg mt-5">

    <div class="row">
        <h1 class="mb-4 fw-bold">{{ $category->name }}</h1>
    </div>

    @foreach ($subcategories as $subcategory)
        <p>{{ $subcategory->name }}</p>
    @endforeach

</div>

@endsection