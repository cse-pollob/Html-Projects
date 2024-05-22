<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // import ray model

class PostController extends Controller
{
    public function index() //created by ray which is 
    {
        $posts=Post::all();
    }
}
