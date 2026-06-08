@extends("layouts.layout")

@section("title", "Suggest a Tool")

@section("content")

    <div class="container-lg mt-5">

        <div class="row">

            <form class="col-lg-6 offset-lg-3" action="/suggest" method="POST">

                {{-- Heading --}}
                <div class="mb-4">
                    <h1 class="fw-bold">Got a Favorite Tool?</h1>
                    <p>Help the community grow — suggest a resource and share it with developers worldwide.</p>
                </div>

                {{-- Resource title (product title or organization name) --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Resource Name"
                        name="resource[name]" required>
                    <label for="floatingInput">Resource Name</label>
                </div>

                {{-- Category --}}
                <div class="form-floating mb-3">
                    <select class="form-select" id="categorySelect" aria-label="Category select" name="resource[category]"
                        required>
                        <option selected disabled value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <label for="categorySelect">Category</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="subcategorySelect" aria-label="Subcategory select"
                        name="resource[subcategory]" required>
                        <option selected disabled value="">Select a subcategory</option>
                    </select>
                    <label for="subcategorySelect">Subcategory</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        style="height: 100px" required name="resource[description]"></textarea>
                    <label for="floatingTextarea">Short Description</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

    {{-- JavaScript moved to resources/js/suggest.js and imported from resources/js/app.js --}}

@endsection