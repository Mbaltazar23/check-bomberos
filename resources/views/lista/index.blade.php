@extends('adminlte::page')

@section('template_title')
    Lista de Checkeos
@endsection

@section('content_header')
    <h1>Lista de Checkeos</h1>
    <div class="float-right">
        <a href="{{ route('listas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
            {{ __('Create New') }}
        </a>
    </div>
@stop


@section('content')
    <!-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
    @endif-->
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Herramienta</th>
                <th>Camioneta</th>
                <th>Checkeado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listas as $lista)
                <tr>
                    <td>{{ ++$i }}</td>

                    <td>{{ $lista->herramienta->nombre }}</td>
                    <td>{{ $lista->camione->matricula }}</td>
                    <td>{!! $lista->check !== 0 ? '<span class="badge badge-success">Checkeado</span>' : '<span class="badge badge-danger">No Checkeado</span>' !!}</td>


                    <td>
                        <form action="{{ route('listas.destroy', $lista->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('listas.show', $lista->id) }}"><i
                                    class="fa fa-fw fa-eye"></i></a>
                            <a class="btn btn-sm btn-success" href="{{ route('listas.edit', $lista->id) }}"><i
                                    class="fa fa-fw fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $listas->links() !!}
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css" />
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#example').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
            },
        });
    </script>
@endsection
