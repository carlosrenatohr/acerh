<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name-field">Nombre</label>
    <input type="text" name="name" id="name-field" class="form-control"
           value="{!! isset($client) ? $client->name : ''!!}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email-field">Correo</label>
    <input type="email" name="email" id="email-field" class="form-control"
           value="{!! isset($client) ? $client->email : ''!!}">
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('contact_name') ? 'has-error' : ''}}">
    <label for="contactn-field">Nombre de Contacto</label>
    <input type="text" name="contact_name" id="contactn-field" class="form-control"
           value="{!! isset($client) ? $client->contact_name : ''!!}">
    {!! $errors->first('contact_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('contact_phone') ? 'has-error' : ''}}">
    <label for="contactp-field">Teléfono de Contacto</label>
    <input type="text" name="contact_phone" id="contactp-field" class="form-control"
           value="{!! isset($client) ? $client->contact_phone : ''!!}">
    {!! $errors->first('contact_phone', '<p class="help-block">:message</p>') !!}
</div>

<button class="btn btn-info">Guardar</button>
<a href="/clients" class="btn btn-info">Volver</a>
{!! csrf_field() !!}