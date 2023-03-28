<x-app-layout>
    <x-slot:title>Post</x-slot:title>
    <div>
        <x-breadcrumb>
            <x-breadcrumb.item>Post</x-breadcrumb.item>
        </x-breadcrumb>

        <div id="header-content" class="flex justify-between items-center mt-4">
            <h2 class="font-semibold text-3xl">Post</h2>
            <div>
                <x-link theme="primary" href="{{ route('post.add') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mr-2"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h14V5H5zm6 6V7h2v4h4v2h-4v4h-2v-4H7v-2h4z"/></svg>    
                    Add Post
                </x-link>
            </div>
        </div>

        <div id="main-content" class="mt-8">

            <div class="mb-4 flex justify-between">
                <div class="flex">
                    <select class="form-select mr-4 appearance-none block w-48 pl-3 pr-10 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option selected>All Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="form-select mr-4 appearance-none block w-full pl-3 pr-10 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option selected>All Author</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="form-select mr-4 appearance-none block w-full pl-3 pr-10 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option selected>All Status</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    
                </div>
                <div class="w-60 flex border border-gray-300 bg-white rounded-md pr-2">
                    <span class="flex items-center justify-center px-3">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </span>
                    <input type="text" class="pr-3 py-2 w-full outline-none" placeholder="Search...">
                </div>
            </div>

            <div class="overflow-hidden border border-gray-300 rounded-lg shadow-md">
            <table class="min-w-max w-full table-auto">

                <thead class="rounded-t-lg">
                    <tr class="bg-gray-100 text-gray-500 text-sm border-b border-gray-300">
                        <th class="py-3 px-6 text-left font-semibold rounded-tl-lg">Image</th>
                        <th class="py-3 px-6 text-left font-semibold rounded-tl-lg">Title</th>
                        <th class="py-3 px-6 text-left font-semibold">Category</th>
                        <th class="py-3 px-6 text-left font-semibold">Author</th>
                        <th class="py-3 px-6 text-center font-semibold">Created</th>
                        <th class="py-3 px-6 text-center font-semibold">Status</th>
                        <th class="py-3 px-6 text-center font-semibold rounded-tr-lg w-10">Actions</th>
                    </tr>
                </thead>

                <tbody class="text-gray-500 text-sm font-medium">
                    @forelse ($posts as $post)
                    <tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded-md w-10 h-10 object-cover">
                        </td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <a href="#" class="font-semibold text-gray-800">{{ $post->title }}</a>
                        </td>
                        <td class="py-3 px-6 text-left">
                            News & Media
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                </div>
                                <span>{{ $post->user->name }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            {{ $post->created_at->format('d F Y') }}
                        </td>
                        <td class="py-3 px-6 text-center">
                            @if($post->status == 'publish')
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{ $post->status }}</span>
                            @else
                            <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">{{ $post->status }}</span>
                            @endif
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <a href="#" class="bg-gray-200 text-gray-600 py-1 px-3 rounded-md text-xs mr-3">Edit</a>
                                <a href="#" class="bg-red-600 text-white py-1 px-3 rounded-md text-xs">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-6 text-center bg-white">Data Post belum Tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            {{ $posts->links('vendor.pagination.webincms') }}

            </div>
        </div>

    </div>
</x-app-layout>