<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //

    public function create()
    {


        return view('posts.create', ['title' =>'Create new Post']);

    }

    public function store(StorePostRequest $request)
     {
      
        // $validated = $request->validate([
        //     'title' => ['required', 'max:5'],
        //     'slug' => ['required', 'max:255', 'unique:posts'],
        //     'content' => ['required'],
        //     'category_id' => ['required', 'exists:categories,id']
        // ],
        
        // ['slug.required' =>' :attribute is required!!!',
        //   'max' => ':attribute maximum!!!'
               
        
        // ]

        // );

      

        Post::query()->create($request->all());

        return redirect()->route('posts.create')->with('success','Post saved');
    }



}
