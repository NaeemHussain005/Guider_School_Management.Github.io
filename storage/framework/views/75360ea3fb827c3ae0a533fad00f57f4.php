 <!--=================================
        FOOTER START
    ==================================-->
 <style>
     /* Add your custom styles here */
     .custom-bg {
         background-color: #f3f7fb; /* Blue background color */
     }
     .custom-container {
         border-radius: 10px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         padding: 20px;
         margin-top: 20px; /* Add top margin to create space */
     }
     .principal-picture {
         border: 5px solid #ffffff;
         border-radius: 10px;
         max-width: 100%;
         height: auto;
     }
     .message-box {
         background-color: #ffffff;
         border-radius: 20px;
         padding: 60px;
     }
     .teacher-name {
         font-weight: bold; /* Make the teacher's name bold */
         color: #00e74d; /* Highlighted text color (red in this example) */
         margin-top: 10px; /* Add a margin at the top to separate from the photo */
     }
 </style>
 </head>
 <body>
 <section class="custom-bg py-0">
     <div class="container custom-container text-center">
         <div class="row align-items-center">
             <div class="col-md-4">
                 <img src="<?php echo e(asset('images/principal.jpg')); ?>" alt="Principal Picture" class="principal-picture">
                 <p class="teacher-name">Haider Abbass</p>
             </div>
             <div class="col-md-8">
                 <div class="message-box">
                     <h2>Principal's Message</h2>
                     <p><b>It is easier to build strong children than to repair broken men." A wise quote
                             referring to the role that children could play in laying the foundation of a strong nation.
                             We believe in nurturing our students to become confident and responsible individuals, capable
                             of making a positive impact on society. Quality education is the key to their success, and we
                             are committed to providing the best learning environment.</b></p>
                 </div>
             </div>
         </div>
     </div>
 </section>
    <footer class="tf__footer mt_100" style="background: url(<?php echo e(asset('images/footer_bg.jpg')); ?>);">
        <div class="tf__footer_overlay pt_75">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-sm-10 col-md-7 col-lg-6">
                        <div class="tf__footer_logo_area">
                            <a class="footer_logo" href="<?php echo e(route('home')); ?>>
                                <img src="<?php echo e(url('images/footer_logo.png')); ?>" alt="Guider" class="img-fluid w-100">
                            </a>
                            <p>The Guiders School and College, Danyore, Gilgit. 
                                 Full Address. Alamdar Road Danyore Gilgit. Grade Level. 
                                 Number of Teachers. 21-30. Number of Sections. .</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-10 col-md-5 col-lg-5">
                        <div class="tf__footer_content xs_mt_50">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="<?php echo e(route('main')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                                <li><a href="<?php echo e(route('team')); ?>">Our Team</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                <li><a href="#">Make An Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-10 col-md-7 col-lg-col-lg-6">
                        <div class="tf__footer_content xs_mt_30">
                            <h3>Our Contacts</h3>
                            <p>Adress: Danyore, Gilgit, Near Back Market</p>
                            <p>
                                <span> Phone: +92-333 5689226</span>
                                <span>Fax: (058114) 56703
                                </span>
                            </p>
                            <p>
                                <span>Email: gsc512514@gmail.com</span>
                                <span>Website: guiderwebsite.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-10 col-md-5 col-lg-4 col-lg-5">
                        <div class="tf__footer_content xs_mt_45">
                            <h3>News Letter</h3>
                            <p>Our approach to itis unique around know work an we know Get hands on the you like</p>
                            <form>
                                <input type="text" placeholder="Your Email">
                                <button>send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf__copyright">
                            <p>Copyright ©Guider all rights reserved.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
        FOOTER END
    ==================================-->

    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="tf__scroll_btn"> go to top </div>
    <!--=============================
        SCROLL BUTTON END 
    ==============================-->


    <!--jquery library js-->
    <script src="<?php echo e(asset('js/jquery-3.6.3.min.js')); ?>"></script>
    <!--bootstrap js-->
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <!--font-awesome js-->
    <script src="<?php echo e(asset('js/Font-Awesome.js')); ?>"></script>
    <!--venobox js-->
    <script src="<?php echo e(asset('js/venobox.min.js')); ?>"></script>
    <!--slick slider js-->
    <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
    <!--wow js-->
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <!--counterup js-->
    <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.countup.min.js')); ?>"></script>
    <!--animated barfiller js-->
    <script src="<?php echo e(asset('js/animated_barfiller.js')); ?>"></script>
    <!--sticky sidebar js-->
    <script src="<?php echo e(asset('js/sticky_sidebar.js')); ?>"></script>
    <!--nice select js-->
    <script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>

    <!--main/custom js-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/layouts/footer.blade.php ENDPATH**/ ?>