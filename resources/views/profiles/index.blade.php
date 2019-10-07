@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">

        <div class="col-6">
       <h1>funktion für profilbild</h1>
       
       <h1> hier username funktion >>>> {{$user->username}}</h1>
       <h1>.</h1>
        </div>

        <div class="col6">
           
       <h1>post numm hier >>>> {{$user->posts->count()}}</h1>
       
       <h1>follo0w3r</h1>
       
       <h1>followingd</h1>
        </div>
     
        <div class="row">
           
           <h1>hier profile title >>>>> {{$user->profile->title}}
           </h1>
           
           <h1>hier profile description >>>>>   {{$user->profile->description}}</h1>
           
           <h1>hier profile url>>>>>{{$user->profile->url}}</h1>
            </div>
        </div>

        <div class="row">
           @foreach($user->posts as $post)
      <div class= "col-4">
         <h1> hier profile posts >>>>>>></h1>
         <img src="/storage/{{ $post->image}}" class="w-50">
        </div>
        @endforeach
</div>
 </div>
@endsection
