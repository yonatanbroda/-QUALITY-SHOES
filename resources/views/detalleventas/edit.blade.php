@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')
    <h1>Editar Datos de Productos</h1>
@stop

@section('content')

    @error('importe')
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Error!</strong> Este producto ya está registrado.
        </div>

    @enderror

    <form method="post" action="{{ route('detalleventas.update', $detalleventa) }}">
        @csrf
        @method('PATCH')



        <div class="form-group col-md-3">
            <h5>cantidad:</h5>
            <input type="text" name="cantidad" value="{{ $detalleventa->cantidad }}"
                class="focus border-dark  form-control" min="1" max="4" maxlength="4" size="0" pattern="[0-9]{1,4}"
                placeholder="cantidad" required>
            @error('cantidad')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-md-3">
            <h5>Codigo Producto:</h5>
            <select name="id_producto" class="focus border-dark  form-control">
                @foreach ($producto as $productos)
                    @if ($detalleventa->id_producto == $productos->id)
                        {{-- ZZ <option value="{{$modelo->Id_notaventa}}">{{$modelo->Id_notaventa}}</option> XX --}}
                        <option value={{ $productos->id }}>{{ $productos->codigo }}</option>
                    @endif

                @endforeach
                @foreach ($producto as $productos)
                    @if ($detalleventa->id_producto != $productos->id)
                        <option value={{ $productos->id }}>{{ $productos->codigo }}</option>
                    @endif

                @endforeach


            </select>
        </div>

        <div class="form-group col-md-3">
            <h5>Id venta:</h5>
            <select name="id_notaventa" class="focus border-dark  form-control">
                @foreach ($notaventa as $notaventas)
                    @if ($detalleventa->id_notaventa == $notaventas->id)
                        {{-- ZZ <option value="{{$producto->id_notaventa}}">{{$producto->id_notaventa}}</option> XX --}}
                        <option value={{ $notaventas->id }}>{{ $notaventas->id }}</option>
                    @endif

                @endforeach
                @foreach ($notaventa as $notaventas)
                    @if ($detalleventa->id_notaventa != $notaventas->id)
                        <option value={{ $notaventas->id }}>{{ $notaventas->id }}</option>
                    @endif

                @endforeach
            </select>
        </div>

        {{--  --}}

        <br>
        <button type="submit" class="btn btn-dark">Guardar</button>
        <a class="btn btn-danger" href="{{ route('detalleventas.index') }}">Volver</a>
        <br>
        <br>
        <br>
    </form>
@stop
