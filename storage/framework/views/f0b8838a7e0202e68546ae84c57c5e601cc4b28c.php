<?php $__env->startSection('content'); ?>
    <style>
        .table td {
            padding: 2px;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
    </style>
    <div class="container-fluid">

    <div>Search</div>
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-light">
                <tr>
                    <th>Serial</th>
                    <th>Course Name</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Start Date</th> 
                    <th>Action</th>                        
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="viewDetails table-light">
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($course->course_name); ?></td>
                        <td><?php echo e($course->category); ?></td>
                        <td><?php echo e($course->duration); ?></td>
                        <td><?php echo e($course->startdate); ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-sm btn-info detailsbtn" type="button" data-id="<?php echo e($course->id); ?>"
                                    data-name="<?php echo e($course->course_name); ?>" data-toggle="modal"
                                    data-target="#DetailsModal">Details</button>
                                <button class="btn btn-sm btn-primary editbtn" data-toggle="modal" data-target="#EditModal"
                                    data-name="<?php echo e($course->course_name); ?>" data-id="<?php echo e($course->id); ?>">Edit</button>

                                <button class="btn btn-sm btn-danger deletebtn" data-toggle="modal"
                                    data-target="#DeleteModal" data-name="<?php echo e($course->course_name); ?>"
                                    data-id="<?php echo e($course->id); ?>">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <?php $i=$i+1; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('.viewDetails .detailsbtn').click(function(e) {
                var courseId = $(this).data('id');
                var url = document.location;

                $.ajax({
                    url: url + '/' + courseId,
                    data: {
                        courseId: courseId
                    },
                    type: 'GET',
                    dataType: 'json'
                }).done(function(resp) {

                    var data = "";
                    var oddRow = false;
                    var cnt = 0;

                    for (key in resp) {
                        var col = "";
                        if (cnt % 2 == 0) {
                            col = " bg-light"
                        }
                        cnt++;
                        temp = '<div class="col-6 p-1 border-bottom ' + col + '">' + key +
                            '</div><div class="col-6 p-1 border-bottom ' + col + '">' + resp[key] +
                            '</div>'
                        data += temp;
                    }
                    $('#DetailsModal .modal-body').html('<div class="row p-3">' + data + "</div>");
                });
            });

            $('.viewDetails .editbtn').click(function(e) {
                var courseId = $(this).data('id');
                var courseName = $(this).data('name');
                var url = document.location;
                $('#EditModal .modal-title').html(courseName);
                var formActionUrl = url + '/' + courseId;

                $.ajax({
                    url: url + '/' + courseId + '/edit',
                    type: 'GET',
                    dataType: 'json'
                }).done(function(resp) {
                    console.log(resp)
                    $("#updateForm").attr('action',
                        formActionUrl); //To set Form action Url in runtime
                    var data = "";
                    var oddRow = false;
                    var cnt = 0;

                    for (key in resp.course) {
                        var col = "";

                        //to make id created_at and updated_at text input field readonly
                        if (key == 'id' || key == 'created_at' || key == 'updated_at') {
                            readonlycon = "readonly";
                        } else readonlycon = null;

                        if (cnt % 2 == 0) {
                            col = " bg-light"
                        }
                        cnt++;
                        temp = '<div class="col-6 p-1 border-bottom ' + col + '">' + key +
                            '</div> <div class="col-6 p-1 border-bottom ' + col +
                            '"><input id = "' + key + '" ' + readonlycon + ' type="text" name = ' +
                            key + '  class="form-control" value="' + resp
                            .course[key] + '"></input></div>'
                        data += temp;
                    }

                    $('#EditModal .modal-body-content').html('<div class="row p-3">' + data +
                        "</div>");
                });
            });

            $('.viewDetails .deletebtn').click(function(e) {
                var courseId = $(this).data('id');
                var courseName = $(this).data('name');
                var url = document.location;
                $('#DeleteModal .warning-title').html(courseName);
                var formActionUrl = url + '/' + courseId;
                $("#deleteForm").attr('action', formActionUrl);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
    <div id="DetailsModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="EditModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="updateForm" action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-body-content">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submitBtn">Update</button>
                    <button type="button" class="btn  btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="DeleteModal" class="modal fade " data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="alert alert-warning" role="alert">
                        This is a warning alert—check it out!
                      </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>You are Removing</p><Span><p class="warning-title" id="staticBackdropLabel"></p></Span>
                    <form id="deleteForm" action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="submitBtn">Delete</button>
                    <button type="button" class="btn  btn-primary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studyroombd.com\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>