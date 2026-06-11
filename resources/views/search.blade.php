@extends("layouts.layout")

@section("title", "Search")

@section("content")

    <div class="container-lg mt-5">

        <div class="row mb-5">

            <div class="col-lg-6">

                <h1 class="mb-4 fw-bold">Search</h1>
                <p class="mb-3">Discover developer tools, resources, and solutions—search our library to find exactly what
                    you need.</p>

                <form action="{{ route('query') }}" method="GET" class="input-group">
                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    <input name="query" type="text" class="form-control" value="{{ $query ?? '' }}"
                        placeholder="Search by name or description" aria-label="Search resources">
                </form>

            </div>

        </div>

        <div class="row g-3 mb-4">
            @forelse ($resources as $resource)
                <x-card :resource="$resource" />
            @empty
                <div class="col-12">
                    <div class="alert alert-light mb-0">
                        @if(($query ?? '') === '')
                            Enter a search term to find resources.
                        @else
                            No results found for "{{ $query }}".
                        @endif
                    </div>
                </div>
            @endforelse

        </div>


    </div>

@endsection