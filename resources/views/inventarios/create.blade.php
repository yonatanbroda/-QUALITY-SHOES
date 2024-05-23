@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar Inventario</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">
            <form method="post" action="{{ route('inventarios.store') }}">
                @csrf
                <div class="form-group col-md-3">
                    <h5>Cantidad inicial:</h5>
                    <input type="text" name="cant_inicial" class="focus border-dark  form-control" min="0" max="4"
                        maxlength="4" size="0" pattern="[0-9]{1,4}" placeholder="Cantidad inicial" required>


                    <br>
                    <h5>Cantidad disponible:</h5>
                    <input type="text" name="cant_disponible" class="focus border-dark  form-control" min="0" max="4"
                        maxlength="4" size="0" pattern="[0-9]{1,4}" placeholder="Cantidad disponible" required>
                    <br>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('inventarios.index') }}">Volver</a>
                </div>
            </form>
        </div>
    </div>
@stop
