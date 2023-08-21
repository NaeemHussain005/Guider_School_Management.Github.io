<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>Guider School</title>

    <link rel="icon" type="image/png" href="<?php echo e(asset('/images/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/venobox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animated_barfiller.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/spacing.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
</head>

<body>

    <!--=================================
        MAIN MENU START
    ==================================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Guider" class="img-fluid w-90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('main')); ?>">Home <i class=""></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('course')); ?>">courses</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('blog')); ?>">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('team')); ?>">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admit')); ?>">Admissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('career')); ?>">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">contact</a>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Register</a>
                </li>
                </ul>
                
                   
                    
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
        MAIN MENU END
    ==================================--><?php /**PATH F:\xampp\htdocs\Guider_School_Managment\resources\views/layouts/header.blade.php ENDPATH**/ ?>