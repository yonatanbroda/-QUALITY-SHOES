@extends('adminlte::page')

@section('title', 'Quality-Store')

@section('content_header')

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">

@endsection

@section('js')
    <script src="<?php echo asset('js/imprimir.js'); ?>"></script>


    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#productos').DataTable({
            autoWidth: false
        });
    </script>


@endsection

@section('content')

    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>PRODUCTOS</b></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('productos.create') }}"><i class="fas fa-shoe-prints"></i> Registrar
                producto</a>

            {{-- Boton imprimir- --}}
            <button onclick="printDiv('printableArea')" type="button" value="Imprimir" class="btn btn-dark "><i
                    class="fas fa-print"></i>
                Imprimir</button>
            {{-- Imprimir-- --}}
            {{-- @endcan --}}
        </div>

        <div class="card-body table-responsive">
            <div id="printableArea">
                <div class="container">
                    <div class="img-factura row ">
                        <div class="col">
                            <figure>
                                <img src={{ asset('img/logo.jpg') }} class="figure-img img-fluid rounded"
                                    alt="A generic square placeholder image with rounded corners in a figure." width="130"
                                    height="120" />
                            </figure>
                        </div>
                        <div class="col">
                            <figcaption class="figure-caption ">
                                <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> Tienda virtual</h5>
                                <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 78416172</h5>
                                <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> Quality-Store@gmail.com</h5>
                            </figcaption>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-bordered shadow-lg mt-4" id="productos">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Id</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Color</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descuento</th>
                            <th scope="col">Pares iniciales</th>
                            <th scope="col">Pares disponibles</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Talla</th>
                            <th scope="col">Imagenes</th>
                            {{-- @can('Modo Admin') --}}
                            <th scope="col">Acciones</th>
                            {{-- @endcan --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($producto as $productos) {{-- hereeeeee --}}

                            <tr>
                                <td>{{ $productos->id }}</td>
                                <td>{{ $productos->codigo }}</td>
                                <td>{{ $productos->descripcion }}</td>
                                <td>{{ $productos->color }}</td>
                                <td>{{ $productos->precio }} Bs</td>

                                @foreach ($descuento as $descuentos)
                                    @if ($productos->id_descuento == $descuentos->id)
                                        <td>{{ $descuentos->monto }} %</td>
                                    @endif
                                @endforeach

                                @foreach ($inventario as $inventarios)
                                    @if ($productos->id_inventario == $inventarios->id)
                                        <td>{{ $inventarios->cant_inicial }}</td>
                                    @endif
                                @endforeach

                                @foreach ($inventario as $inventarios)
                                    @if ($productos->id_inventario == $inventarios->id)
                                        <td style="color: rgb(5, 5, 5);">{{ $inventarios->cant_disponible }}
                                        </td>
                                    @endif
                                @endforeach


                                @foreach ($marca as $marcas)
                                    @if ($productos->id_marca == $marcas->id)
                                        <td>{{ $marcas->nombre }}</td>
                                    @endif
                                @endforeach


                                @foreach ($talla as $tallas)
                                    @if ($productos->id_talla == $tallas->id)
                                        <td>{{ $tallas->numero }}</td>
                                    @endif
                                @endforeach


                                <td><img src="{{ asset($productos->foto) }}" width="150" height="90" /></td>

                                {{-- @can('Modo Admin') --}}
                                {{-- <td>{{ $productos->foto }}</td> --}}
                                <td>
                                    <form action="{{ route('productos.destroy', $productos) }}" method="POST">
                                        <a class="btn btn-dark btn-sm" href="{{ route('productos.show', $productos) }}">
                                            <i class="fas fa-eye"></i> Ver</a>
                                        <div style="padding-top: 0.50rem"></div>
                                        <a class="btn btn-dark btn-sm" href="{{ route('productos.edit', $productos) }}">
                                            <i class="fas fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('delete')

                                        <button style="margin-top: 0.50rem"
                                            onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
                                            value="Borrar" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                            Eliminar</button>
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



    @endsection
