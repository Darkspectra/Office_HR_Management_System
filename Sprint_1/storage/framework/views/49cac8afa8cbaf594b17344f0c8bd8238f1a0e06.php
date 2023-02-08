
<?php $__env->startSection("content"); ?>
<div class="container custom-login">
    <div class="row row justify-content-around">
        <div class="col-sm-4 col-sm-offset-5">
            <form action="vlogin" method="POST">
            <div class="mb-3">
                    <?php echo csrf_field(); ?>
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                <input type="string" name="number" class="form-control" id="exampleInputNumber1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Quaries</label>
                <input type="name" name="quaries" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr_management\resources\views/vlogin.blade.php ENDPATH**/ ?>