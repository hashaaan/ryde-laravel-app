@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1><hr>
    @include('inc.messages')
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::Submit('Submit', ['class' => 'btn btn-primary', 'style' => 'background-color: #0078D7;'])}}
    {!! Form::close() !!}
</div>
@endsection