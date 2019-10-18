<?php $__env->startSection('content'); ?>
 
<body class="page-login layout-full page-dark">
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <?php $__currentLoopData = $settingdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
	<div class="page-content vertical-align-middle" style="background: rgba(40, 41, 41, 0.17);">
      <div class="brand">
	  <img class="navbar-brand-logo" style="height:100px" src="<?php echo e(URL::to('/')); ?>/uploads/vip.png" title="Farazisoft"/>      
      
      </div>
    
       <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>         
		 
		<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
					
						<input id="email" type="text" class="form-control" placeholder="Usuario o Email " name="email" value="<?php echo e(old('email')); ?>" required>

						<?php if($errors->has('email')): ?>
							<span class="help-block">
								<strong><?php echo e($errors->first('email')); ?></strong>
							</span>
						<?php endif; ?>					
				</div>
			
		 <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">			
				<input id="password" type="password" required class="form-control" name="password" placeholder="Contraseña">

				<?php if($errors->has('password')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('password')); ?></strong>
					</span>
				<?php endif; ?>
		</div>
		
          <div class="form-group clearfix">
		
			  <?php if($view->forget_password == 'ON'): ?>
				<a class="pull-right" href="<?php echo e(url('/password/reset')); ?>">¿No recuerdas tu contraseña?</a>
			  <?php endif; ?>
			
		  </div>
          <!--<button type="submit" class="btn btn-primary btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading.."><?php echo e(trans('app.sign_in')); ?></button>-->
        
		<button type="submit" class="btn btn-primary ladda-button btn-block" data-plugin="ladda" data-style="expand-left">
			  Entrar
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
		</button>
		
		</form>
		 <p>¿No tienes Cuenta? <a href="<?php echo e(url('/register')); ?>"> Registrate </a></p>
     
    </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>