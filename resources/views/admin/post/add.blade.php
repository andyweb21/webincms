<x-app-layout>
    <x-slot:title>Add Post</x-slot:title>
    <div>
        <x-breadcrumb>
            <x-breadcrumb.item type="parent" href="{{ route('post') }}">Post</x-breadcrumb.item>
            <x-breadcrumb.item>Add</x-breadcrumb.item>
        </x-breadcrumb>

        <div id="header-content" class="flex justify-between items-center mt-4">
            <h2 class="font-semibold text-3xl">Add Post</h2>
            <div class="flex gap-4">
                <x-button theme="default" href="{{ route('post.add') }}" extclass="w-36" onclick="submitPost('draft')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mr-2"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M7 19v-6h10v6h2V7.828L16.172 5H5v14h2zM4 3h13l4 4v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5 12v4h6v-4H9z"/></svg>
                    Save as Draf
                </x-button>
                <x-button theme="primary" href="{{ route('post.add') }}" extclass="w-32" onclick="submitPost('publish')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mr-2"><path fill="none" d="M0 0h24v24H0z"/><path fill="currentColor" d="M7 19v-6h10v6h2V7.828L16.172 5H5v14h2zM4 3h13l4 4v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5 12v4h6v-4H9z"/></svg>
                    Publish
                </x-button>
            </div>
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
                <div class="w-9/12">
                    <div class="bg-white shadow-md rounded-md p-4">
                        <div class="mb-4">
                            <x-label for="title">Title</x-label>
                            <x-input name="title" id="title" placeholder="Title" theme="light" required value="{{ old('title') }}" />
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="text-sm text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="">
                            <x-label for="post-ckeditor">Body</x-label>
                            <textarea id="post-ckeditor" name="body" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                {{ old('body') }}
                            </textarea>
                            <!-- error message untuk body -->
                            @error('body')
                                <div class="text-sm text-red-500 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div class="bg-white shadow-md rounded-md p-4 mb-6">
                        <x-label for="title">Featured Image</x-label>
                        <!-- <input type="file" name="image" id="image" /> -->

                        
                        <div class="mt-1 flex mx-auto justify-center p-0 w-44 h-44 items-center border-2 border-gray-300 border-dashed rounded-md relative">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <img id="image-preview" class="absolute w-full h-full object-cover">
                        </div>

                        <div class="text-sm text-gray-600 text-center mt-2">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <div>Upload a file</div>
                            <input id="file-upload" name="image" type="file" accept="image/*" onchange="showPreview(event);" class="sr-only">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500 text-center">PNG, JPG, GIF up to 10MB</p>

                        <!-- error message untuk title -->
                        @error('image')
                            <div class="text-sm text-red-500 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

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
                        <div class="flex justify-between gap-2">
                            <x-input theme="light" name="add_category_name" id="category-input" placeholder="Category name" />
                            <x-button theme="primary" id="addcategory-button" extclass="w-20">Add</x-button>
                        </div>
                        <div id="addcategory-error" class="text-sm text-red-500 mt-2"></div>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>

    <x-slot:footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="//cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>
        <script src="http://cdn.ckeditor.com/4.14.1/standard-all/adapters/jquery.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace( 'post-ckeditor' );
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#addcategory-button').click(function(e){
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('category.ajax') }}",
                        method: 'post',
                        data: {
                            name: $('#category-input').val()
                        },
                        success: function(res){
                            if(res.status == 'success') {
                                const cat = `<label class="flex items-center">
                                        <x-checkbox name="category_id[]" value="${res.data.id}" />
                                        <span class="ml-2">${res.data.name}</span>
                                    </label>`;
                                $('#category-list').append(cat);
                                $('#category-input').val('');
                            } else {
                                $('#addcategory-error').html(res.messages.name);
                            }
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript">
            function showPreview(event){
                if(event.target.files.length > 0){
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("image-preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
            function submitPost(status) {
                const inputStatus = document.getElementById('poststatus');
                const formAddPost = document.getElementById('addpost');

                inputStatus.value = status;
                formAddPost.submit();

                return false;
            }
        </script>
    </x-slot:footer>
</x-app-layout>