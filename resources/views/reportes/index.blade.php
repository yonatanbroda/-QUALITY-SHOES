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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#ventas').DataTable({
            autoWidth: false
        });
    </script>
    
@endsection


@section('content')
    <br>
    @foreach ($notaventa as $notaventas)
        @php
            $numventas = 0;
            $record = 0;
            $rax = 0;
        @endphp
        @foreach ($detalleventa as $detalleventas)
            @if ($detalleventas->id_notaventa == $notaventas->id)
                @foreach ($user as $users)
                    @if ($notaventas->id_vendedor == $users->id)
                        @php
                            $nom = $notaventas->id;
                            $numventas = $numventas + 1;
                            $datos123[$nom]['nombre'] = $users->name;
                            $datos123[$nom]['ventas'] = $numventas;
                            $datos123[$nom]['monto'] = $notaventas->monto_total;
                            $datos123[$nom]['cant'] = $rax + $detalleventas->cantidad;
                            $rax = $datos123[$nom]['cant'];
                        @endphp

                    @endif
                @endforeach
            @endif
        @endforeach
    @endforeach

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="bitacora" style="width:100%">
                <thead class="bg-dark">
                    <tr>
                        <h4 class="text-center">
                            <b>RECORD DE VENTAS</b>
                            <h4>
                    </tr>
                    <tr>
                        <th scope="col">RECORD</th>
                        <th scope="col">VENDEDOR</th>
                        <th scope="col">PRODUCTOS</th>
                        <th scope="col">CANTIDAD PARES</th>
                        <th scope="col">MONTO</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i = 0; $i < 3; $i++)
                        @php
                            $win = 0;
                            $monto_t = 0;
                            $cant = 0;
                            $winvendedor = '';
                            $winnombre = '';
                            foreach ($datos123 as $key => $value) {
                                if ($datos123[$key]['monto'] > $monto_t) {
                                    $win = $datos123[$key]['ventas'];
                                    $monto_t = $datos123[$key]['monto'];
                                    $cant = $datos123[$key]['cant'];
                                    $winvendedor = $key;
                                    $winnombre = $datos123[$key]['nombre'];
                                }
                            }
                            unset($datos123[$winvendedor]);
                            $record = $record + 1;
                        @endphp
                        @if ($winvendedor != '')
                            <tr>
                                <td>{{ $record }}</td>
                                <td>{{ $winnombre }}</td>
                                <td>{{ $win }}</td>
                                <td>{{ $cant }}</td>
                                <td>{{ $monto_t }} bs</td>
                            </tr>
                        @endif
                    @endfor
                </tbody>
            </table>
        </div>
    </div>



    <div class="card">
        {{-- -Boton Imprimir --}}
        <div class="card-header">
            <button onclick="printDiv('printableArea')" type="button" value="Imprimir" class="btn btn-dark"><i
                    class="fas fa-print"></i>
                Imprimir</button>
        </div>
        {{-- -Boton imprimir --}}
        <!--
                    <form class="form-inline" method="post" name="formFechas" id="formFechas">
                        <div class="col-xs-10 col-xs-offset-3">
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha Inicio:</label>
                                <input type="date" class="form-control" name="fecha_inicio" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_final">Fecha Final:</label>
                                <input type="date" class="form-control" name="fecha_final" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>
                -->
        <div class="card-body table-responsive">
            {{-- Imprimir js --}}
            <div id="printableArea">
                {{-- -imprimir- --}}
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

                <table class="table table-striped table-bordered shadow-lg mt-4" id="ventas">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Vendedor</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Detalle</th>
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

                                <td class="text-center">{{ $notaventas->monto_total }}bs</td>

                                @php
                                    $cant = 0;
                                @endphp
                                @foreach ($detalleventa as $detalleventas)
                                    @if ($detalleventas->id_notaventa == $notaventas->id)
                                        @php
                                            $cant = $cant + $detalleventas->cantidad;
                                        @endphp
                                    @endif
                                @endforeach
                                <td class="text-center">{{ $cant }} pares</td>

                                <td>{{ $notaventas->created_at }}</td>

                                <td class="text-center"><a class="btn btn-dark btn-sm"
                                        href="{{ route('reportes.show', $notaventas) }}">
                                        <i class="fas fa-eye"></i> Ver</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('js')

    {{-- --fecha--- --}}
    <!--
    <script type="text/javascript">
        $('Formfechas').submit(function(e) {

            e.preventDefault();
            var form = $($this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: 'fechas.php',
                data: form.serialize(),
                success: function(data) {
                    $('#tabla_resultado').html('');
                    $('#tabla_resultado').append(data);
                }
            });
        });
    </script>
-->
    {{-- fecha --}}

@endsection
