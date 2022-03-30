<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    //
public function index()
{
    $posts =Post::with('user','likes.user','comments.user')->get();
    return view('front.index',compact('posts'));
}
    
}
