




 @if (Auth::user()->hasRole('Admin'))
 <div class="form-group {{ $errors->has('alunno') ? 'has-error' : ''}}">
 {!! Form::label('cliente', 'Cliente', ['class' => 'control-label']) !!}
<select class="form-control" name="alunno" id="alunno">
 @foreach($dato as $view)

<option value="{{$view->id}}">{{$view->first_name}} {{$view->last_name}} </option>


@endforeach
</select>
</div>


	  @else
	<input type="hidden" value="{{$userid}}" name="alunno" id="alunno" readonly="true" class="form-control">

	  @endif


 @if (Auth::user()->hasRole('Admin'))
<div class="form-group {{ $errors->has('tutor') ? 'has-error' : ''}}">
{!! Form::label('tutor', 'Tutor', ['class' => 'control-label']) !!}
<select class="form-control" name="tutor" id="tutor">
@foreach($dato2 as $view)

<option value="{{$view->id}}">{{$view->first_name}} {{$view->last_name}} </option>


@endforeach
</select>
</div>
@else
	
    @endif





<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::text('descripcion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entrega') ? 'has-error' : ''}}">
    {!! Form::label('entrega', 'Entrega', ['class' => 'control-label']) !!}
    {!! Form::date('entrega', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('entrega', '<p class="help-block">:message</p>') !!}
</div>
@if (Auth::user()->hasRole('Admin'))
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'control-label']) !!}

<select id="estado" name="estado" class="form-control">
<option value="espera_pago">Espera por Pago</option>
<option value="ejecucion">Ejecucion</option>
<option value="ejecucion">Revision</option>
<option value="ejecucion">Completado</option>
</select>

    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('avance') ? 'has-error' : ''}}">
    {!! Form::label('avance', 'Avance', ['class' => 'control-label']) !!}
    <select id="avance" name="avance" class="form-control">
<option value="0%">0%</option>
<option value="25%">25%</option>
<option value="50%">50%</option>
<option value="75%">75%</option>
<option value="100%">100%</option>
    </select>
    {!! $errors->first('avance', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    {!! Form::label('link', 'Link', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>

@endif
<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
