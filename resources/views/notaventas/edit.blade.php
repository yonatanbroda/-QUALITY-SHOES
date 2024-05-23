@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar Datos de notaventas</h1>
@stop

@section('content')

    @error('descripcion')
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Error!</strong> Este notaventa ya está registrado.
        </div>

    @enderror

    <form method="post" action="{{ route('notaventas.update', $notaventa) }}">
        @csrf
        @method('PATCH')
        <div class="form-group col-md-6">
            <h5>Monto_total:</h5>
            <input type="text" name="monto_total" value="{{ $notaventa->monto_total }}"
                class="focus border-dark  form-control">

        </div>

        <div class="form-group col-md-3">
            <h5>user:</h5>
            <select name="id_usuario" class="focus border-dark  form-control">
                @foreach ($user as $users)
                    @if ($notaventa->id_usuario == $users->id)
                        <option value={{ $users->id }}>{{ $users->name }}</option>
                    @endif

                @endforeach
                @foreach ($user as $users)
                    @if ($notaventa->id_usuario != $users->id)
                        <option value={{ $users->id }}>{{ $users->name }}</option>
                    @endif

                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Guardar</button>
        <a class="btn btn-danger" href="{{ route('notaventas.index') }}">Volver</a>
        <br>
        <br>
        <br>
    </form>
@stop
