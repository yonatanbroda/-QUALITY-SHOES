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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection

@section('content')
    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>NOTA DE VENTAS</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('notaventas.create') }}"><i class="fas fa-money-check"></i> Registrar
                nota de venta</a>
            {{-- @endcan --}}

            <button onclick="printDiv('printableArea')" type="button" value="Imprimir" class="btn btn-dark"><i
                    class="fas fa-print"></i>
                Imprimir</button>

        </div>

        <div id="printableArea">
            <div class="card-body table-responsive">
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
                                <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> Quality-Store@gmail.com
                                </h5>
                            </figcaption>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered shadow-lg mt-4" id="notaventas">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Vendedor</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Monto total </th>

                            {{-- @can('Modo Admin') --}}
                            <!--<th class="text-center">Acciones</th>-->
                            {{-- @endcan --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notaventa as $notaventas) {{-- hereeeeee --}}
                            <tr>
                                <td>{{ $notaventas->id }}</td>

                                @foreach ($user as $users)
                                    @if ($notaventas->id_vendedor == $users->id)
                                        <td class="text-center">{{ $users->name }} </td>
                                    @endif
                                @endforeach

                                @foreach ($user as $users)
                                    @if ($notaventas->id_cliente == $users->id)
                                        <td class="text-center">{{ $users->name }} </td>
                                    @endif
                                @endforeach

                                <td class="text-center">{{ $notaventas->monto_total }}.Bs</td>

                                <!-- <td class="text-center"><a class="btn btn-dark btn-sm" href="#">
                                                                            <i class="fas fa-eye"></i> Ver</a></td>-->
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
        $('#notaventas').DataTable({
            autoWidth: false
        });
    </script>
@endsection
