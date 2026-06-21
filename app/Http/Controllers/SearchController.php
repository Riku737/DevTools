<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function runSearch(Request $request)
    {

        // Retrieve all categories from DB
        $categories = Category::all();

        // Get query from parameter
        // Force string type and trim
        // Blank if nothing found
        $query = trim((string) $request->input('query', ''));

        // SQL statement builder instance
        $resources = Resource::query()
            ->when($query !== '', function ($search) use ($query) {
                $search->where('name', 'like', "%{$query}%") // Name contains query
                       ->orWhere('description', 'like', "%{$query}%"); // Description contains query
            })
            ->orderBy('name') // Sort alphabetically
            ->get(); // Execute SQL statement

        // Pass to Blade template
        return view('search', [
            'categories' => $categories,
            'resources' => $resources,
            'query' => $query,
        ]);
    }
}
