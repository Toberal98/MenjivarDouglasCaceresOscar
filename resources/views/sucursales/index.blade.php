@extends('layouts.app')

@section('content')
<h1>Sucursales</h1>
<ul class="list-group">
    @foreach ($sucursales as $su)
    <li class="list-group-item">{{$su['nombre']}}</li>   
   @endforeach

  </ul>
@endsection