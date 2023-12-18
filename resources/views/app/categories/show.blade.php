<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.categories.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('categories.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.categories.inputs.name')
                        </h5>
                        <span>{{ $category->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.categories.inputs.category_id')
                        </h5>
                        <span
                            >{{ optional($category->category)->name ?? '-'
                            }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.categories.inputs.icon')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $category->icon ? \Storage::url($category->icon) : '' }}"
                            size="150"
                        />
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('categories.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Category::class)
                    <a href="{{ route('categories.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>

            @can('view-any', App\Models\Category::class)
            <x-partials.card class="mt-5">
                <x-slot name="title"> Categories </x-slot>

                <livewire:category-categories-detail :category="$category" />
            </x-partials.card>
            @endcan @can('view-any', App\Models\Post::class)
            <x-partials.card class="mt-5">
                <x-slot name="title"> Posts </x-slot>

                <livewire:category-posts-detail :category="$category" />
            </x-partials.card>
            @endcan
        </div>
    </div>
</x-app-layout>
