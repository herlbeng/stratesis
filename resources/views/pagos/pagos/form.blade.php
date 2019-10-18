

 @if (Auth::user()->hasRole('Admin'))
 <div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}">
 {!! Form::label('cliente', 'Cliente', ['class' => 'control-label']) !!}
<select class="form-control" name="cliente" id="cliente">

 @foreach($dato as $view)

<option value="{{$view->id}}">{{$view->first_name}} {{$view->last_name}} </option>


@endforeach
</select>
</div>


	  @else
	<input type="hidden" value="{{$userid}}" name="cliente" id="cliente" readonly="true" class="form-control">

	  @endif
<div class="form-group {{ $errors->has('referencia') ? 'has-error' : ''}}">
    {!! Form::label('referencia', 'Referencia', ['class' => 'control-label']) !!}
    {!! Form::text('referencia', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('referencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modo') ? 'has-error' : ''}}">
    {!! Form::label('modo', 'Modo', ['class' => 'control-label']) !!}
   <select class="form-control" name="modo" id="modo">
   <option value="transferencia">Transferencia</option>
   <option value="transferencia">Deposito</option>
   <option value="transferencia">Efectivo</option>
   </select>
    {!! $errors->first('modo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('banco') ? 'has-error' : ''}}">
    {!! Form::label('banco', 'Banco', ['class' => 'control-label']) !!}
  

<select class="form-control" name="banco" id="banco">

@foreach($dato2 as $view)

<option value="{{$view->id}}">{{$view->nombre}}  </option>


@endforeach
</select>


    {!! $errors->first('banco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}}">
    {!! Form::label('monto', 'Monto', ['class' => 'control-label']) !!}
    {!! Form::text('monto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('monto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proyecto') ? 'has-error' : ''}}">
    {!! Form::label('proyecto', 'Proyecto Relacionado', ['class' => 'control-label']) !!}
<select class="form-control" id="proyecto" name="proyecto">
@foreach($dato3 as $view)
<option value="{{$view->id}}">{{$view->nombre}}}</option>
@endforeach
</select>
    {!! $errors->first('proyecto', '<p class="help-block">:message</p>') !!}
</div>
@if (Auth::user()->hasRole('Admin'))
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'control-label']) !!}
    <select class="form-control" id="estado" name="estado">
    <option value="espera">Espera</option>
    <option value="revisado">Revisado</option>
    </select>
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
@endif

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
