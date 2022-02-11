<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\Post\DeletePostRequest;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Http\Requests\Post\IndexPostRequest;
use App\Http\Requests\Post\ShowPostRequest;

class PostController extends Controller
{

    public function show(ShowPostRequest $request,Post $post){
        return $post;
    }

  
    public function store(StorePostRequest $request){ 
      $p = Post::create($request->validated());
       return $p;
    
    }

   
    public function index(IndexPostRequest $request){
        return Post::all();
    }


    public function update(UpdatePostRequest $request, Post $post){
      $p=  $post->update($request->validated());
        if($p){
            return response()->json(["result" => "ok", "Post" => $p], 201);
           }
    }


    public function destroy(DeletePostRequest $request, Post $post){
        $p = $post->delete();
        if($p){
            return response()->json(["result" => "ok", "Post" => $p], 201);
           }
    }
}
