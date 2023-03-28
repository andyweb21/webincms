<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $posts = Post::with('user')->paginate(20);

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();

        return view('admin.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'body'      => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->slug = str()->slug($request->title);
        $post->body = $request->body;
        $post->image = $image->hashName();
        $post->status = $request->status;
        $post->save();
        $post_id = $post->id;

        // Insert seleted category_id array to PostCategory table
        if(count($request->category_id) > 0) {
            $categories = [];
            for ($i = 0; $i < count($request->category_id); $i++) {
                $categories[] = [
                    'post_id' => $post_id,
                    'category_id' => $request->category_id[$i]
                ];
            }
            PostCategory::insert($categories);
        }

        // redirect to route post edit with success
        return redirect()->route('post.edit', $post_id)->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->visit();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // Validate request
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'body'      => 'required|min:10'
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            
            //delete old image
            Storage::delete('public/posts/'.$post->image);
            $post->image = $image->hashName();
        }

        // Update post
        $post->title = $request->title;
        $post->slug = str()->slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

         // redirect to route post edit with success
         return redirect()->back()->with('success', 'Post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('post')->with('success', 'Post has been deleted');
    }
}
