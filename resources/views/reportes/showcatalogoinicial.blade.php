@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop

@section('content')

    <div>
        <div>
            {{-- datos --}}
            <div class="col">
                <div>
                    <h2 class="font-weight-bold px-2">Producto</h2>
                </div>

                <div class="row">
                    <h5 class="font-weight-bold px-2">Foto: </h5>
                    <br>
                    <br>
                    <img src="{{ asset($producto->foto) }}" width="300" height="190" />
                </div>
                <br>
                <br>
                <div class="row border">
                    <h5 class="font-weight-bold px-2">Codigo: </h5>
                    <h5>{{ $producto->codigo }}</h5>
                </div>
                <div class="row border">
                    <h5 class="font-weight-bold px-2">Descripcion: </h5>
                    <h5>{{ $producto->descripcion }}</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Color: </h5>
                    <h5>{{ $producto->color }}</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Precio: </h5>
                    <h5>{{ $producto->precio }} Bs</h5>
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Descuento: </h5>
                    @foreach ($descuento as $descuentos)
                        @if ($producto->id_descuento == $descuentos->id)
                            <h5>{{ $descuentos->monto }} %</h5>
                        @endif
                    @endforeach
                </div>

                <div class="row border">
                        <h5 class="font-weight-bold px-2">Cantidad inicial: </h5>
                        @foreach ($inventario as $inventarios)
                            @if ($producto->id_inventario == $inventarios->id)
                                <h5>{{ $inventarios->cant_inicial }}</h5>
                            @endif
                        @endforeach

                  
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Cantidad disponible: </h5>
                    @foreach ($inventario as $inventarios)
                        @if ($producto->id_inventario == $inventarios->id)
                            <h5>{{ $inventarios->cant_disponible }}</h5>
                        @endif
                    @endforeach
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Marca: </h5>
                    @foreach ($marca as $marcas)
                        @if ($producto->id_marca == $marcas->id)
                            <h5>{{ $marcas->nombre }}</h5>
                        @endif
                    @endforeach
                </div>

                <div class="row border">
                    <h5 class="font-weight-bold px-2">Talla: </h5>
                    @foreach ($talla as $tallas)
                        @if ($producto->id_talla == $tallas->id)
                            <h5>{{ $tallas->numero }}</h5>
                        @endif
                    @endforeach
                </div>

                <br>
                <div class="row">
                    <a href="{{ route('productos.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i>
                        Volver</a>
                </div>
            </div> 

        </div>
    </div>
@stop
