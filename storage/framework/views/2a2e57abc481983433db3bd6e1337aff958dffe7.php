<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
    

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proyecto <?php echo e($proyecto->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/proyectos/proyectos')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      
                      
                      
                        <?php if(Auth::user()->hasRole('Instructor')): ?>
                       
                       <?php else: ?>   
                      
                      
                      
                        <a href="<?php echo e(url('/proyectos/proyectos/' . $proyecto->id . '/edit')); ?>" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['proyectos/proyectos', $proyecto->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Proyecto',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <?php endif; ?>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($proyecto->id); ?></td>
                                    </tr>
                                    <tr><th> Alunno </th><td> <?php echo e($proyecto->alunno); ?> </td></tr><tr><th> Tutor </th><td> <?php echo e($proyecto->tutor); ?> </td></tr><tr><th> Nombre </th><td> <?php echo e($proyecto->nombre); ?> </td></tr><tr><th> Descripcion </th><td> <?php echo e($proyecto->descripcion); ?> </td></tr><tr><th> Entrega </th><td> <?php echo e($proyecto->entrega); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>