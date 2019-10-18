<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proyectos</div>
                    <div class="card-body">
                       
                    <?php if(Auth::user()->hasRole('Instructor')): ?>
                       
                    <?php else: ?>   
                        <a href="<?php echo e(url('/proyectos/proyectos/create')); ?>" class="btn btn-success btn-sm" title="Add New Proyecto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    <?php endif; ?>
                        <?php echo Form::open(['method' => 'GET', 'url' => '/proyectos/proyectos', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search']); ?>

                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <?php echo Form::close(); ?>


                        <br/>
                        <br/>
                        <div class="table-responsive">
            
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Alunno</th><th>Tutor</th><th>Nombre</th><th>Descripcion</th><th>Entrega</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth::user()->hasRole('Admin')): ?>
                                <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->alunno); ?></td><td><?php echo e($item->tutor); ?></td><td><?php echo e($item->nombre); ?></td><td><?php echo e($item->descripcion); ?></td><td><?php echo e($item->entrega); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/proyectos/proyectos/' . $item->id)); ?>" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/proyectos/proyectos/' . $item->id . '/edit')); ?>" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <?php echo Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/proyectos/proyectos', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Proyecto',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>

                                <?php elseif(Auth::user()->hasRole('User')): ?>



                                <?php if($userid==$item->alunno): ?>
                                
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->alunno); ?></td><td><?php echo e($item->tutor); ?></td><td><?php echo e($item->nombre); ?></td><td><?php echo e($item->descripcion); ?></td><td><?php echo e($item->entrega); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/proyectos/proyectos/' . $item->id)); ?>" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/proyectos/proyectos/' . $item->id . '/edit')); ?>" title="Edit Proyecto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <?php echo Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/proyectos/proyectos', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Proyecto',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php else: ?>
                                
                                <?php if($userid==$item->tutor): ?>
                                
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->alunno); ?></td><td><?php echo e($item->tutor); ?></td><td><?php echo e($item->nombre); ?></td><td><?php echo e($item->descripcion); ?></td><td><?php echo e($item->entrega); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/proyectos/proyectos/' . $item->id)); ?>" title="View Proyecto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $proyectos->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>