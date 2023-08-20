

<?php $__env->startPush('scripts'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/style.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <h1 class="mb-5" style="color: #333;">Applicants</h1>

        <table class="table">
            <thead>
            <tr class="filters">
                <th><input type="text" class="form-control" placeholder="S.No" disabled></th>
                <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                <th><input type="text" class="form-control" placeholder="Father Name" disabled></th>
                <th><input type="text" class="form-control" placeholder="Date Of Birth" disabled></th>
                <th><input type="text" class="form-control" placeholder="Phone No" disabled></th>
                <th><input type="text" class="form-control" placeholder="Address" disabled></th>
                <th><input type="text" class="form-control" placeholder="Gender" disabled></th>
                <th><input type="text" class="form-control" placeholder="CNIC No" disabled></th>
                <th><input type="text" class="form-control" placeholder="Degree" disabled></th>
                <th><input type="text" class="form-control" placeholder="Passing-Year" disabled></th>
                <th><input type="text" class="form-control" placeholder="Board" disabled></th>
                <th><input type="text" class="form-control" placeholder="Obtained Marks" disabled></th>
                <th><input type="text" class="form-control" placeholder="Total Marks" disabled></th>
                <th><input type="text" class="form-control" placeholder="School Name" disabled></th>
                <th><input type="text" class="form-control" placeholder="View" disabled></th>
                <th><input type="text" class="form-control" placeholder="Download" disabled></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->father_name); ?></td>
                    <td><?php echo e(date('d-m-Y', strtotime($item->dob))); ?></td>
                    <td><?php echo e($item->phone_no); ?></td>
                    <td><?php echo e($item->address); ?></td>
                    <td><?php echo e($item->gender); ?></td>
                    <td><?php echo e($item->cnic_no); ?></td>
                    <td><?php echo e($item->degree); ?></td>
                    <td><?php echo e($item->passing_year); ?></td>
                    <td><?php echo e($item->board); ?></td>
                    <td><?php echo e($item->obtained_marks); ?></td>
                    <td><?php echo e($item->total_marks); ?></td>
                    <td><?php echo e($item->school_name); ?></td>
                    <td><a href="<?php echo e(url('/view', $item->id)); ?>" class="btn btn-success btn-box">View</a></td>
                    <td><a href="<?php echo e(url('/download', $item->file)); ?>" class="btn btn-secondary btn-box">Download</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <br>
        <a href="<?php echo e(route('admissions')); ?>" class="btn btn-secondary btn-box">Back</a>
    </div>

    <style>
        .btn-box {
            display: inline-block;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            color: white;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn-success {
            background-color: #28a745; /* Green */
        }

        .btn-secondary {
            background-color: #007bff; /* Blue */
        }
    </style>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="<?php echo e(asset('backend/assets/images/favicon-32x32.png')); ?>" type="image/png" />
        <!--plugins-->
        <link href="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
        <link href="<?php echo e(asset('backend/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
        <!-- loader-->
        <link href="<?php echo e(asset('backend/assets/css/pace.min.css')); ?>" rel="stylesheet" />
        <script src="<?php echo e(asset('backend/assets/js/pace.min.js')); ?>"></script>
        <!-- Bootstrap CSS -->
        <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('backend/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="<?php echo e(asset('backend/assets/css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('backend/assets/css/icons.css')); ?>" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/dark-theme.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/semi-dark.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/header-colors.css')); ?>" />
        <title>Guider School - Admin Panel</title>
    </head>

    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/applicants.blade.php ENDPATH**/ ?>