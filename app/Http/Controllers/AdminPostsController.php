<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    use App\Models\Post;
    public function index()
    {
        $posts = Post::orderBy('create_at','DESC')->get();
        $data = ['posts' => $posts];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        Post::create(@$request->all());
        return redirect()->route('admin.post.index');
    }

    public function edit($id)
    {
        $data=[
            'post'=>$post,
        ];
        return view('admin.posts.edit',$data);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        //
    }
}
