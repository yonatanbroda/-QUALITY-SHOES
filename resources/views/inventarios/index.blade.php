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
            <h3><b>INVENTARIO</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{-- @can('Modo Admin') --}}
            <a class="btn btn-dark" href="{{ route('inventarios.create') }}"><i class="fas fa-dolly-flatbed"></i> Registrar
                inventario</a>
            {{-- @endcan --}}
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="inventarios">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cantidad inicial</th>
                        <th>Cantidad disponible</th>
                        {{-- @can('Modo Admin') --}}
                        <th>Acciones</th>
                        {{-- @endcan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventario as $inventarios) {{-- hereeeeee --}}
                        <tr>
                            <td>{{ $inventarios->id }}</td>
                            <td>{{ $inventarios->cant_inicial }}</td>
                            <td>{{ $inventarios->cant_disponible }}</td>
                            {{-- @can('Modo Admin') --}}
                            <td>
                                <form action="{{ route('inventarios.destroy', $inventarios) }}" method="POST">
                                    <a class="btn btn-dark btn-sm" href="{{ route('inventarios.edit', $inventarios) }}"><i
                                            class="fas fa-edit"></i> Editar</a>

                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#inventarios').DataTable({
            autoWidth: false
        });
    </script>
@endsection
