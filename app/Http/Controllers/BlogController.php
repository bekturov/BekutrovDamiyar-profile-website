<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('blog.index')->with(['posts' => $posts]);
    }

    public function store(Request $request){
        Post::create([
            'body' => $request->body,
            'title' => $request->title
        ]);
        return back();
    }

    public function get_post($id){
        $posts = Post::find($id);

        if($posts == null)
            return response(['message' => 'post did not found'], 404);

        return view('blog.detail')->with(['posts' => $posts]);
    }
}
