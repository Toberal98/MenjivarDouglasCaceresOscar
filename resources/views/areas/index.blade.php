@extends('layouts.app')

@section('content')
<h1>Areas</h1>
<ul class="list-group">
    @foreach ($areas as $a)
    <li class="list-group-item">{{$a['nombre']}}</li>   
   @endforeach

  </ul>
@endsection