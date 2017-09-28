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
            <div class="col-sm-12">
                <a href="{{ route('jobs.create') }}" class="btn btn-info pull-right">
                    <i class="fa fa-plus">Crear</i>
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Cliente</th>
                        <th>Descripcion</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->client->company ? $job->client->company : $job->client_id }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ date('d-m-Y h:iA', strtotime($job->created_at)) }}</td>
                            <td class="">
                                <form action="{{ route('jobs.delete', $job->id) }}" class="job-del" method="post" style="margin: 0;">
                                    <a href="{{ route('jobs.edit', [$job->client->name, $job->id]) }}" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-del" data-id="{{ $job->id }}" href="javascript:void(0);">
                                        <i class="fa fa-eraser"></i>
                                    </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    {!! csrf_field() !!}
                                </form>
                            </td>
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
        @if(count($jobs) >= 15) {{--@empty($jobs)--}}
        <div class="box-footer">
            {{ $jobs->links() }}
        </div>
        @endunless
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection
@push('scripts')
<!-- SlimScroll -->
<script src="{{ asset('plugins/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick.min.js') }}"></script>
<script src="{{ asset('js/acerh.js') }}"></script>
@endpush