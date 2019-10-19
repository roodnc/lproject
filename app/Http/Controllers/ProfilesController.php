<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ProfilesController extends Controller
{
   
public function index($user)
{
  $user = \App\User::findOrFail($user);
    return view('profiles\index', [
    'user' => $user,
]);

}

public function edit(\App\User $user)
{

return view('profiles.edit', compact('user'));

}


public function update (\App\User $user)

{
$data = request ()-> validate ( 
  [
    'title' => 'required', 
    'description' => 'required',
    'url' => 'url' ,
    'image' =>'',
  ]
  );


if (request('image')){

  $imagePath = request('image')->store('profile', 'public');

  $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
        $image->save();


}
auth()->user()->profile->update(array_merge(
  $data,
  ['image' => $imagePath]
));
return redirect ("/profile/{$user->id}");
}

}

