<?php

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;

// API endpoint to return subcategories for a given category (used by the suggest form)
Route::get('/api/categories/{category}/subcategories', function (Category $category) {
    // Return only id and name to keep the payload small
    $subcats = Subcategory::where('category_id', $category->id)->get(['id', 'name']);
    return response()->json($subcats);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $categories = Category::all(); // Footer
    $subcategories = $category->subcategories; // Subcategories of the selected category
    $resources = $category->resources; // Resources of the selected category
    return view('categories.index', [
        'category' => $category,
        'categories' => $categories,
        'subcategories' => $subcategories,
        'resources' => $resources,
    ]);
});

Route::get('/', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

Route::get('/home', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

Route::get('/login', function () {
    $categories = Category::all(); // Footer
    return view('login', ['categories' => $categories]);
});

Route::get('/search', function () {
    $categories = Category::all(); // Footer    
    return view('search', ['categories' => $categories]);
});

Route::get('/suggest', function () {
    $categories = Category::all(); // Footer + Dropdown
    $subcategories = Subcategory::all(); // Dropdown
    return view('suggest', ['categories' => $categories, 'subcategories' => $subcategories]);
});

Route::get('/resources', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});

Route::get('/categories', function () {
    $categories = Category::all(); // Footer
    return view('home', ['categories' => $categories]);
});
