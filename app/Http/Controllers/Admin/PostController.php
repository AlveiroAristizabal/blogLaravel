<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('can:admin.posts.index')->only('index'); //sin only pa todas
        $this->middleware('can:admin.posts.create')->only('create','store'); //sin only pa todas
        $this->middleware('can:admin.posts.edit')->only('edit','update'); 
        $this->middleware('can:admin.posts.destroy')->only('destroy'); 
    }
        public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        // $color = ['red'=>'color rojo','blue'=>'color azul'];
        // return $posts;
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            $post->imagen()->create([
                'url' => $url
            ]);
        }
        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.posts.edit', $post)->with('info', 'el post se Creo bien');
    }

    public function edit(Post $post)
    {
        $this->authorize('author', $post);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        // $post = Post::create($request->all());
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('author', $post);

        $post->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            if ($post->imagen) {
                Storage::delete($post->imagen->url);

                $post->imagen->update([
                    'url' => $url
                ]);
            } else {
                $post->imagen->create([
                    'url' => $url
                ]);
            }
        }
        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }
        return redirect()->route('admin.posts.edit', $post)->with('info', 'el post se actualizo bien');
    }

    public function destroy(Post $post)
    {
        $this->authorize('author', $post);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info','El posts se elimino');

        
        
    }
}
