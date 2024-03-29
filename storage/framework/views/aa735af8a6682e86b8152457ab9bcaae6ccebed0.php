<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/global/vendor/jsgrid/jsgrid.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/tables/jsgrid.css"> 
 <div class="page-header">
  <h1 class="page-title font_lato">jsGrid </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">jsGrid</li>
	</ol>
  </div>
</div> 
  <div class="page-content container-fluid">
      <div class="row">
        <div class="col-xlg-6">
          <!-- Panel Basic -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Basic</h3>
            </header>
            <div class="panel-body">
              <div id="exampleBasic"></div>
            </div>
          </div>
          <!-- End Panel Basic -->
        </div>
        <div class="col-xlg-6">
          <!-- Panel Static Data -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Static Data</h3>
            </header>
            <div class="panel-body">
              <div id="exampleStaticData"></div>
            </div>
          </div>
          <!-- End Panel Static Data -->
        </div>
        <div class="clearfix"></div>
        <div class="col-xlg-6">
          <!-- Panel OData Service -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">OData Service</h3>
            </header>
            <div class="panel-body">
              <div id="exampleOData"></div>
            </div>
          </div>
          <!-- End Panel OData Service -->
        </div>
        <div class="col-xlg-6">
          <!-- Panel Sorting -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Sorting</h3>
              <div class="panel-actions">
                <select id="sortingField" class="form-control input-sm">
                  <option>Name</option>
                  <option>Age</option>
                  <option>Address</option>
                  <option>Country</option>
                  <option>Married</option>
                </select>
              </div>
            </header>
            <div class="panel-body">
              <div id="exampleSorting"></div>
            </div>
          </div>
          <!-- End Panel Sorting -->
        </div>
        <div class="clearfix"></div>
        <div class="col-xlg-6">
          <!-- Panel Loading Data by Page -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Loading Data by Page</h3>
              <div class="panel-actions">
                <select id="pager" class="form-control input-sm">
                  <option>1</option>
                  <option selected>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                </select>
              </div>
            </header>
            <div class="panel-body">
              <div id="exampleLoadingByPage"></div>
            </div>
          </div>
          <!-- End Panel Loading Data by Page -->
        </div>
        <div class="col-xlg-6">
          <!-- Panel Custom View -->
          <div class="panel" id="custom_view">
            <header class="panel-heading">
              <h3 class="panel-title">Custom View</h3>
              <div class="panel-actions">
                <div class="btn-group btn-group-sm" data-toggle="buttons" role="group">
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="heading" checked=""> Heading
                  </label>
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="filtering" checked=""> Filtering
                  </label>
                  <label class="btn btn-outline btn-default">
                    <input type="checkbox" class="views" value="inserting"> Inserting
                  </label>
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="editing" checked=""> Editing
                  </label>
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="paging" checked=""> Paging
                  </label>
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="sorting" checked=""> Sorting
                  </label>
                  <label class="btn btn-outline btn-default active">
                    <input type="checkbox" class="views" value="selecting" checked=""> Selecting
                  </label>
                </div>
              </div>
            </header>
            <div class="panel-body">
              <div id="exampleCustomView"></div>
            </div>
          </div>
          <!-- End Panel Custom View -->
        </div>
        <div class="clearfix"></div>
        <div class="col-xlg-6">
          <!-- Panel Custom Row Renderer -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Custom Row Renderer</h3>
            </header>
            <div class="panel-body">
              <div id="exampleCustomRowRenderer"></div>
            </div>
          </div>
          <!-- End Panel Custom Row Renderer -->
        </div>
        <div class="col-xlg-6">
          <!-- Panel Batch Delete -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Batch Delete</h3>
            </header>
            <div class="panel-body">
              <div id="exampleBatchDelete"></div>
            </div>
          </div>
          <!-- End Panel Batch Delete -->
        </div>
        <div class="clearfix"></div>
        <div class="col-xlg-6">
          <!-- Panel Rows Reordering -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Rows Reordering</h3>
            </header>
            <div class="panel-body">
              <div id="exampleRowsReordering"></div>
            </div>
          </div>
          <!-- End Panel Rows Reordering -->
        </div>
        <div class="col-xlg-6">
          <!-- Panel Custom Grid Field -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Custom Grid Field</h3>
            </header>
            <div class="panel-body">
              <div id="exampleCustomGridField"></div>
            </div>
          </div>
          <!-- End Panel Custom Grid Field -->
        </div>
      </div>
    </div>
<br/>
<?php $__env->stopSection(); ?>

 

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>