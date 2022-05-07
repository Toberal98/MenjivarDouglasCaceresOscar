@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar vendedor</h1>

    <div class="row">
        
        <div class="col">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dui</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Direccion</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">guardar</button>
              </form>
        </div>
      </div>
  </div>
@endsection