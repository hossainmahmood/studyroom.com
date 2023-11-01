
<?php $__env->startSection('content'); ?>

<table id="myschoolDT" class="table table-striped table-bordered nowrap" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Sex</th>
            <th>Birth Date</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Mobile</th>
            <th>Status</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Joindate</th>
            <th>Retirement</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($teacher->fullname); ?></td>
                <td><?php echo e($teacher->sex); ?></td>
                <td><?php echo e($teacher->dob); ?></td>
                <td><?php echo e($teacher->email); ?></td>
                <td><?php echo e($teacher->phone); ?></td>
                <td><?php echo e($teacher->mobile); ?></td>
                <td><?php echo e($teacher->status); ?></td>
                <td><?php echo e($teacher->department); ?></td>
                <td><?php echo e($teacher->designation); ?></td>
                <td><?php echo e($teacher->joindate); ?></td>
                <td><?php echo e($teacher->retirement); ?></td>
                <td><?php echo e($teacher->image); ?></td>
            </tr>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin.layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studyroombd-\resources\views/admin/teachers/index.blade.php ENDPATH**/ ?>