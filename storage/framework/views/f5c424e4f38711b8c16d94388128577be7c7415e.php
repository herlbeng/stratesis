

 <?php if(Auth::user()->hasRole('Admin')): ?>
 <div class="form-group <?php echo e($errors->has('cliente') ? 'has-error' : ''); ?>">
 <?php echo Form::label('cliente', 'Cliente', ['class' => 'control-label']); ?>

<select class="form-control" name="cliente" id="cliente">

 <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($view->id); ?>"><?php echo e($view->first_name); ?> <?php echo e($view->last_name); ?> </option>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>


	  <?php else: ?>
	<input type="hidden" value="<?php echo e($userid); ?>" name="cliente" id="cliente" readonly="true" class="form-control">

	  <?php endif; ?>
<div class="form-group <?php echo e($errors->has('referencia') ? 'has-error' : ''); ?>">
    <?php echo Form::label('referencia', 'Referencia', ['class' => 'control-label']); ?>

    <?php echo Form::text('referencia', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('referencia', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('modo') ? 'has-error' : ''); ?>">
    <?php echo Form::label('modo', 'Modo', ['class' => 'control-label']); ?>

   <select class="form-control" name="modo" id="modo">
   <option value="transferencia">Transferencia</option>
   <option value="transferencia">Deposito</option>
   <option value="transferencia">Efectivo</option>
   </select>
    <?php echo $errors->first('modo', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('banco') ? 'has-error' : ''); ?>">
    <?php echo Form::label('banco', 'Banco', ['class' => 'control-label']); ?>

  

<select class="form-control" name="banco" id="banco">

<?php $__currentLoopData = $dato2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($view->id); ?>"><?php echo e($view->nombre); ?>  </option>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>


    <?php echo $errors->first('banco', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('monto') ? 'has-error' : ''); ?>">
    <?php echo Form::label('monto', 'Monto', ['class' => 'control-label']); ?>

    <?php echo Form::text('monto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('monto', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('proyecto') ? 'has-error' : ''); ?>">
    <?php echo Form::label('proyecto', 'Proyecto Relacionado', ['class' => 'control-label']); ?>

<select class="form-control" id="proyecto" name="proyecto">
<?php $__currentLoopData = $dato3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($view->id); ?>"><?php echo e($view->nombre); ?>}</option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
    <?php echo $errors->first('proyecto', '<p class="help-block">:message</p>'); ?>

</div>
<?php if(Auth::user()->hasRole('Admin')): ?>
<div class="form-group <?php echo e($errors->has('estado') ? 'has-error' : ''); ?>">
    <?php echo Form::label('estado', 'Estado', ['class' => 'control-label']); ?>

    <select class="form-control" id="estado" name="estado">
    <option value="espera">Espera</option>
    <option value="revisado">Revisado</option>
    </select>
    <?php echo $errors->first('estado', '<p class="help-block">:message</p>'); ?>

</div>
<?php endif; ?>

<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>
