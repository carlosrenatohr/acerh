@extends('templates.main')
@section('title', 'Lista de vacantes')
@section('subtitle', '')
@section('titlePage', 'Lista de vacantes')

@section('content')
    <div class="callout callout-info">
        <h4>Ojo!</h4>

        <p>Puedes crear, editar y eliminar vacantes de la lista de registros desde esta vista.</p>
    </div>
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
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Cliente</th>
                        <th>Descripcion</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
{{--                            <td>{{ $job->client_id }}</td>--}}
                            <td>{{ $job->client->company ? $job->client->company : $job->client_id }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" align="center">No hay vacantes registradas!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        @empty($jobs)
        <div class="box-footer">
            {{ $jobs->links() }}
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