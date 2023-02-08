
<?php $__env->startSection("content"); ?>
<div class="container custom-visitor">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="login" method="POST">
            <div class="mb-3">
                    <?php echo csrf_field(); ?>
                <label for="exampleInputPassword1" class="form-label">Your quaries</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr_management\resources\views/visitor.blade.php ENDPATH**/ ?>