@extends('layouts.app')

@section('content')
<div class="container">
@include('inc.messages')
    <h1>Posts</h1><hr>
    @if(count($posts)>1)
        @foreach($posts as $post)
        <div class="">
            <h3>{{$post->title}}</h3>
            <p>{{$post->description}}</p><hr>
        </div>  
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
</div>
@endsection