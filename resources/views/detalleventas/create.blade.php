@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Registrar detalleventas</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body shadow-lg">

            @error('codigo')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> Este detalleventa ya está registrado.
                </div>
            @enderror

            <form method="post" action="{{ route('detalleventas.store') }}" enctype="multipart/form-data">
                @csrf {{-- token --}}


                <div class="form-group col-md-3">
                    <h5>Producto:</h5>
                    <select name="id_producto" class="focus border-dark  form-control">
                        @foreach ($producto as $productos)
                            <option value={{ $productos->id }}>{{ $productos->id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <h5>Cantidad:</h5>
                    <input type="text" name="cantidad" class="focus border-dark  form-control" min="1" max="4" maxlength="4"
                        size="0" pattern="[0-9]{1,4}" placeholder="Cantidad" required>

                    @error('cantidad')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-3">
                    <h5>notaventa id:</h5>
                    <select name="id_notaventa" class="focus border-dark  form-control">
                        @foreach ($notaventa as $notaventas)
                            <option value={{ $notaventas->id }}>{{ $notaventas->id }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- separador --}}
                <br>

                <button class="btn btn-dark" type="submit">Registrar</button>
                <a class="btn btn-danger" href="{{ route('detalleventas.index') }}">Volver</a>
            </form>
        </div>
    </div>
@stop
