

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <h1>Admin Panel</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue" style="width: 100%; height: 10rem;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="<?php echo e(route('show')); ?>" style="text-decoration: none; background-color: #0d6efd; color: #fff; border: 2px solid #0a58ca; border-radius: 5px; font-weight: bold; display: block; width: 100%; height: 100%;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                                <span style="margin-right: 5px;"><i class="fa fa-users" aria-hidden="true"></i></span>
                                <span style="font-size: 1.25rem;">User Management</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness" style="width: 100%; height: 10rem;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="<?php echo e(route('jobs')); ?>" style="text-decoration: none; background-color: #198754; color: #fff; border: 2px solid #167c4b; border-radius: 5px; font-weight: bold; display: block; width: 100%; height: 100%;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                                <span style="margin-right: 5px;"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                <span style="font-size: 1.25rem;">Jobs</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza" style="width: 100%; height: 10rem;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="<?php echo e(route('admissions')); ?>" style="text-decoration: none; background-color: #dc3545; color: #fff; border: 2px solid #ae2b38; border-radius: 5px; font-weight: bold; display: block; width: 100%; height: 100%;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                                <span style="margin-right: 5px;"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                <span style="font-size: 1.25rem;">Admissions</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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

    <body>
    <!--wrapper-->

                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Site Traffic</h5>
                                    </div>
                                    <div class="dropdown options ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-primary"></i>New Visitor</span>
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-success"></i>Old Visitor</span>
                                </div>
                                <div class="chart-container-1">
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">45.87M</h5>
                                        <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">15:48</h5>
                                        <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">245.65</h5>
                                        <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0">Top Referral</h5>
                                    <div class="dropdown options ms-auto">
                                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-js-container2 mt-4">
                                    <div class="piechart-legend">
                                        <h2 class="mb-1">98,256</h2>
                                        <h6 class="mb-0">Total Visits</h6>
                                    </div>
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                                    Direct
                                    <span class="badge bg-primary rounded-pill">558</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Affiliate
                                    <span class="badge bg-success rounded-pill">204</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Google
                                    <span class="badge bg-danger rounded-pill">108</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--End Row-->


                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="w_chart easy-dash-chart1" data-percent="60">
                                        <span class="w_percent"></span>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Facebook Followers</h6>
                                        <small class="mb-0">22.14% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
                                    </div>
                                    <div class="ms-auto fs-1 text-facebook"><i class='bx bxl-facebook'></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="w_chart easy-dash-chart2" data-percent="65">
                                        <span class="w_percent"></span>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Twitter Tweets</h6>
                                        <small class="mb-0">32.15% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
                                    </div>
                                    <div class="ms-auto fs-1 text-twitter"><i class='bx bxl-twitter'></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="w_chart easy-dash-chart3" data-percent="75">
                                        <span class="w_percent"></span>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Youtube Subscribers</h6>
                                        <small class="mb-0">58.24% <i class='bx bxs-up-arrow align-middle me-1'></i>Since Last Week</small>
                                    </div>
                                    <div class="ms-auto fs-1 text-youtube"><i class='bx bxl-youtube'></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->
        <!--end page wrapper -->

        <!-- search modal -->
        <div class="modal" id="SearchModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header gap-2">
                        <div class="position-relative popup-search w-100">
                            <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
                            <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
                        </div>
                        <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="search-list">
                            <p class="mb-1">Html Templates</p>
                            <div class="list-group">
                                <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
                            </div>
                            <p class="mb-1 mt-3">Web Designe Company</p>
                            <div class="list-group">
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
                            </div>
                            <p class="mb-1 mt-3">Software Development</p>
                            <div class="list-group">
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
                            </div>
                            <p class="mb-1 mt-3">Online Shoping Portals</p>
                            <div class="list-group">
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
                                <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search modal -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('backend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('backend/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"')); ?>></script>
    <script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/chartjs/js/chart.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/jquery-knob/excanvas.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/jquery-knob/jquery.knob.js')); ?>"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="<?php echo e(asset('backend/assets/js/index.js')); ?>"></script>
    <!--app JS-->
    <script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>



    </body>

    </html>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/home.blade.php ENDPATH**/ ?>