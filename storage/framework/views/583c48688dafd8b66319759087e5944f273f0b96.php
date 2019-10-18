




 <?php if(Auth::user()->hasRole('Admin')): ?>
 <div class="form-group <?php echo e($errors->has('alunno') ? 'has-error' : ''); ?>">
 <?php echo Form::label('cliente', 'Cliente', ['class' => 'control-label']); ?>

<select class="form-control" name="alunno" id="alunno">
 <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($view->id); ?>"><?php echo e($view->first_name); ?> <?php echo e($view->last_name); ?> </option>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>


	  <?php else: ?>
	<input type="hidden" value="<?php echo e($userid); ?>" name="alunno" id="alunno" readonly="true" class="form-control">

	  <?php endif; ?>


 <?php if(Auth::user()->hasRole('Admin')): ?>
<div class="form-group <?php echo e($errors->has('tutor') ? 'has-error' : ''); ?>">
<?php echo Form::label('tutor', 'Tutor', ['class' => 'control-label']); ?>

<select class="form-control" name="tutor" id="tutor">
<?php $__currentLoopData = $dato2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($view->id); ?>"><?php echo e($view->first_name); ?> <?php echo e($view->last_name); ?> </option>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<?php else: ?>
	
    <?php endif; ?>





<div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('nombre', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('descripcion') ? 'has-error' : ''); ?>">
    <?php echo Form::label('descripcion', 'Descripcion', ['class' => 'control-label']); ?>

    <?php echo Form::text('descripcion', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('descripcion', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('entrega') ? 'has-error' : ''); ?>">
    <?php echo Form::label('entrega', 'Entrega', ['class' => 'control-label']); ?>

    <?php echo Form::date('entrega', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('entrega', '<p class="help-block">:message</p>'); ?>

</div>
<?php if(Auth::user()->hasRole('Admin')): ?>
<div class="form-group <?php echo e($errors->has('estado') ? 'has-error' : ''); ?>">
    <?php echo Form::label('estado', 'Estado', ['class' => 'control-label']); ?>


<select id="estado" name="estado" class="form-control">
<option value="espera_pago">Espera por Pago</option>
<option value="ejecucion">Ejecucion</option>
<option value="ejecucion">Revision</option>
<option value="ejecucion">Completado</option>
</select>

    <?php echo $errors->first('estado', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group <?php echo e($errors->has('avance') ? 'has-error' : ''); ?>">
    <?php echo Form::label('avance', 'Avance', ['class' => 'control-label']); ?>

    <select id="avance" name="avance" class="form-control">
<option value="0%">0%</option>
<option value="25%">25%</option>
<option value="50%">50%</option>
<option value="75%">75%</option>
<option value="100%">100%</option>
    </select>
    <?php echo $errors->first('avance', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('link') ? 'has-error' : ''); ?>">
    <?php echo Form::label('link', 'Link', ['class' => 'control-label']); ?>

    <?php echo Form::text('link', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('link', '<p class="help-block">:message</p>'); ?>

</div>

<?php endif; ?>
<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>
