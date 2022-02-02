@extends('layouts.app')

@section('content')

<div class="container header-nav-margin text-center">
    <div class="my-5">
        <h3>POSTS</h3>
        @if(count($posts) > 0) 
        
            @foreach($posts as $post)
            <div class="card m-5 py-3">
                <h1><a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                <small>Date: {{$post->created_at}}</small>
            </div>                
            @endforeach

        @else
            <p>No posts to display!</p>
        @endif
    </div>  
</div>

@endsection