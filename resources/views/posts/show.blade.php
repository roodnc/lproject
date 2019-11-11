@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
            <p> {{$post->title}}</p>

            <h1> {{$post->user->username}} </h1>
         <a href="#"> Follow </a>

        </div>
       
</div>
@endsection