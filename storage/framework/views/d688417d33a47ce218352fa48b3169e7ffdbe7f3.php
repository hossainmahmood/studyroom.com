    
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
                <form class="offset-3 " method="POST" action="<?php echo e(url('teachers')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control " id="name" placeholder="Enter Name" name="name"
                                required></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sex" class="col-sm-2 col-form-label">Sex</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="sex" placeholder="Male/Femal" name="sex"
                                required></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob"
                                required /></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Emial</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile"
                                name="mobile"></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-sm-2 col-form-label">Department</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="department" placeholder="Department"
                                name="department"></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="designation" placeholder="Designation"
                                name="designation"></input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="joindate" class="col-sm-2 col-form-label">Join Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="joindate" placeholder="Mobile"
                                name="joindate"></input>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/studyroombd.com/resources/views/admin/teachers/create.blade.php ENDPATH**/ ?>