@include('layouts.header')

<x-navbar :categories="$categories" />

<main class="container-lg mt-5">

    @yield("content")

</main>

@include("layouts.footer")