

<?php $__env->startSection('body'); ?>
<!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(<?php echo e(asset('/images/breadcrumb_bg_1.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Jobs</h2>
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('jobs')); ?>">Active Jobs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->

<section class="tf__courses_page mt_190 xs_mt_95">
<div class="col-lg-12">
    <h2 id="tableHeading" class="form-title" style="text-align: center; color: #1969B3; font-size: 40px; font-weight: bold; margin-top: 2px; margin-bottom: 20px; text-transform: uppercase; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Active Jobs</h2>
    <table id="activeJobsTable" class="table table-bordered">
        <thead>
            <tr>
                <th>S#</th>
                <th>Position Title</th>
                <th>Qualification</th>
                <th>Department</th>
                <th>Job Description</th>
                <th>Last Date to Apply</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                <td><?php echo e($user->id); ?></td>
               <td><?php echo e($user->job_title); ?></td>
               <td><?php echo e($user->eligibility_criteria); ?></td>
               <td><?php echo e($user->department); ?></td>
               <td><?php echo e($user->job_description); ?></td>
               <td><?php echo e(date('d-m-Y', strtotime($user->lastdateofapply))); ?></td>
               
                <td class="data-label"><button><a href="<?php echo e(route('applyJob')); ?>">apply now</a></button>
                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/careers.blade.php ENDPATH**/ ?>