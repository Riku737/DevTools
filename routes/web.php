<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::all();
    return view('home', ['categories' => $categories]);
});

Route::get('/home', function () {
    $categories = Category::all();
    return view('home', ['categories' => $categories]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/deals', function () {
    return view('deals');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/suggest', function () {
    $categories = Category::all();
    return view('suggest', ['categories' => $categories]);
});

Route::get('/resources', function () {
    return view('resources.index');
});
