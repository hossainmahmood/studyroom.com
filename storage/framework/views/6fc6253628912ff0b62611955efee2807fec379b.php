<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <form method="POST" action="<?php echo e(url('teachers')); ?>"  >
    <?php echo csrf_field(); ?>
   
    <div class="form-group">
    <label for="name">Full Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"></input>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

</body>
</html>
<?php /**PATH /var/www/html/laravel8/resources/views/admin/teacher/create.blade.php ENDPATH**/ ?>