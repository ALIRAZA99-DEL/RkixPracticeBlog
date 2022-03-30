<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Auth;

class LikeController extends Controller
{
    //

    public function store($id)
    {
      
      $already = Like::where(['user_id'=> Auth::user()->id, 'post_id'=> $id])->first();
      if(!$already){
        $insert = Like::create([

          'user_id'=> Auth::user()->id,
          'post_id'=>$id, 
          
         ]);
      }
      
        return redirect()->back();
      
    }
    public function index()
    {
      $posts = Post::with(['user','likes.user'])->get();
      return view('frontend.list', compact('posts'));
    }
}




// Example many to many relation..

// product controller

// public function category()
// {
//     return $this->belongsToMany(category::class);
// }
// Ctaegory Controller
// public function product()
// {
//     return $this->belongsToMany(Product::class);
// }