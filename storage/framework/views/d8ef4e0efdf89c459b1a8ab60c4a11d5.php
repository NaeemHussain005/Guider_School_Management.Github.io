

<?php $__env->startSection('body'); ?>

    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(<?php echo e(asset('images/breadcrumb_bg_1.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Admissions</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Admissions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        BLOG PAGE START
    ==================================-->
    <section class="tf__blog_page mt_190 xs_mt_95">
        <div class="container">
            <p> <?php if($latestEntry): ?>
                <p><?php echo e($latestEntry->announcement); ?></p>
                
            <?php else: ?>
                <p> No Admissions Updates Yet</p>
            <?php endif; ?></p>
            <br>
            <br><br>
            <button> <a href="<?php echo e(route('apply')); ?>">Apply Now</a></button>
        </div>
    </section>
    <!--=================================
        BLOG PAGE END
    ==================================-->

<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/students.blade.php ENDPATH**/ ?>