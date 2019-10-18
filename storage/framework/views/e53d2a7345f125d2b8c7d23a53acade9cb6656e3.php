<div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
    <label for="nombre" class="control-label"><?php echo e('Nombre'); ?></label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="<?php echo e(isset($proyecto->nombre) ? $proyecto->nombre : ''); ?>" >
    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('contenido') ? 'has-error' : ''); ?>">
    <label for="contenido" class="control-label"><?php echo e('Contenido'); ?></label>
    <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenido" ><?php echo e(isset($proyecto->contenido) ? $proyecto->contenido : ''); ?></textarea>
    <?php echo $errors->first('contenido', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('fecha-creacion') ? 'has-error' : ''); ?>">
    <label for="fecha-creacion" class="control-label"><?php echo e('Fecha-creacion'); ?></label>
    <input class="form-control" name="fecha-creacion" type="date" id="fecha-creacion" value="<?php echo e(isset($proyecto->fecha-creacion) ? $proyecto->fecha-creacion : ''); ?>" >
    <?php echo $errors->first('fecha-creacion', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
