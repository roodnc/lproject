<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

 public function __construct()
 {
    $this->middleware('auth');
 }


 public function create()

 {

    return view('posts\create');
 }

 public function store()

 {   
   $data = request()->validate([
      'title' => 'required',
      'image' => ['required', 'image'],
  ]);

  $imagePath = request('image')->store('uploads', 'public');

  $image = Image::make(public_path("storage/{$imagePath}"))->fit(800, 800);
        $image->save();


      auth()->user()->posts()->create([
         'title' => $data['title'],
         'image' => $imagePath,


      ]);
   
      return redirect('/profile/' . auth()->user()->id);
 }
      public function show(\App\Post $post)
      {
         return view('posts/show', compact ('post'));
      }


}
