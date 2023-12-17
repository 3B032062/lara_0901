<?php

namespace App\Http\Controllers;

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
        //
    }

    public function edit($id)
    {
        return view('admin.posts.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
