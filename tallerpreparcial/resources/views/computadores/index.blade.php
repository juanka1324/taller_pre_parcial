@extends('layouts.base')
@section('title', 'Lista Computadores')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-12">
          <h1 class="text-center alert alert-success">Computadores</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Procesador</th>
                <th scope="col">Ram</th>
                <th scope="col">Almacenamiento</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha de compra</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($Computadores as $computador)
              <tr>
                <th scope="row">{{$computador->id}}</th>
                <td>{{$computador->brand}}</td>
                <td>{{$computador->model}}</td>
                <td>{{$computador->processor}}</td>
                <td>{{$computador->ram}}</td>
                <td>{{$computador->storage}}</td>
                <td>{{$computador->description}}</td>
                <td>{{$computador->date_of_purchase}}</td>
                <td>
                  <a href="{{ route('computadores.edit', $computador->id) }}" class="bi bi-pencil btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                    Editar 
                  </a>
                </td>
                <td>
                  <button type="button" class="btn btn-primary" onclick="mostrarInformacionComputador('{{ $computador->brand }}', '{{ $computador->model }}', '{{ $computador->processor }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>  
                    Visualizar
                  </button>
              </td>
                <td>
                  <form
                      method="post"
                      action="{{route('computadores.destroy', $computador->id)}}"
                  >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger"
                  onclick="return confirm('Esta seguro que quiere eliminar este computador?')"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                  </svg>
                  Eliminar</button>
                  </form>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
        <div class="col-12 mt-3">
          <a href="{{route('computadores.create')}}" class="btn btn-primary">
              Crear nuevo Equipo
          </a>
        </div>
      </div>
  </div>
</div>
<script>
  function mostrarInformacionComputador(brand, model, processor) {
      var mensaje = "Información del computador:\n";
      mensaje += "Marca: " + brand + "\n";
      mensaje += "Modelo: " + model + "\n";
      mensaje += "Procesador: " + processor + "\n";
      // Agrega más campos según sea necesario

      alert(mensaje);
  }
</script>

@endsection