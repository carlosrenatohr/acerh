@extends('templates.main')
@section('title', 'Lista de Clientes')
@section('subtitle', '')
@section('titlePage', 'Lista de clientes')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de vacantes</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @if(!is_null($clients))
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Telefono</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->contact_name }}</td>
                            <td>{{ $client->contact_phone }}</td>
                            <td>{{ $client->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No hay cliente registrado!</p>
            @endisset
        </div>
        <!-- /.box-body -->
        @empty($clients)
        <div class="box-footer">
            {{ $clients->links() }}
        </div>
        @endempty
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection
@push('scripts')
<!-- SlimScroll -->
<script src="{{ asset('plugins/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick.min.js') }}"></script>
@endpush