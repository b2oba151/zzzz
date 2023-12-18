<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;

class CategoryPostsController extends Controller
{
    public function index(Request $request, Category $category): PostCollection
    {
        $this->authorize('view', $category);

        $search = $request->get('search', '');

        $posts = $category
            ->posts()
            ->search($search)
            ->latest()
            ->paginate();

        return new PostCollection($posts);
    }

    public function store(Request $request, Category $category): PostResource
    {
        $this->authorize('create', Post::class);

        $validated = $request->validate([
            'title' => ['required', 'max:255', 'string'],
            'slug' => ['nullable', 'max:255', 'string'],
            'body' => ['nullable', 'max:255', 'string'],
        ]);

        $post = $category->posts()->create($validated);

        return new PostResource($post);
    }
}
