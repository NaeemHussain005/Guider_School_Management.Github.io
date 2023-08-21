

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('asset/css/style.css')); ?>">
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="">
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">

        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

<h1>Jobs</h1>
<a href="<?php echo e(route('postJob')); ?>" >Post a new Job</a>

<table class="table">
    <thead>
              <tr class="filters">
                  <!-- <th><input type="text" class="form-control" placeholder="S.No" disabled></th> -->
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Job Title" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="DOA" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Department" disabled></th>
                  <!-- <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Job Description" disabled></th> -->
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Eligibilty Criteria" disabled></th>
                  
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Unpost" disabled></th>
              </tr>
          </thead>
      <tbody>
         <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <!-- <td><?php echo e($user->id); ?></td>   -->
        <td><?php echo e($user->job_title); ?></td>
        <td><?php echo e(date('d-m-Y', strtotime($user->lastdateofapply))); ?></td>
        <td><?php echo e($user->department); ?></td>
        <!-- <td><?php echo e($user->job_description); ?></td> -->
        <td><?php echo e($user->eligibility_criteria); ?></td>
        
        <td><a href = 'delete/<?php echo e($user->id); ?>'>Unpost</a></td> 
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    <br>
    <a href="<?php echo e(route('home')); ?>" >Back</a>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/jobs.blade.php ENDPATH**/ ?>