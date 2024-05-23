@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>DETALLE DE VENTAS</b></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('detalleventas.create') }}"><i class="fas fa-money-check"></i>
                Registrar
                detalleventa</a>
            {{-- @endcan --}}
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="detalleventas">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Id nota de venta</th>
                        <th>Descripcion</th>

                        <th>cantidad</th>

                        <th>codigo producto</th>
                        <th>descuento</th>
                        <th>Acciones</th>
                        {{-- @can('Modo Admin') --}}

                        {{-- @endcan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalleventa as $detalleventas) {{-- hereeeeee --}}
                        <tr>

                            <td>{{ $detalleventas->id }}</td>
                            <td>{{ $detalleventas->id_notaventa }}</td>
                            @foreach ($producto as $productos)
                                @if ($detalleventas->id_producto == $productos->id)
                                    <td>{{ $productos->descripcion }}</td>
                                @endif
                            @endforeach

                            <td>{{ $detalleventas->cantidad }}</td>


                            @foreach ($producto as $productos)
                                @if ($detalleventas->id_producto == $productos->id)
                                    <td>{{ $productos->codigo }}</td>

                                @endif
                            @endforeach

                            @foreach ($producto as $productos)
                                @if ($detalleventas->id_producto == $productos->id)
                                    @foreach ($descuento as $descuentos)
                                        @if ($descuentos->id == $productos->id_descuento)
                                            <td>{{ $descuentos->monto }} %</td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- @can('Modo Admin') --}}
                            <td>
                                <form action="{{ route('detalleventas.destroy', $detalleventas) }}" method="POST">
                                    <a class="btn btn-dark btn-sm"
                                        href="{{ route('detalleventas.edit', $detalleventas) }}"><i
                                            class="fas fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('delete')
                                    <button style="margin-top: 0.50rem" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')"
                                        type="submit" value="Borrar" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash-alt"></i> Eliminar</button>
                                </form>

                            </td>
                            {{-- @endcan --}}
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#detalleventas').DataTable({
            autoWidth: false
        });
    </script>
@endsection
