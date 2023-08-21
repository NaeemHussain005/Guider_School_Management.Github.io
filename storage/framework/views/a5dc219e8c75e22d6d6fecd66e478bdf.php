

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="">
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">

        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

<h1>Admin Panel</h1>
<a href="<?php echo e(route('show')); ?>" >User management</a>
<a href="<?php echo e(route('jobs')); ?>" >Jobs</a>
<a href="<?php echo e(route('admissions')); ?>" >admissions</a>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/home.blade.php ENDPATH**/ ?>