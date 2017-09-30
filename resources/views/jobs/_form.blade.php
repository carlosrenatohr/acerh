@php
    if (request()->has('client')) {
        $cid = \App\Client::where('slug', request('client'))->first()->id;
    } else {
        $cid = (isset($job)) ? $job->client_id : null;
    }
@endphp

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title-field">Título</label>
    <input type="text" name="title" id="title-field" class="form-control"
        value="{!! isset($job) ? $job->title : ''!!}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
    <label for="client-field">Cliente</label>
    <select name="client_id" id="client-field" class="form-control">
        <option value="">Seleccione un cliente..</option>
        @foreach(\App\Client::all() as $client)
            <option value="{{ $client->id }}" {!! ($cid == $client->id) ? 'selected' : ''!!}
                >{{ $client->name }}</option>
        @endforeach
    </select>
    {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <label for="description-field">Descripción</label>
    <textarea name="description" id="description-field" class="form-control"
              cols="30" rows="3">{!! isset($job) ? $job->description : ''!!}</textarea>
</div>

<button class="btn btn-info">Guardar</button>
<a href="/jobs" class="btn btn-info">Volver</a>
{!! csrf_field() !!}