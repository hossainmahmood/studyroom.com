
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
        <div class="card-header">Add Course</div>
        <div class="card-body ">
            <form class="offset-3 " method="POST" action="<?php echo e(url('courses')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Course Name </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="name" placeholder="Courses Name"
                            name="coursename" required></input>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="category" name="category">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cat_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="duration" class="col-sm-2 col-form-label">Course Duration </label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control " id="duration" placeholder="Duration" name="duration"
                            required></input>
                    </div>
                    <span class="col-sm-2">
                            <select class="form-control"  name="durationslot">
                                <option>Day</option>
                                <option>Month</option>
                                <option>Year</option>
                            </select>
                    </span>
                </div>

                <div class="form-group row">
                    <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="startdate" placeholder="Start Date"
                            name="startdate"></input>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studyroombd.com\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>