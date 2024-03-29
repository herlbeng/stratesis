<?php $__env->startSection('content'); ?>
 <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/pages/invoice.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Invoice </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Invoice</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-3">
              <h4>			  
                <img width="36" class="margin-right-10" src="<?php echo e(URL::to('/')); ?>/uploads/1477189043.png" alt="...">ELEGANT</h4>
              <address>
                795 Folsom Ave, Suite 600
                <br> San Francisco, CA, 94107
                <br>
                <abbr title="Mail">E-mail:</abbr>&nbsp;&nbsp;example@google.com
                <br>
                <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;(123) 456-7890
                <br>
                <abbr title="Fax">Fax:</abbr>&nbsp;&nbsp;800-692-7753
              </address>
            </div>
            <div class="col-md-3 col-md-offset-6 text-right">
              <h4>Invoice Info</h4>
              <p>
                <a class="font-size-20" href="javascript:void(0)">#5669626</a>
                <br> To:
                <br>
                <span class="font-size-20">Machi</span>
              </p>
              <address>
                795 Folsom Ave, Suite 600
                <br> San Francisco, CA, 94107
                <br>
                <abbr title="Phone">P:</abbr>&nbsp;&nbsp;(123) 456-7890
                <br>
              </address>
              <span>Invoice Date: January 20, 2016</span>
              <br>
              <span>Due Date: January 22, 2016</span>
            </div>
          </div>
          <div class="page-invoice-table table-responsive">
            <table class="table table-hover text-right">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Description</th>
                  <th class="text-right">Quantity</th>
                  <th class="text-right">Unit Cost</th>
                  <th class="text-right">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    1
                  </td>
                  <td class="text-left">
                    Server hardware purchase
                  </td>
                  <td>
                    32
                  </td>
                  <td>
                    $75
                  </td>
                  <td>
                    $2152
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    2
                  </td>
                  <td class="text-left">
                    Office furniture purchase
                  </td>
                  <td>
                    15
                  </td>
                  <td>
                    $169
                  </td>
                  <td>
                    $4169
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    3
                  </td>
                  <td class="text-left">
                    Company Anual Dinner Catering
                  </td>
                  <td>
                    69
                  </td>
                  <td>
                    $49
                  </td>
                  <td>
                    $1260
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    4
                  </td>
                  <td class="text-left">
                    Payment for Jan 2016
                  </td>
                  <td>
                    149
                  </td>
                  <td>
                    $12
                  </td>
                  <td>
                    $866
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-right clearfix">
            <div class="pull-right">
              <p>Sub - Total amount:
                <span>$4800</span>
              </p>
              <p>VAT:
                <span>$35</span>
              </p>
              <p class="page-invoice-amount">Grand Total:
                <span>$4835</span>
              </p>
            </div>
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
              <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                to payment</span>
            </button>
            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
            onclick="javascript:window.print();">
              <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
            </button>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>
<?php $__env->stopSection(); ?>

 

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>