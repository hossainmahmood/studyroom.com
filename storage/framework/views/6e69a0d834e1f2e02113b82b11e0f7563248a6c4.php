    
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
            <div class="card-header">Add New Video</div>
            <div class="card-body ">
                <form class="offset-3 " method="POST" action="<?php echo e(url('videos')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Course </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="courseid" placeholder="Course Title" name="courseid"
                                required></input>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Lesson</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="lessonid" placeholder="Lesson Title" name="lessonid"
                                required></input>
                        </div>
                    </div>    

 
                    <div class="form-group row">
                        <label for="department" class="col-sm-2 col-form-label">Video Link</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="videolink" placeholder="Add Youtube Link" name="videolink"></input>
                        </div>
                    </div>
                        <div class="form-group row">
                        <label for="sex" class="col-sm-2 col-form-label">Video Details</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="videodetails" placeholder="Details Of Video" name="videodetails"
                                required></input>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studyroombd.com\resources\views/admin/videos/create.blade.php ENDPATH**/ ?>