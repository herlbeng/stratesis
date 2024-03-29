<?php $__env->startSection('content'); ?>
 <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/global/vendor/animsition/animsition.css">
   <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/global/vendor/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/advanced/lightbox.css">
  
 <div class="page-header">
  <h1 class="page-title font_lato">Lightbox </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Lightbox</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel Lightbox -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Lightbox</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
              <!-- Example Single Images Lightbox -->
              <div class="example-wrap">
                <h4 class="example-title">Single Images Lightbox</h4>
                <p>Three simple popups with different scaling settings.
                  <br> 1 � fits horizontally and vertically,
                  <br> 2 � only horizontally,
                  <br> 3 � no gaps, zoom animation, close icon in top-right corner.
                </p>
                <div class="example">
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" data-plugin="magnificPopup"
                  data-main-class="mfp-img-mobile">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" data-plugin="magnificPopup">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" data-plugin="magnificPopup"
                  data-close-btn-inside="false" data-fixed-contentPos="true" data-main-class="mfp-margin-0s mfp-with-zoom"
                  data-zoom='{"enabled": "true","duration":"300"}'>
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                </div>
              </div>
              <!-- End Example Single Images Lightbox -->
            </div>
            <div class="col-md-6">
              <!-- Example Lightbox Gallery -->
              <div class="example-wrap">
                <h4 class="example-title">Lightbox Gallery</h4>
                <p>In this example lazy-loading of images is enabled for the next
                  image based on move direction.</p>
                <div class="example" id="exampleGallery">
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-4">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-5">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-6">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                </div>
              </div>
              <!-- End Example Gallery -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
              <!-- Example Zoom Gallery -->
              <div class="example-wrap">
                <h4 class="example-title">Zoom Gallery</h4>
                <p>If you wish to open the popup only after image is fully loaded,
                  you may preload image via JS. Or use scaled down image instead
                  of thumbnail. Zoom effect works only with images, for now.</p>
                <div class="example" id="exampleZoomGallery">
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-7"
                  data-source="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-8"
                  data-source="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                  <a class="inline-block" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" title="view-9"
                  data-source="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png">
                    <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
                    width="220" />
                  </a>
                </div>
              </div>
              <!-- End Example Zoom Gallery -->
            </div>
            <div class="col-md-6">
              <!-- Example With Css Animation -->
              <div class="example-wrap">
                <h4 class="example-title">With Css Animation</h4>
                <p>Animations are added with simple CSS transitions, you can make
                  them look however you wish.</p>
                <div class="example example-buttons">
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-zoom-in">Zoom</a>
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-newspaper">Newspaper</a>
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-move-horizontal">Horizontal move</a>
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-move-from-top">Move from top</a>
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-3d-unfold">3d unfold</a>
                  <a class="popup-with-css-anim btn btn-primary btn-outline" href="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                  data-effect="mfp-zoom-out">Zoom-out</a>
                </div>
              </div>
              <!-- End Example With Css Animation -->
            </div>
            <div class="clearfix visible-lg-block visible-md-block"></div>
            <div class="col-md-6">
              <!-- Example Popup With Video Rr Map -->
              <div class="example-wrap">
                <h4 class="example-title">Popup With Video Or Map</h4>
                <p>In this example lightboxes are automatically disabled on small
                  screen size and default behavior of link is triggered.</p>
                <div class="example example-buttons">
                  <a class="popup-youtube btn btn-primary btn-outline" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube video</a>
                  <a class="popup-vimeo btn btn-primary btn-outline" href="https://vimeo.com/45830194">Open Vimeo video</a>
                  <a class="popup-gmaps btn btn-primary btn-outline" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                </div>
              </div>
              <!-- End Example Popup With Video Rr Map -->
            </div>
            <div class="col-md-6">
              <!-- Example Popup With Form -->
              <div class="example-wrap">
                <h4 class="example-title">Popup With Form</h4>
                <p>Entered data is not lost if you open and close the popup or if
                  you go to another page and then press back browser button.</p>
                <div class="example">
                  <a class="btn btn-primary btn-outline" id="examplePopupForm" href="#exampleForm">Open form</a>
                  <!-- Form Itself -->
                  <form class="mfp-hide lightbox-block" id="exampleForm">
                    <h1>Form</h1>
                    <p>Lightbox has an option to automatically focus on the first
                      input. It's strongly recommended to use <code>inline</code>                      popup type for lightboxes with form instead of <code>ajax</code>                      (to keep entered data if the user accidentally refreshed
                      the page).</p>
                    <div class="form-group">
                      <label class="control-label" for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Name"
                      required>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@domain.com"
                      required>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputPhone">Phone</label>
                      <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Eg. +447500000000"
                      required>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="textarea">Textarea</label>
                      <br/>
                      <textarea class="form-control" id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
                    </div>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Example Popup With Form -->
            </div>
            <div class="clearfix visible-lg-block visible-md-block"></div>
            <div class="col-md-6">
              <!-- Example Ajax Popup -->
              <div class="example-wrap">
                <h4 class="example-title">Ajax Popup</h4>
                <p>Animations are added with simple CSS transitions, you can make
                  them look however you wish.</p>
                <div class="example example-buttons">
                  <a class="btn btn-primary btn-outline" id="examplePopupAjaxAlignTop" href="lightbox/test-ajax.tpl">Load content via ajax</a>
                  <a class="btn btn-primary btn-outline" id="examplePopupAjax" href="lightbox/test-ajax-2.tpl">Load another content via ajax</a>
                </div>
              </div>
              <!-- End Example Ajax Popup -->
            </div>
            <div class="col-md-6">
              <!-- Example Modal Popup -->
              <div class="example-wrap">
                <h4 class="example-title">Modal Popup</h4>
                <p>A modal popup disables the usual ways to close popups.</p>
                <div class="example">
                  <a class="popup-modal btn btn-primary btn-outline" href="#exampleModal">Open modal</a>
                  <div class="mfp-hide lightbox-block" id="exampleModal">
                    <h1>Modal dialog</h1>
                    <p>You won't be able to dismiss this by usual means (escape or
                      click button), but you can close it programatically based
                      on user choices or actions.</p>
                    <p><a class="popup-modal-dismiss" href="javascript:void(0)">Dismiss</a></p>
                  </div>
                </div>
              </div>
              <!-- End Example Modal Popup -->
            </div>
            <div class="clearfix visible-lg-block visible-md-block"></div>
            <div class="col-md-6">
              <!-- Example Error Handling -->
              <div class="example-wrap">
                <h4 class="example-title">Error Handling</h4>
                <p>This is just basic example of how error messages are displayed.
                  Surely, you can change text or style them.</p>
                <div class="example example-buttons">
                  <!-- Classes Mfp-Image And Mfp-Ajax Define Type Of The Popup -->
                  <a class="mfp-image btn btn-primary btn-outline" id="exampleBrokenImage" href="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Blois_Loire_Panorama_-_July_2011.jpg/640px-Blois_Loire_Panorama_-_July_2011-fake.jpg">Broken image</a>
                  <a class="mfp-ajax btn btn-primary btn-outline" id="exampleBrokenAjax" href="http://example.com/fakeg">Broken ajax request</a>
                </div>
              </div>
              <!-- End Example Error Handling -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Lightbox -->
    </div>
<br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>