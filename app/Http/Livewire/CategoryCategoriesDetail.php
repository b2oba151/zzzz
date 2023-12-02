<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\View\View;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoryCategoriesDetail extends Component
{
    use WithPagination;
    use WithFileUploads;
    use AuthorizesRequests;
    public Category $currentCategory;

    public Category $category;
    public $categoryIcon;
    public $uploadIteration = 0;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Category';

    protected $rules = [
        'category.category_id' => ['nullable', 'exists:categories,id'],
        'category.name' => ['required', 'max:255', 'string'],
        'categoryIcon' => ['image', 'max:1024', 'nullable'],
    ];

    public function mount(Category $category): void
    {
        $this->category = $category;
        $this->resetCategoryData();
    }

    public function resetCategoryData(): void
    {
        $this->category = new Category();

        $this->categoryIcon = null;
        $this->category->category_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newCategory(): void
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.category_categories.new_title');
        $this->resetCategoryData();

        $this->showModal();
    }

    public function editCategory(Category $category): void
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.category_categories.edit_title');
        $this->category = $category;

        $this->dispatchBrowserEvent('refresh');

        $this->showModal();
    }

    public function showModal(): void
    {
        $this->resetErrorBag();
        $this->showingModal = true;
    }

    public function hideModal(): void
    {
        $this->showingModal = false;
    }

    public function save(): void
    {
        $this->validate();

        if (!$this->category->category_id) {
            $this->authorize('create', Category::class);

            $this->category->category_id = $this->category->id;
        } else {
            $this->authorize('update', $this->category);
        }

        if ($this->categoryIcon) {
            $this->category->icon = $this->categoryIcon->store('public');
        }

        $this->category->save();

        $this->uploadIteration++;

        $this->hideModal();
    }

    public function destroySelected(): void
    {
        $this->authorize('delete-any', Category::class);

        collect($this->selected)->each(function (string $id) {
            $category = Category::findOrFail($id);

            if ($category->icon) {
                Storage::delete($category->icon);
            }

            $category->delete();
        });

        $this->selected = [];
        $this->allSelected = false;

        $this->resetCategoryData();
    }

    public function toggleFullSelection(): void
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->category->categories as $category) {
            array_push($this->selected, $category->id);
        }
    }

    public function render(): View
    {
        return view('livewire.category-categories-detail', [
            // 'categories' => $this->category->categories()->paginate(20),
            'children' => $this->currentCategory->categories()->paginate(20),
        ]);
    }
}
