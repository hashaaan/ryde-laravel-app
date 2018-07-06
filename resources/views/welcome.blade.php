@extends('layouts.app')

@section('content')
    <body>
        <br/>
        <br/>
        <div class="jumbotron text-center">
            <center><h1>{{$title}}</h1></center>
        </div>
    </body>
    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
@endsection
