<!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<div class="flex-shrink-0 col-lg-2  col-md-auto col-sm-auto pt-3 px-3">
  <ul class="list-unstyled ps-0" style="max-height: 100vh; overflow-y:auto;" >
     <li class="mb-1">
       <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#teacher-collapse" aria-expanded="false">
         Teachers
       </button>
       <div class="collapse" id="teacher-collapse">
         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
           <li><a href="<?php echo e(url('/teachers')); ?>" class="link-dark rounded"> All Teachers</a></li>
           <li><a href="<?php echo e(url('/teachers/create')); ?>" class="link-dark rounded">Add New</a></li>
         </ul>
       </div>
     </li>
     <li class="mb-1">
       <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#student-collapse" aria-expanded="false">
         Students
       </button>
       <div class="collapse" id="student-collapse">
         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="studentTabs">
           <li><a href="<?php echo e(url('/students')); ?>" class="link-dark rounded">All Students</a></li>
           <li><a href="<?php echo e(url('/students/create')); ?>" class="link-dark rounded" onclick="">Add New</a></li>
         </ul>
       </div>
     </li>
     <li class="mb-1">
       <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
         Video Class
       </button>
       <div class="collapse" id="orders-collapse">
         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
           <li><a href="<?php echo e(url('/videos')); ?>" class="link-dark rounded">Youtube Lectures</a></li>
         </ul>
       </div>
     </li>

   </ul>
 </div>

  



 
<?php /**PATH C:\xampp\htdocs\laravel8\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>