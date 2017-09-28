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
            <h3 class="box-title">Crear vacante</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="{{ route('jobs.store') }}" method="post" class="" role="form">
                @include('jobs._form')
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
@push('scripts')
    <!-- SlimScroll -->
    <script src="{{ asset('plugins/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/fastclick.min.js') }}"></script>
@endpush