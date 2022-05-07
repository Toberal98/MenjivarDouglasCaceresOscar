@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear vendedor</h1>
    <a href="/vendedores" class="btn btn-primary">Volver</a>

    <div class="row">
        
        <div class="col">
            <form method="POST" action="{{route('vendedores.store')}}">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dui</label>
                  <input type="text" class="form-control" name="dui" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Direccion</label>
                  <textarea class="form-control" name="direccion" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nit</label>
                    <input type="text" class="form-control" name="nit" aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">guardar</button>
              </form>
        </div>
      </div>
  </div>
@endsection