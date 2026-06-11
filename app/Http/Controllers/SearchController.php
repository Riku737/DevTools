<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function runSearch(Request $request)
    {
        $query = trim((string) $request->input('query', ''));

        $resources = Resource::query()
            ->when($query !== '', function ($search) use ($query) {
                $search->where('name', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->orderBy('name')
            ->get();

        return view('search', [
            'categories' => Category::all(),
            'resources' => $resources,
            'query' => $query,
        ]);
    }
}
