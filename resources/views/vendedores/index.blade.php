@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Vendedores</h1>
    <a href="/vendedores/create" class="btn btn-primary">Agregar</a>
    <div class="row">
   
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">dui</th>
                    <th scope="col">direccion</th>
                    <th scope="col">nit</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($vendedores as $v)
                  <tr>
                    <td>{{$v['id']}}</td>
                    <td>{{$v['dui']}}</td>
                    <td>{{$v['direccion']}}</td>
                    <td>{{$v['nit']}}</td>
                
                    <td><a href="/vendedores/only/{{$v['id']}}" type="button" class="btn btn-primary">Ver</a>
                        <a href="/vendedores/update" type="button" class="btn btn-primary">Update</a>
                        <button type="button" class="btn btn-success">Eliminar</button></td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
     
      </div>
  </div>
@endsection