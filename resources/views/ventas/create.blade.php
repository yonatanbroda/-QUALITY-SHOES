@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection


@section('js')
    <script src="<?php echo asset('js/imprimir.js'); ?>"></script>
@endsection


@section('content')
    <br>
    <div class="card">
        <div class="card-header">
            <h2><b>Ventas</b>
                <h2>
        </div>
    </div>

    <div class="card">

        <div class="card-header">

            <input class="btn btn-outline-dark" type="button" onclick="printDiv('printableArea')" value="Imprimir" />

        </div>


        <div class="card-body">

            <div id="printableArea">

                @php
                    $datos[0]['nombre'] = 'pepe';
                    $datos[0]['ventas'] = 12;
                    
                    $datos[1]['nombre'] = 'karla';
                    $datos[1]['ventas'] = 4;
                    
                    $datos[2]['nombre'] = 'juan';
                    $datos[2]['ventas'] = 12;
                    
                    $datos[3]['nombre'] = 'Patricia';
                    $datos[3]['ventas'] = 1;
                    $primero = 0;
                    $segundo = 0;
                    $tercero = 0;
                    $primervendedor = '';
                    $segundovendedor = '';
                    $tercervendedor = '';
                    foreach ($datos as $key => $value) {
                        if ($datos[$key]['ventas'] > $primero) {
                            $primero = $datos[$key]['ventas'];
                            $primervendedor = $datos[$key]['nombre'];
                            $del = $key;
                        }
                    }
                    unset($datos[$del]);
                    foreach ($datos as $key => $value) {
                        if ($datos[$key]['ventas'] > $segundo) {
                            $segundo = $datos[$key]['ventas'];
                            $segundovendedor = $datos[$key]['nombre'];
                            $del = $key;
                        }
                    }
                    unset($datos[$del]);
                    foreach ($datos as $key => $value) {
                        if ($datos[$key]['ventas'] > $tercero) {
                            $tercero = $datos[$key]['ventas'];
                            $tercervendedor = $datos[$key]['nombre'];
                        }
                    }
                @endphp

                <h1>Primer lugar: {{ $primervendedor }} con {{ $primero }} ventas</h1>
                <h1>Segundo lugar: {{ $segundovendedor }} con {{ $segundo }} ventas</h1>
                <h1>Tercer lugar: {{ $tercervendedor }} con {{ $tercero }} ventas</h1>



                <table class="table table-striped table-bordered shadow-lg mt-4" id="ventas">
                    <thead>
                        <tr>
                            <th class="text-center">Vendedor</th>

                            <th class="text-center">Cliente</th>
                            {{-- @can('Modo Admin') --}}
                            <th class="text-center">Codigo producto</th>
                            <th class="text-center">Color</th>
                            <th class="text-center">Talla</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Detalle</th>
                        </tr>

                    </thead>
                    <tbody>


                        @foreach ($venta as $ventas) {{-- hereeeeee --}}
                            <tr>

                                @foreach ($user as $users)
                                    @if ($ventas->id_vendedor == $users->id)
                                        <td class="text-center">{{ $users->name }} </td>
                                    @endif
                                @endforeach

                                @foreach ($user as $users)
                                    @if ($ventas->id_cliente == $users->id)
                                        <td class="text-center">{{ $users->name }} </td>
                                    @endif
                                @endforeach

                                @foreach ($producto as $productos)
                                    @if ($ventas->id_producto == $productos->id)
                                        <td class="text-center">{{ $productos->codigo }} </td>
                                    @endif
                                @endforeach

                                @foreach ($producto as $productos)
                                    @if ($ventas->id_producto == $productos->id)
                                        <td class="text-center">{{ $productos->color }} </td>
                                    @endif
                                @endforeach

                                @foreach ($producto as $productos)
                                    @if ($ventas->id_producto == $productos->id)

                                        @foreach ($talla as $tallas)
                                            @if ($productos->id_talla == $tallas->id)
                                                <td class="text-center">{{ $tallas->numero }} </td>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                <td class="text-center">{{ $ventas->cantidad }}</td>

                                @foreach ($producto as $productos)
                                    @if ($ventas->id_producto == $productos->id)
                                        <td class="text-center">{{ $productos->precio }} </td>
                                    @endif
                                @endforeach

                                @foreach ($producto as $productos)
                                    @if ($ventas->id_producto == $productos->id)
                                        <td class="text-center">{{ $productos->precio * $ventas->cantidad }} </td>
                                    @endif
                                @endforeach
                                {{-- @can('Modo Admin') --}}

                                <td><a class="btn btn-info btn-sm" href="{{ route('productos.show', $productos) }}">
                                        <i class="fas fa-eye"></i> Ver</a></td>
                                {{-- @endcan --}}
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#ventas').DataTable({
            autoWidth: false
        });
    </script>
@endsection
