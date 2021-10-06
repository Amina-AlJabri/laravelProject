@extends('app')

@section('content')
    {{-- <h1>{{$title}}</h1>
    <p> only to increase the numbers of lines</p> --}}

    <div class="jumbotron text-center">
        <h1>Welcom to laravel </h1>
        <p> only to increase the numbers of lines</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button"> login</a> <a class="btn btn-success btn-lg" href="/Register" role="button">Register</a></p>
    </div>
        @endsection