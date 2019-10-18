<div class="form-group {{ $errors->has('usuario') ? 'has-error' : ''}}">
    {!! Form::label('usuario', 'Usuario', ['class' => 'control-label']) !!}
    {!! Form::text('usuario', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('usuario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prueba') ? 'has-error' : ''}}">
    {!! Form::label('prueba', 'Prueba', ['class' => 'control-label']) !!}
    {!! Form::text('prueba', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('prueba', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('respuesta') ? 'has-error' : ''}}">
    {!! Form::label('respuesta', 'Respuesta', ['class' => 'control-label']) !!}
    {!! Form::text('respuesta', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('respuesta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puntaje') ? 'has-error' : ''}}">
    {!! Form::label('puntaje', 'Puntaje', ['class' => 'control-label']) !!}
    {!! Form::text('puntaje', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('puntaje', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'control-label']) !!}
    {!! Form::text('estado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('notas') ? 'has-error' : ''}}">
    {!! Form::label('notas', 'Notas', ['class' => 'control-label']) !!}
    {!! Form::textarea('notas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('notas', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
