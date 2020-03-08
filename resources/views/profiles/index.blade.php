@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row">
      <img src="/storage/{{$user->profile->image}}" class="rounded-circle w-200">  
     
        <div class="col-3">
        <h3>{{$user->username}}</h3>
         <h3>{{$user->profile->title}}</h3>
           <h3>{{$user->profile->description}}</h3>
           <h3>{{$user->profile->url}}</h3>
<div class="buttonmove pt-5">
       <followw user-id="{{$user->id}}" follows="{{ $follows }}"></followw>

       
</div>
</div>
<div class col-3>
<h1>   {{$user->posts->count()}} Posts</h1>
<h1> {{$user->profile->followers->count()}} Followers</h1>   
<h1> {{$user->following->count()}} Following</h1>
</div>

<div class col-3>
<a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
</div>

           </div>
      </div>    
   </div>
 
   <hr style="color: '#0f4a4d';">
       
      <div class="container">
      <div class="row pt-5">
           @foreach($user->posts as $post)
      
      <div class= "col-3">
      <a href ="/p/ {{$post->id}}">
         <img src="/storage/{{ $post->image}}" class="w-50 pt-5">
        </a>
      </div>
        @endforeach
   </div></div>
</div>
<hr style="color: '#0f4a4d';">

@endsection
