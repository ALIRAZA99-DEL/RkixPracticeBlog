<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    //


    public function store(Request $request)
    {
        $post= new Post;
        $post->user_id=  Auth::user()->id;
        $post->tittle= $request->tittle;
        $post->description=$request->description;
        
        if($request->hasfile('image')){
           $file= $request->file('image');
           $extenstion= $file->getClientOriginalExtension();
           $filename=time().'.'.$extenstion;
           $file->move('uploads/images/', $filename);
           $post->image=$filename;
        }
           $post->save();
           return redirect('view-data')->with('flash_message','Product Add Successfully'); 
    }

    public function index()
    {
        $select = Post::all();
        return view ('crud.view',compact('select'));
       
     }

     public function destroy($id)
     {
          $delete = Post::find($id)->delete();
         
          return redirect ('view-data');
          
     }
     public function show(Request $request ,$id)
     {
         $edit = Post::find($id);
         return view ('crud.edit',compact('edit'));
     }
     public function update(Request $request,$id)
     {
        $edit = Post::find($id);
        $edit->tittle =$request->tittle;
        $edit->description=$request->description;
        if($request->hasfile('image')){
            $destination='uploads/images/'.$edit->file;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file= $request->file('file');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/image/', $filename);
            $edit->image=$filename;
        }
        $edit->update();
        return redirect('view-data');
        
     }
     
     
}
