<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Category::class);

        $search = $request->get('search', '');

        $categories = Category::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.categories.index', compact('categories', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Category::class);

        $categories = Category::pluck('name', 'id');

        return view('app.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Category::class);

        $validated = $request->validated();
        if ($request->hasFile('icon')) {
            $validated['icon'] = $request->file('icon')->store('public');
        }

        $category = Category::create($validated);

        return redirect()
            ->route('categories.edit', $category)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Category $category): View
    {
        $this->authorize('view', $category);

        return view('app.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Category $category): View
    {
        $this->authorize('update', $category);

        $categories = Category::pluck('name', 'id');

        return view('app.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        CategoryUpdateRequest $request,
        Category $category
    ): RedirectResponse {
        $this->authorize('update', $category);

        $validated = $request->validated();
        if ($request->hasFile('icon')) {
            if ($category->icon) {
                Storage::delete($category->icon);
            }

            $validated['icon'] = $request->file('icon')->store('public');
        }

        $category->update($validated);

        return redirect()
            ->route('categories.edit', $category)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Category $category
    ): RedirectResponse {
        $this->authorize('delete', $category);

        if ($category->icon) {
            Storage::delete($category->icon);
        }

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
