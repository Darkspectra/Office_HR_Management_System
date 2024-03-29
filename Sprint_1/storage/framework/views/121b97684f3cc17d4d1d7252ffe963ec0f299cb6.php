<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR_Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent("content"); ?>
    <?php echo e(View::make('footer')); ?>

</body>
<style>
    .custom-login{
        height: 700px;
        padding-top: 100px;
    }
    .btn-primary{
        margin-left: 5%;
    }
    .panel-footer{
        color: black;
    }
</style>
</html><?php /**PATH C:\xampp\htdocs\hr_management\resources\views/master.blade.php ENDPATH**/ ?>