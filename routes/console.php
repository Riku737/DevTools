<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Resource;
use App\Models\Category;
use App\Models\Subcategory;

// Default command by Laravel
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Custom command to return databases quantities
Artisan::command('count', function () {
    $resources = Resource::count();
    $categories = Category::count();
    $subcategories = Subcategory::count();

    $msg  = "Total resources: {$resources}\n";
    $msg .= "Total categories: {$categories}\n";
    $msg .= "Total subcategories: {$subcategories}";

    $this->comment($msg);
})->purpose('Display the total number of resources, categories, and subcategories');
