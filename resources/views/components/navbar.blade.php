<nav class="navbar border-bottom py-2 navbar-expand-lg sticky-top bg-white">

    <div class="container-lg">

        <a class="navbar-brand fw-bold" href="/home">
            DevTools
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto gap-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item" href="/categories/{{ $category->slug }}"><i
                                        class="bi bi-{{$category->icon}}"> </i>{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search">Search</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary">Suggest a resource</a>
                </li>
            </ul>
        </div>

    </div>

</nav>