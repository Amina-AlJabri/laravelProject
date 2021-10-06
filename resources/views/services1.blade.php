@extends('app')

@section('content')
    <h1>{{$title}}</h1>
    {{-- <p> only to increase the numbers of lines services page</p> --}}
    @if (count($services)>0)
    <ul class="list-group">
      @foreach ($services as $serviceM)
          <li class="list-group-item">{{$serviceM}}</li>
      @endforeach  
    </ul>
    @endif
@endsection