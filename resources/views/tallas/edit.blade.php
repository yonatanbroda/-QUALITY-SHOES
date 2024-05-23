@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar Talla</h1>
@stop

@section('content')
    <form method="post" action="{{ route('tallas.update', $talla) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-3">
            <h5>Numero:</h5>
            <input type="text" name="numero" value="{{ $talla->numero }}" class="focus border-dark  form-control" min="0"
                max="2" maxlength="2" size="0" pattern="[0-9]{1,2}" placeholder="Numero" required>
            @error('numero')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-danger" href="{{ route('tallas.index') }}">Volver</a>
        </div>
    </form>
@stop
