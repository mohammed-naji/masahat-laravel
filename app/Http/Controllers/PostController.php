<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::get();
        // $posts = Post::orderBy('id', 'desc')->get();
        // $posts = Post::latest()->get();
        // $posts = Post::latest()->paginate(10);
        // $NAME
        // $name
        $posts = Post::latest()->simplePaginate(10);

        // http://127.0.0.1:8000/posts?page=2

        // SELECT * FROM posts ORDER BY id DESC

        // 52 / 10 = 5.2 = 5
        // if (5.2 == float) 5++ => 6
        // 1 2 3 4 5 6

        // page = 1
        // ($page - 1) * 10 = 40
        // SELECT * FROM posts order by create_at desc limit 10 offset 30;

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //1. validation
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        //2. store data
        $path = $request->file('image')->store('uploads', 'custom');

        //3. store in database
        //-- 1. using model instance
        // $post = new Post();
        // $post->title = $request->title;
        // $post->image = $path;
        // $post->content = $request->content;
        // $post->save();

        //-- 2. using create method
        Post::create([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
        ]);
        // dd($post);

        //4. flash message
        flash()->success('Post added successfully');

        //4. redirect
        return redirect()->route('posts.index');
        // return redirect(route('posts.index'));
        // return to_route('posts.index');

        // WYSIWYG => What You See Is What You Get
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        // $user = [
        //     'id' => 1,
        //     'name' => 'dddd'
        // ];
        // if (isset($user['age'])) {
        //     echo $user['age'];
        // }

        // dd($id);
        // SELECT * FROM posts WHERE id = $id
        // $post = Post::find($id);
        // if (!$post) {
        //     abort(404);
        // }

        // $post = Post::findOrFail($id);

        // dd($post);

        // dd($post->title);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // delete file
        // unset, unlink
        File::delete(public_path($post->image));

        $post->delete();

        flash()->info('Post deleted successfully');

        return redirect()->route('posts.index');
    }
}
