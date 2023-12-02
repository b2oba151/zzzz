<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryCollection;

class CategoryCategoriesController extends Controller
{
    public function index(
        Request $request,
        Category $category
    ): CategoryCollection {
        $this->authorize('view', $category);

        $search = $request->get('search', '');

        $categories = $category
            ->categories()
            ->search($search)
            ->latest()
            ->paginate();

        return new CategoryCollection($categories);
    }

    public function store(
        Request $request,
        Category $category
    ): CategoryResource {
        $this->authorize('create', Category::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'icon' => ['image', 'max:1024', 'nullable'],
        ]);

        if ($request->hasFile('icon')) {
            $validated['icon'] = $request->file('icon')->store('public');
        }

        $category = $category->categories()->create($validated);

        return new CategoryResource($category);
    }
}
