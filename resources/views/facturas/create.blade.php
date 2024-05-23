@extends('adminlte::page')

@section('title', 'Quality-Store')


@section('content_header')
    <h1>Registro de Nota de facturas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('facturas.store') }}" method="post">
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-3">

                        <div class="form-group col-md-10">
                            <label for="Nro_aut">Ingrese Nro Autorización</label>
                            <input type="text" name="Nro_aut" class="form-control" value="{{ old('Nro_aut') }}" min="1"
                                max="6" maxlength="6" size="0" pattern="[0-9]{1,6}" placeholder="Nro Autorizacion" required>
                            @error('Nro_aut')
                                <small>*{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group col-md-10">
                            <label for="Fecha_f">Ingrese Fecha Factura | Ejemplo: 2025-01-01</label>
                            <input type="text" name="Fecha_f" placeholder="yyyy-mm-dd" class="form-control"
                                value="{{ old('Fecha_f') }}" id="datetimepicker" autocomplete="off" min="1997-01-01"
                                max="2030-12-31" required>
                            @error('Fecha_f')
                                <small>*{{ $message }}</small>
                                <br><br>
                            @enderror
                        </div>
                        <div class="form-group col-md-10">
                            <label for="nit">Ingrese el Nit/Ci</label>
                            <input type="text" name="nit" class="form-control" value="{{ old('nit') }}" id="nit" min="1"
                                max="15" maxlength="15" size="0" pattern="[0-9]{1,15}" placeholder="Nit/Ci" required>
                            @error('nit')
                                <small>*{{ $message }}</small>
                                <br><br>
                            @enderror
                        </div>
                        <div class="form-group col-md-10">
                            <label for="monTotal">Ingrese el Monto Total</label>
                            <input type="text" name="monTotal" class="form-control" value="{{ old('monTotal') }}"
                                id="monTotal" min="1" max="4" maxlength="4" size="0" pattern="[0-9]{1,4}" placeholder="Bs"
                                required>
                            @error('monTotal')
                                <small>*{{ $message }}</small>
                                <br><br>
                            @enderror
                        </div>
                        <div class="form-group col-md-10">
                            <label for="Id_venta">Ingrese el Nro Venta</label>
                            <input type="text" name="Id_venta" class="form-control" value="{{ old('Id_venta') }}"
                                id="Id_venta" min="1" max="10" maxlength="10" size="0" pattern="[0-9]{1,10}"
                                placeholder="Nro Venta" required>
                            @error('Id_venta')
                                <small>*{{ $message }}</small>
                                <br><br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Añadir Nota de factura</button>
                            <a class="btn btn-danger" href="{{ route('facturas.index') }}">Volver</a>
                        </div>
                    </div>
            </form>

        </div>
    </div>


@stop

@section('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}">
@stop

@section('js')
    <script src="{{ asset('datetimepicker/jquery.js') }}"></script>
    <script src="{{ asset('datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            jQuery('#datetimepicker').datetimepicker();
        });
    </script>
@stop
