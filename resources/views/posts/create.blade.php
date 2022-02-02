@extends('layouts.template')

@section('content')

<div class="container header-nav-margin text-center">
    <div class="my-5">
        <h3>POSTS</h3>
        @if(count($posts) > 0) 
        
            @foreach($posts as $post)
                <h1>{{$post->title}}</h1>
            @endforeach
            
        @else
            <p>No posts to display!</p>
        @endif
    </div>  
</div>

@endsection