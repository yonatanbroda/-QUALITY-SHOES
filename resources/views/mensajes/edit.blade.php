@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar estado del mensaje</h1>
@stop

@section('content')
    <form method="post" action="{{ route('contactos.update', $contacto) }}">
        @csrf
        @method('PATCH')

        <h5>Estado del mensaje:</h5>
        <select name="estado" type="text" value="{{ $contacto->estado }}"
            class="focus border-dark  form-control form-group col-md-3">
            <option>Sin Ver</option>
            <option>Pendiente</option>
            <option>Realizado</option>
        </select>

        <br>
        <button type="submit" class="btn btn-dark"><i class="fas fa-pen-alt"></i> Guardar</button>
        <a class="btn btn-danger" href="{{ route('mensajes.index') }}"><i class="fas fa-arrow-left"></i> Volver</a>

    </form>
@stop
