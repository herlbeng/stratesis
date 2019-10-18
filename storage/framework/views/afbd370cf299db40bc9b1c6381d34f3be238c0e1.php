<div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('datos') ? 'has-error' : ''); ?>">
    <?php echo Form::label('datos', 'Datos', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('datos', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('datos', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('numero') ? 'has-error' : ''); ?>">
    <?php echo Form::label('numero', 'Numero', ['class' => 'control-label']); ?>

    <?php echo Form::text('numero', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('numero', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>
