@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">

            <hr style="color: '#0f4a4d';">
            <p> {{$post->title}}</p>

     

        </div>
       
</div>
@endsection