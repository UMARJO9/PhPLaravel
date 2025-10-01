<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MyController extends Controller
{
    public function index(){
        $post=Post::all();
        return response()->json($post);
    }
}
