

<?php $__env->startPush('styles'); ?>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/dashboardstyles.css" rel="stylesheet" />
    
    <link href="images/favicon.png" rel="icon" type="image/png">
    <style>
        .btn-custom {
            text-decoration: none;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            width: 120px;
        }

        .btn-custom-primary {
            background-color: #0d6efd;
            color: #fff;
        }

        .btn-custom-primary:hover {
            background-color: #0a58ca;
        }

        .btn-custom-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-custom-secondary:hover {
            background-color: #5a6268;
        }

        .btn-custom-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-custom-danger:hover {
            background-color: #ae2b38;
        }

        .btn-custom-success {
            background-color: #198754;
            color: #fff;
        }

        .btn-custom-success:hover {
            background-color: #167c4b;
        }

        .edit-icon {
            margin-right: 5px;
        }

        .edit-button,
        .view-button,
        .delete-button {
            text-decoration: none;
            padding: 8px 12px;
            font-size: 14px;
            border: 2px solid transparent;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            margin-right: 5px;
            width: 100px;
            text-align: center;
            margin-bottom: 4px;
        }

        .edit-button {
            background-color: #f39c12;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #e08e0b;
        }

        .view-button {
            background-color: #3498db;
            color: #fff;
        }

        .view-button:hover {
            background-color: #2980b9;
        }

        .delete-button {
            background-color: #e74c3c;
            color: #fff;
        }

        .delete-button:hover {
            background-color: #c5392b;
        }

        .action-buttons {
            display: flex;
        }

        .action-button-box {
            margin-right: 10px;
        }

        /* Additional Styling for Table */
        .table-responsive-lg {
            margin-top: 20px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav_content">
        <main class="container">
            <h1 class="mt-4" style="font-size: 32px; font-weight: bold;">User Management</h1>
            <div class="text-right mb-4">
                <a class="btn btn-custom btn-custom-primary" href="<?php echo e(url('create')); ?>">Create New User</a>
            </div>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <table class="table table-striped table-bordered table-responsive-lg" style="font-size: 14px; width: 100%; margin: 0 auto;">
                        <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="10%">ID</th>
                            <th width="15%">Name</th>
                            <th width="15%">Email</th>
                            <th width="15%">Roles</th>
                            <th width="15%">Status</th>
                            <th width="10%">Last Login</th>
                            <th width="15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <tr>
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($i); ?></td>
                                <td>User <?php echo e($i); ?></td>
                                <td>user<?php echo e($i); ?>@example.com</td>
                                <td>user</td>
                                <td>Active</td>
                                <td>2023-08-13 09:<?php echo e($i); ?>:00</td>
                                <td class="action-buttons">
                                    <div class="action-button-box">
                                        <a class="btn btn-custom btn-custom-success view-button" href=""><i class="fas fa-eye"></i> View</a>
                                    </div>
                                    <div class="action-button-box">
                                        <a class="btn btn-custom btn-custom-primary edit-button" href=""><span class="edit-icon">&#9998;</span> Edit</a>
                                    </div>
                                    <div class="action-button-box">
                                        <a class="btn btn-custom btn-custom-danger delete-button" href=""><i class="fas fa-trash-alt"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text-right mt-4">
                <a class="btn btn-custom btn-custom-secondary btn-custom-back" href="<?php echo e(route('home')); ?>" style="font-size: 16px;">Back</a>
            </div>
        </main>
    </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/users.blade.php ENDPATH**/ ?>