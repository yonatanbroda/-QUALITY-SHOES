@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop

@section('content')
    <div>
        <div>
            <div class="col">
                <div>
                    <h2 class="font-weight-bold px-2">DETALLES DE VENTA</h2>
                </div>

                <div class="form-row row border">
                    <div class="form-group col-md-6">
                        @foreach ($user as $users)
                            @if ($notaventa->id_vendedor == $users->id)
                                <h5 class="font-weight-bold px-2">VENDEDOR: </h5>
                                <h5>{{ $users->name }}</h5>
                            @endif
                        @endforeach
                    </div>

                    <div class="form-group col-md-6">
                        @foreach ($user as $users)
                            @if ($notaventa->id_vendedor == $users->id)
                                <div class="row">
                                    <img src="{{ asset($users->foto) }}" width="120" height="120" />

                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>

                <div class="form-row row border">
                    @foreach ($user as $users)
                        @if ($notaventa->id_cliente == $users->id)
                            <h5 class="font-weight-bold px-2">CLIENTE: </h5>
                            <h5>{{ $users->name }}</h5>
                        @endif
                    @endforeach
                </div>

                <div class="form-row row border">
                    <h5 class="font-weight-bold px-2">VENTA TOTAL: </h5>
                    <h5>{{ $notaventa->monto_total }} bs</h5>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered shadow-lg mt-4" id="ventas">
                            <thead class="bg-dark">
                                <tr>
                                    <h4 class="text-center"><b>DETALLE DE VENTA</b>
                                        <h4>
                                </tr>
                                <tr>
                                    <th scope="col">CANTIDAD</th>
                                    <th scope="col">CODIGO PRODUCTO</th>
                                    <th scope="col">COLOR</th>
                                    <th scope="col">PRECIO UNITARIO</th>
                                    <th scope="col">DESCRIPCION</th>
                                    <th scope="col">MARCA</th>
                                    <th scope="col">DESCUENTO</th>
                                    <th scope="col">TALLA</th>
                                </tr>
                            </thead>

                            <tbody>
                                <div class="row border">
                                    @foreach ($detalleventa as $detalleventas)
                                        <tr>
                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @if ($detalleventas->cantidad == 1)
                                                    <td>{{ $detalleventas->cantidad }} par</td>
                                                @else
                                                    <td>{{ $detalleventas->cantidad }} pares</td>
                                                @endif
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->codigo }}</td>
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->color }}</td>
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->precio }} bs</td>
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->descripcion }}</td>
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        @foreach ($marca as $marcas)
                                                            @if ($productos->id_marca == $marcas->id)
                                                                <td>{{ $marcas->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        @foreach ($descuento as $descuentos)
                                                            @if ($productos->id_descuento == $descuentos->id)
                                                                <td>{{ $descuentos->monto }} %</td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        @foreach ($talla as $tallas)
                                                            @if ($productos->id_talla == $tallas->id)
                                                                <td>EUR. {{ $tallas->numero }} </td>
                                                            @endif
                                                        @endforeach

                                                    @endif
                                                @endforeach
                                            @endif
                                        </tr>
                                    @endforeach
                                </div>
                            </tbody>
                        </table>

                    </div>
                </div>


                <br>
                <div class="row">
                    <a href="{{ route('reportes.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i>
                        Volver</a>
                </div>
            </div>

        </div>
    </div>
@stop
