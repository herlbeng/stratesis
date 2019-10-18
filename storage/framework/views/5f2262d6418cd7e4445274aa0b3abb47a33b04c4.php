<div class="form-group <?php echo e($errors->has('usuario') ? 'has-error' : ''); ?>">
    <?php echo Form::label('usuario', 'Usuario', ['class' => 'control-label']); ?>

    <?php echo Form::text('usuario', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('usuario', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('prueba') ? 'has-error' : ''); ?>">
    <?php echo Form::label('prueba', 'Prueba', ['class' => 'control-label']); ?>

    <?php echo Form::text('prueba', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('prueba', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('respuesta') ? 'has-error' : ''); ?>">
    <?php echo Form::label('respuesta', 'Respuesta', ['class' => 'control-label']); ?>

    <?php echo Form::text('respuesta', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('respuesta', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('puntaje') ? 'has-error' : ''); ?>">
    <?php echo Form::label('puntaje', 'Puntaje', ['class' => 'control-label']); ?>

    <?php echo Form::text('puntaje', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('puntaje', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('estado') ? 'has-error' : ''); ?>">
    <?php echo Form::label('estado', 'Estado', ['class' => 'control-label']); ?>

    <?php echo Form::text('estado', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('estado', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('notas') ? 'has-error' : ''); ?>">
    <?php echo Form::label('notas', 'Notas', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('notas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('notas', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>
