@extends('layouts.app')

@section('content')

<div class="container header-nav-margin text-center">
    <div class="my-5">
        <h1>{{$post->title}}</h1> 
        <small>Date: {{$post->created_at}}</small> 
        <h3>{{$post->body}}</h3>      
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default"></a>  
</div>

@endsection





