@extends('layouts.app')

@section('content')

<div class="container header-nav-margin text-center px-5">
    <div class="m-5">
        <h3>CREATE POST</h3>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close(['action']) !!}  
    </div>  
</div>

@endsection

