    </main>

    <footer class="mt-5 bg-light">

    <div class="container-lg">

        <div class="row pt-5 mb-2">

            <div class="col-lg-3 col-md-12">

                <ul class="list-unstyled">
                    <li>
                        <h4 class="fw-bold">DevTools</h4>
                    </li>
                    <li>
                        <p>A library of tools for every developer, at your fingertips.</p>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="/suggest">Suggest a resource</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">

                <ul class="list-unstyled">

                    @for ($i = 0; $i < 4; $i++)
                        <li class="mb-2">
                            <a class="link" href="/categories/{{ $categories[$i]->slug }}">{{ $categories[$i]->name }}</a>
                        </li>
                    @endfor

                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <ul class="list-unstyled">
                    @for ($i = 4; $i < 8; $i++)
                        <li class="mb-2">
                            <a class="link" href="/categories/{{ $categories[$i]->slug }}">{{ $categories[$i]->name }}</a>
                        </li>
                    @endfor

                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <ul class="list-unstyled">

                    @for ($i = 8; $i < 12; $i++)
                        <li class="mb-2">
                            <a class="link" href="/categories/{{ $categories[$i]->slug }}">{{ $categories[$i]->name }}</a>
                        </li>
                    @endfor
                
                </ul>
            </div>


        </div>

    </div>

    <div class="container-lg pb-5">

        <hr class="hr" />

        <div class="row">
            <div class="col-lg-6">
                <p>&copy; {{ date('Y') }} DevTools</p>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled d-flex justify-content-lg-end flex-row gap-3">
                    <li>
                        <a class="link" href="https://linkedin.com/in/riki-mcalear/" target="_blank"><i class="bi bi-linkedin me-1"></i>LinkedIn</a>
                    </li>
                    <li>
                        <a class="link" href="https://github.com/Riku737/Devtools" target="_blank"><i class="bi bi-github me-1"></i>Github</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</footer>

</body>

</html>