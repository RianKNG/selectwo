<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  
    public function index()
    {
        $data = post::all();
        return view('posts.index',compact('data'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $post = Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
        ]);
        $post->categories()->attach($request->categories);
        // dd($data);
        return redirect()->back()->with('success','pesan berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('posts.edit',compact('post','categories'));
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
