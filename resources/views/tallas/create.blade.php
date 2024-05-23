@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar Tallas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('tallas.store') }}">
                @csrf
                <div class="form-group col-md-3">
                    <h5>Numero:</h5>
                    <input type="text" name="numero" class="focus border-dark  form-control" min="0" max="2" maxlength="2"
                        size="0" pattern="[0-9]{1,2}" placeholder="Numero" required>
                    @error('numero')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <br>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a class="btn btn-danger" href="{{ route('tallas.index') }}">Volver</a>
                </div>
            </form>
        </div>
    </div>
@stop
