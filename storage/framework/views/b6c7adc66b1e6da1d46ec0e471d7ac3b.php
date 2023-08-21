

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<script>
    $("document").ready(function(){
        setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 4000); 

});
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="">
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">

        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

<h1>Admissions</h1> <br> <br>
<form action="<?php echo e(url('saveAnnouncement')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="input-group">
        <h5>
          Announcement
        <h5>
            <br>
            <textarea class="form-control " name ="announcement"  rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"></textarea><br><br>
            <button type="submit">Add admission announcement</button>
        </div>
</form>
<br> <br>

<a href="<?php echo e(route('viewapplicant')); ?>" > View Applicants</a>
<br>
<a href="<?php echo e(route('home')); ?>" >Back</a>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/admissions.blade.php ENDPATH**/ ?>