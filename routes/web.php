<?php

use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Category pages (URL Slugs)
Route::get('/categories/{category:slug}', function (Category $category) {
    $categories = Category::all();
    $subcategories = $category->subcategories;
    $resources = $category->resources;
    return view('categories.index', [
        'category' => $category,
        'categories' => $categories,
        'subcategories' => $subcategories,
        'resources' => $resources,
    ]);
});

// Home
Route::get('/', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

// Home
Route::get('/home', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

// Home
Route::get('/categories', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

// Search
// Whenever someone visits search page, run the runSearch method in SearchController
// Assign route name query (e.g., /search?query=apple&price=1)
Route::get('/search', [SearchController::class, 'runSearch'])->name('query');

// Resources
Route::get('/resources', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

// Suggest (discontinued)
// Route::get('/suggest', function () {
//     $categories = Category::all(); // Footer + Dropdown
//     $subcategories = Subcategory::all(); // Dropdown
//     return view('suggest', ['categories' => $categories, 'subcategories' => $subcategories]);
// });

// Login (discontinued)
// Route::get('/login', function () {
//     $categories = Category::all(); // Footer
//     return view('login', ['categories' => $categories]);
// });
