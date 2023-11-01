
<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    

    <div class="card">
        <div class="card-header">Add Teacher</div>
        <div class="card-body ">
            <form class="offset-3 " method="POST" action="<?php echo e(url('videos')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Title </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="name" placeholder="Video Title" name="name"
                            required></input>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sex" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="sex" placeholder="Youtube Link" name="sex"
                            required></input>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/studyroombd.com/resources/views/admin/videos/create.blade.php ENDPATH**/ ?>