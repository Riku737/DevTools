<div class="col-lg-3 col-md-6">
    <div class="card h-100">
        <div class="bg-light p-4 d-flex justify-content-center align-items-center rounded-top">
            <img height="40" width="40" src='https://www.google.com/s2/favicons?sz=64&domain_url={{ $resource->url }}'
                alt="{{ $resource->name }} favicon" />
        </div>
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">
                <a href=" {{ $resource->url }}" target="_blank" rel="noopener noreferrer">{{ $resource->name }}</a>
            </h5>
            <p class="card-text">{{ $resource->description }}</p>
            <div class="mt-auto text-end">
                {!! $resource->getPricingBadge() !!}
            </div>
        </div>
    </div>
</div>