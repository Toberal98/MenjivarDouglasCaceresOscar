@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Productos</h1>

    <div class="row">
   
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Existencias</th>
                    <th scope="col">Garantia</th>
                    <th scope="col">Vendedor</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($producto as $v)
                  <tr>
                    <th scope="row">{{ $v['id'] }}</th>
                    <td>{{ $v['nombre'] }}</td>
                    <td>{{ $v['descripcion'] }}</td>
                    <td>{{ $v['precio_unitario'] }}</td>
                    <td>{{ $v['existencias'] }}</td>
                    <td>{{ $v['garantia'] }}</td>
                    <td>{{ $v['id_vendedor'] }}</td>
                    <td><button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                      
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
     
      </div>
  </div>
@endsection