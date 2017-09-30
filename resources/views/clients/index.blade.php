@extends('templates.main')
@section('title', 'Lista de Clientes')
@section('subtitle', '')
@section('titlePage', 'Lista de clientes')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Clientes</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-sm-12" style="margin: 10px;" >
                <a href="{{ route('clients.create') }}" class="btn btn-info pull-right">
                    <i class="fa fa-plus"> Crear</i>
                </a>
            </div>

            @if(!is_null($clients) || count($clients) > 0)
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th colspan="2">Contacto</th>
                        <th colspan="2"></th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fecha de Registro</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->contact_name }}</td>
                            <td>{{ $client->contact_phone }}</td>
                            <td>{{ $client->created }}</td>
                            <td>
                                <form action="{{ route('clients.delete', $client->id) }}" method="post">
                                    <a href="{{ route('clients.edit', [$client->id]) }}" class="btn btn-info" title="Editar Cliente">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-del" data-id="{{ $client->id }}" href="javascript:void(0);" title="Eliminar Cliente">
                                        <i class="fa fa-eraser"></i>
                                    </a>
                                    <a href="{{ route('jobs.create') }}?client={{ $client->slug }}" class="btn btn-success" title="Nueva vacante">
                                        <i class="fa fa-plus"></i> <i class="fa fa-files-o"></i>
                                    </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No hay cliente registrado!</p>
            @endif
        </div>
        <!-- /.box-body -->

        @if(count($clients) >= 15)
            <div class="box-footer">
                {{ $clients->links() }}
            </div>
        @endif
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