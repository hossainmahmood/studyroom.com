<?php echo e(Form::model('$teacher', ['route' => ['teachers.update', $teachers->teacherId]])); ?>

<?php echo e(Form::hidden('_method', 'put')); ?>

<?php echo e(Form::submit('Update', ['class' => 'btn btn-success'])); ?>

<?php echo e(Form::close()); ?>

<?php /**PATH /opt/lampp/htdocs/studyroombd.com/resources/views/admin/teachers/edit.blade.php ENDPATH**/ ?>