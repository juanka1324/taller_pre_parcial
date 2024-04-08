@extends('layouts.base')

@section('title', 'Editar Computador')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Editar Computador</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('computadores.index') }}" class="btn btn-danger">Atras</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{ route('computadores.update', $computador->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Marca:</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $computador->brand) }}">
        </div>

        <div class="form-group">
            <label for="model">Modelo:</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $computador->model) }}">
        </div>

        <div class="form-group">
            <label for="processor">Procesador:</label>
            <input type="text" class="form-control" id="processor" name="processor" value="{{ old('processor', $computador->processor) }}">
        </div>

        <div class="form-group">
            <label for="ram">Memoria RAM (GB):</label>
            <input type="number" class="form-control" id="ram" name="ram" value="{{ old('ram', $computador->ram) }}">
        </div>

        <div class="form-group">
            <label for="storage">Almacenamiento (GB):</label>
            <input type="number" class="form-control" id="storage" name="storage" value="{{ old('storage', $computador->storage) }}">
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $computador->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="date_of_purchase">Fecha de compra:</label>
            <input type="date" class="form-control" id="date_of_purchase" name="date_of_purchase" value="{{ old('date_of_purchase', \Carbon\Carbon::parse($computador->date_of_purchase)->format('Y-m-d')) }}">
        </div>
    </form>
    
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
@endsection