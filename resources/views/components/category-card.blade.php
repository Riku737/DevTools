<div class="col-lg-3 col-md-6">
    <div class="card h-100">
        <div class="bg-light p-4 d-flex justify-content-center align-items-center rounded-top">
            <i class="bi bi-{{ $category->icon }} fs-1 text-primary"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title ">
                <a href="/categories/{{ $category->slug }}" class="link">
                    {{ $category->name }}
                </a>
            </h5>
            <p class="card-text">{{ $category->description }}</p>
        </div>
    </div>
</div>