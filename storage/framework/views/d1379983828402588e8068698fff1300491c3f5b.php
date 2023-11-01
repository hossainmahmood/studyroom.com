


<?php $__env->startSection('content'); ?>


  <h2 class="section-heading mb-4">
    Create New Video
  </h2>

  <form method="post" action="<?php echo e(url('videos')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
      <label for="videoTitle" class="col-sm-2 col-form-label">Title Of Video</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="videoTitle" value="Video Title">
      </div>
    </div>
    <div class="form-group row">
      <label for="videoLink" class="col-sm-2 col-form-label">Youtube Video Link</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="videoLink" placeholder="Video Link">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



  <?php $__env->stopSection(); ?>
  


<?php echo $__env->make('admin.layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studyroombd-\resources\views/admin/videos/create.blade.php ENDPATH**/ ?>