@extends('layouts.app')

@section('content')
<h1>Empleados</h1>
<ul class="list-group">
    @foreach ($empleados as $emp)
    <li class="list-group-item">{{$emp['nombre']}}</li>   
   @endforeach

  </ul>
@endsection