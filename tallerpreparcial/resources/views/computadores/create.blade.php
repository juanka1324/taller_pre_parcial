@extends('layouts.base')

@section('title', 'Crear Nuevo Computadore')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Crear Nuevo Computadores</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('computadores.index') }}" class="btn btn-danger">Atras</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{route ('computadores.store')}}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand Title" value="{{old('brand')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="model" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="model" value="{{old('model')}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="processor" class="form-label" >Procesador</label>
            <input type="text" class="form-control" id="processor" name="processor" placeholder="processor" value="{{old('processor')}}">
        </div>
        <div class="col-md-12 mt-2">
            <label for="ram" class="form-label">Ram</label>
            <input type="number" class="form-control" id="ram" name="ram" placeholder="ram" value="{{old('ram')}}">
        </div>
        <div class="col-md-12 mt-2">
            <label for="storage" class="form-label">Almacenamiento</label>
            <input type="number" class="form-control" id="storage" name="storage" placeholder="storage" value="{{old('storage')}}">
        </div>
        <div class="col-md-12 mt-2">
            <label for="description" class="form-label">Descripcion</label>
            <textarea rows="4" class="form-control" id="description" name="description" placeholder="Description">{{old('description')}}</textarea>
        </div>
        <div class="col-md-6 mt-2">
            <label for="date_of_purchase" class="form-label">Fecha de Compra</label>
            <input type="datetime-local" class="form-control" id="date_of_purchase" name="date_of_purchase" placeholder="Date of Purchase">
        </div>
        @if ($errors->any())
                 
        <div class="col-md-12 mt-2">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
@endif
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection



