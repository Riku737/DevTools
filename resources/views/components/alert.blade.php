<div class="col-12">
    <div class="alert alert-light mb-0">
        @if(($query ?? '') === '')
            Enter a search term to find resources.
        @else
            No results found for "{{ $query }}".
        @endif
    </div>
</div>