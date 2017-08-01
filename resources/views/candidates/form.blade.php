@extends('templates.main')
@section('title', 'Aplicar a Empleo')
@section('subtitle', '')
@section('titlePage', 'Aplicación a Empleo')

@section('content')
    <div class="col-md-12 center-block">
        <form action="">
            <div class="form-group">
                <span class="control-label">Nombre</span>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <span class="control-label">Correo</span>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <span class="control-label">Ciudad</span>
                <select name="city" class="form-control">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <span class="control-label">País</span>
                <select name="country" class="form-control">
                    <option value=""></option>
                </select>
            </div>

            {{ csrf_field() }}
        </form>
    </div>
@endsection