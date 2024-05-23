@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar inventario</h1>
@stop

@section('content')
    <form method="post" action="{{ route('inventarios.update', $inventario) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-3">
            <h5>Cantidad inicial:</h5>
            <input type="text" name="cant_inicial" value="{{ $inventario->cant_inicial }}"
                class="focus border-dark  form-control" min="0" max="4" maxlength="4" size="0" pattern="[0-9]{1,4}"
                placeholder="Cantidad inicial" required>

            <h5>Cantidad disponible:</h5>
            <input type="text" name="cant_disponible" value="{{ $inventario->cant_disponible }}"
                class="focus border-dark  form-control" min="0" max="4" maxlength="4" size="0" pattern="[0-9]{1,4}"
                placeholder="Cantidad inicial" required>

            <br>
            <button type="submit" class="btn btn-dark"><i class="fas fa-pen-alt"></i> Guardar</button>
            <a class="btn btn-danger" href="{{ route('inventarios.index') }}"><i class="fas fa-arrow-left"></i>Volver</a>
        </div>
    </form>
@stop
