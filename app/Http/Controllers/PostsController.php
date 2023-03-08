<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post){
        //return view('post', compact('post'));
        $length = Post::getLength($post); 
        return view('post', compact('length')); 
    }

}
