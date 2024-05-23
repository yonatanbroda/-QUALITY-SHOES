@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar nota de ventas</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">

            @error('monto_total')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> Este nota venta ya está registrado.
                </div>

            @enderror

            <form method="post" action="{{ route('notaventas.store') }}" enctype="multipart/form-data" novalidate>
                @csrf {{-- token --}}

                <div class="form-group col-md-3">
                    <h5>monto total :</h5>
                    <input type="text" name="monto_total" class="focus border-dark  form-control" min="0" max="5"
                        maxlength="5" size="0" pattern="[0-9]{0,5}" placeholder="Bs" require>
                </div>
                {{-- separador --}}
                <div class="form-group col-md-3">
                    <h5>Cliente:</h5>
                    <select name="id_usuario" id="id_usuario" class="focus border-dark  form-control" onchange="habilitar()">
                        @foreach ($user as $users)
                            <option value={{ $users->id }}>{{ $users->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- separador --}}

                <br>
                <button class="btn btn-dark" type="submit">Registrar</button>
                <a class="btn btn-danger" href="{{ route('notaventas.index') }}">Volver</a>
            </form>
        </div>
    </div>
@stop
