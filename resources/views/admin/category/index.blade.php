<x-app-layout>
    <x-slot:title>Categories</x-slot:title>
    <div>
        <x-breadcrumb>
            <x-breadcrumb.item type="parent" href="{{ route('post') }}">Post</x-breadcrumb.item>
            <x-breadcrumb.item>Categories</x-breadcrumb.item>
        </x-breadcrumb>

        <div id="header-content" class="mt-4">
            <h2 class="font-semibold text-3xl">Categories</h2>
        </div>

        <div id="main-content" class="mt-8">
            @if(session()->has('success'))
                <div class="px-4 py-2 bg-green-200 text-green-700 rounded-md mb-4">{{ session('success') }}</div>
            @elseif(session()->has('error'))
                <div class="px-4 py-2 bg-red-200 text-red-700 rounded-md mb-4">{{ session('error') }}</div>
            @endif
            
            <form id="addpost" name="addpost" action="{{ route('post.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input id="poststatus" type="hidden" name="status" value="draft" />
            <div class="flex justify-between gap-6">
                <div class="w-3/12">
                    <div class="bg-white shadow-md rounded-md p-4">
                        <div class="mb-4">
                            <x-label for="name">Name</x-label>
                            <x-input name="name" id="name" placeholder="Name" theme="light" required value="{{ old('name') }}" />
                            <!-- error message untuk name -->
                            @error('name')
                                <div class="text-sm text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="">
                            <x-label for="description">Description</x-label>
                            <textarea id="description" name="description" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                {{ old('description') }}
                            </textarea>
                            <!-- error message untuk description -->
                            @error('description')
                                <div class="text-sm text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-9/12">

                    <div class="bg-white shadow-md rounded-md p-4">
                        <x-label for="title">Category</x-label>
                        <div id="category-list" class="my-4">
                            @forelse($categories as $category)
                                <label class="flex items-center">
                                    <x-checkbox name="category_id[]" value="{{ $category->id }}" />
                                    <span class="ml-2">{{ $category->name }}</span>
                                </label>
                            @empty
                            <p>Category not available.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>

</x-app-layout>