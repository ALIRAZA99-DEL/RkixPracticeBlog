<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $insert = Comment::create([

         'user_id'=> Auth::user()->id,
         'post_id'=>$request->post_id,
         'comments'=>$request->comments,
         
        ]);
        return redirect()->back();
        
    }
    public function index()
    {
      $posts = Post::with(['user','comments.user'])->get();
      return view('frontend.list', compact('posts'));
    }
}
