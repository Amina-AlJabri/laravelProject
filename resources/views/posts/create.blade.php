@extends('app')
@section('content')

    <h1>create Posts</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
   <div class="form-group">
       {{Form::label('title','Title')}}
       {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
   </div>
   <div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['id'=>'article-ckeditor','class' => 'form-control','placeholder'=>'body Text'])}}
</div>
{{Form::submit('submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection