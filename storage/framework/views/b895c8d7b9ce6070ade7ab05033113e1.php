<?php $__env->startSection('body'); ?>

    <!--=================================
        BANNER START
    ==================================-->
    <section class="tf__banner" style="background: url(<?php echo e(asset('images/banner_bg.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tf__banner_text wow fadeInUp" data-wow-duration="1.5s">
                        <h5>Welcome to Guider School Website!</h5>
                        <h1>Students of The Guider Public School</h1>
                        
                        <ul class="d-flex flex-wrap align-items-center">
                            <li>
                                <h1 data-animation="animated slideInUp" class="">Join the biggest community of Guider</h1>
                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="<?php echo e(route('about')); ?>">Learn more</a>
                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="<?php echo e(route('course')); ?>">View Courses</a></li>
                            <!-- Buttons and text container -->
                            <!-- YouTube video button -->
                                <a class="venobox play_btn" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                                <i class="fas fa-play"></i>
                                                          </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BANNER END
    ==================================-->


    <!--=================================
        CATEGORIES START
    ==================================-->
    <section class="tf__categories mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_15">
                        <h2>Our Core Values</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category light_blue">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Respect</h3>
                            <p>We treat every individual with kindness,fostering a welcoming and inclusive environment for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category blue">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Excellence</h3>
                            <p>We strive for continuous improvement and aim to achieve the highest standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category green">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Collaboration</h3>
                            <p>We value teamwork, cooperation, and open communication, to achieve more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category gray">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Integrity</h3>
                            <p>We uphold the highest standards of honesty, transparency, & ethical behavior in all our actions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category orange">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Responsibility</h3>
                            <p>We take ownership of our actions and choices, understanding their impact on our surroundings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category red">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <div class="tf__single_category_text">
                            <h3>Joy of Learning</h3>
                            <p>We foster a love for learning by creating an engaging and inspiring educational environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CATEGORIES END
    ==================================-->


    <!--=================================
        ABOUT START
    ==================================-->
    <section class="tf__about mt_250 xs_mt_195" style="background: url(<?php echo e(asset('images/about_bg.png')); ?>);">
        <div class="container">
            <div class="tf__about_top wow fadeInUp" data-wow-duration="1.5s"
                style="background: url(images/about_top_bg.jpg);">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="tf__about_top_img">
                            <img src="<?php echo e(asset('images/about_top_img.jpg')); ?>" alt="about" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="tf__about_top_text">
                            <div class="tf__about_top_text_center">
                                <h4>Our Vision</h4>
                                <p>Empowering Tomorrow's Leaders: A Journey of Excellence, Character, and Innovation</p>
                            </div>
                            <a href="<?php echo e(route('about')); ?>" class="common_btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="row">
                <div class="col-xl-5 col-md-8 col-lg-5 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__about_text">
                        <div class="tf__heading_area tf__heading_area_left mb_25">
                            <h2>Our Objectives</h2>
                        </div>
                        <ul>
                            <li>Improve Academic Performance.</li>
                            <li>Enhance Extracurricular Opportunities.</li>
                            <li>Character Education.</li>
                            <li>Cultural Exchange Initiatives.</li>
                            <li>Technology Integration.</li>
                            <li>Parent-Teacher Collaboration.</li>
                        </ul>
                        <a href="<?php echo e(route('about')); ?>" class="common_btn">about more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-9 col-md-8 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="tf__about_img">
                        <img src="<?php echo e(asset('images/about_img.png')); ?>" alt="about" class="img-fluid w-100">
                        <div class="text">
                            <i class="far fa-check-circle"></i>
                            <h3>100+</h3>
                            <p>Complete Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        ABOUT END
    ==================================-->


    <!--=================================
        EVENT START
    ==================================-->
    <section class="tf__event mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_40">
                        <h2>OUR Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row event_slider">
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_event">
                        <div class="tf__single_event_img">
                            <img src="<?php echo e(asset('images/event_img_1.jpg')); ?>" alt="event" class="img-fluid w-100">
                            <a class="event_category blue" href="#">school</a>
                        </div>
                        <div class="tf__single_event_text">
                            <a class="title" href="event_details.html">Outdoor This Games</a>
                            <p>We can provide you with a reliable handyan in London you need to included the today..</p>
                            <div class="tf__single_event_footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_event">
                        <div class="tf__single_event_img">
                            <img src="<?php echo e(asset('images/event_img_2.jpg')); ?>" alt="event" class="img-fluid w-100">
                            <a class="event_category orange" href="#">Drawing</a>
                        </div>
                        <div class="tf__single_event_text">
                            <a class="title" href="#">Engineering Studies</a>
                            <p>We can provide you with a reliable handyan in London you need to included the today..</p>
                            <div class="tf__single_event_footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_event">
                        <div class="tf__single_event_img">
                            <img src="<?php echo e(asset('images/event_img_3.jpg')); ?>" alt="event" class="img-fluid w-100">
                            <a class="event_category green" href="#">sports</a>
                        </div>
                        <div class="tf__single_event_text">
                            <a class="title" href="#">School Book Study</a>
                            <p>We can provide you with a reliable handyan in London you need to included the today..</p>
                            <div class="tf__single_event_footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_event">
                        <div class="tf__single_event_img">
                            <img src="<?php echo e(asset('images/event_img_4.jpg')); ?>" alt="event" class="img-fluid w-100">
                            <a class="event_category red" href="#">writing</a>
                        </div>
                        <div class="tf__single_event_text">
                            <a class="title" href="#">Engineering Studies</a>
                            <p>We can provide you with a reliable handyan in London you need to included the today..</p>
                            <div class="tf__single_event_footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        EVENT END
    ==================================-->


    <!--=================================
        FAQ START
    ==================================-->



























































































        </div>
    </section>
    <!--=================================
        FAQ END
    ==================================-->


    <!--=================================
        WORK START
    ==================================-->
    <section class="tf__work pt_95" style="background: url(<?php echo e(asset('images/work_bg.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_35 md_margin">
                        <h2>Our Activities</h2>
                    </div>
                </div>
            </div>
            <div class="row work_slider">
                <div class="col-xl-4">
                    <div class="tf__work_single blue">
                        <div class="tf__work_single_img">
                            <img src="<?php echo e(asset('images/work_img_1.jpg')); ?>" alt="work" class="img-fluid w-100">
                        </div>
                        <div class="tf__work_single_text">
                            <h3>Drawing Competition</h3>
                            <p>We can provide you with a reliable handyan in London. you need to included the today.</p>
                            <a href="#"><i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__work_single orange">
                        <div class="tf__work_single_img">
                            <img src="<?php echo e(asset('images/work_img_2.jpg')); ?>" alt="work" class="img-fluid w-100">
                        </div>
                        <div class="tf__work_single_text">
                            <h3>Debate Competition</h3>
                            <p>We can provide you with a reliable handyan in London. you need to included the today.</p>
                            <a href="#"><i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__work_single green">
                        <div class="tf__work_single_img">
                            <img src="<?php echo e(asset('images/work_img_3.jpg')); ?>" alt="work" class="img-fluid w-100">
                        </div>
                        <div class="tf__work_single_text">
                            <h3> One Dish Party</h3>
                            <p>We can provide you with a reliable handyan in London. you need to included the today.</p>
                            <a href="#"><i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__work_single red">
                        <div class="tf__work_single_img">
                            <img src="<?php echo e(asset('images/work_img_4.jpg')); ?>" alt="work" class="img-fluid w-100">
                        </div>
                        <div class="tf__work_single_text">
                            <h3>Students Week</h3>
                            <p>We can provide you with a reliable handyan in London. you need to included the today.</p>
                            <a href="#"><i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        WORK END
    ==================================-->


    <!--=================================
        TESTIMONIAL START
    ==================================-->













































































    <!--=================================
        TESTIMONIAL END
    ==================================-->


    <!--=================================
        ACTIVITIES START
    ==================================-->
    <section class="tf__activities mt_100 xs_mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__heading_area tf__heading_area_left mb_20">
                        <h2>Our Uniform Code</h2>
                    </div>
                    <div class="tf__activities_text">
                        <p>At Guider School, we believe that a consistent dress code contributes to a positive learning environment and helps foster a
                            sense of community among students. Our uniform code is designed to uphold standards of professionalism, respect, and inclusivity. We appreciate your cooperation in adhering to these guidelines. </p>
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="tf__activities_item light_blue">
                                    <span>
                                        <i class="fal fa-book"></i>
                                    </span>
                                    <h3>Tops</h3>
                                </div>
                                <div class="tf__activities_item green">
                                    <span>
                                        <i class="fas fa-graduation-cap"></i>
                                    </span>
                                    <h3>Engineering</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 xs_mt_0 mt_30 md_margin">
                                <div class="tf__activities_item orange">
                                    <span>
                                        <i class="far fa-university"></i>
                                    </span>
                                    <h3>Sports Training</h3>
                                </div>
                                <div class="tf__activities_item blue">
                                    <span>
                                        <i class="fas fa-books-medical"></i>
                                    </span>
                                    <h3>School Directly</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-9 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="tf__activities_img">
                        <img src="<?php echo e(asset('images/activities_img.jpg')); ?>" alt="activities" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        ACTIVITIES END
    ==================================-->


    <!--=================================
        VIDEO START
    ==================================-->
    <section class="tf__video mt_100" style="background: url(<?php echo e(asset('images/video_bg.jpg')); ?>);">
        <div class="tf__video_overlay pt_100 pb_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                        <div class="tf__video_text">
                            <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                href="https://youtu.be/xsnCYCEbdr4">
                                <i class="fas fa-play"></i>
                            </a>
                            <h4>Unlock your potential and embark on a journey of excellence at Guider School –
                                where opportunities for growth and success await."</h4>
                            <a class="common_btn" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        VIDEO END
    ==================================-->


    <!--=================================
        BLOG START
    ==================================-->
    <section class="tf__blog mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_15">
                        <h2>Our latest Blog And News.</h2>
                    </div>
                </div>
            </div>
            <div class="row blog_slider">
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="#">
                            <img src="<?php echo e(asset('images/blog_1.jpg')); ?>" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category light_blue" href="#">Sports Week</a>
                            <a class="title" href="#">Dive into a world of energy, teamwork,
                                and healthy competition during our exhilarating Sports Week at [Your School Name].</a>
                            <a class="read_btn" href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>     
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="#">
                            <img src="<?php echo e(asset('images/blog_2.jpg')); ?>" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category orange" href="#">Students Week</a>
                            <a class="title" href="#">Experience a dynamic and enriching week filled with engaging workshops, inspiring talks, thrilling competitions, and unforgettable moments during
                                our vibrant Students Week at [Your School Name]. Join us as we celebrate learning, creativity, and community activity.</a>
                            <a class="read_btn" href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_blog">
                        <a class="tf__single_blog_img" href="#">
                            <img src="<?php echo e(asset('images/blog_3.jpg')); ?>" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="tf__single_blog_text">
                            <a class="category green" href="#">Annual Day</a>
                            <a class="title" href="#">Experience a vibrant showcase of talent, creativity, and unity at our much-awaited Annual Day – a celebration
                                where our students take the stage to shine brightly and share the joy of learning with our school community.</a>
                            <a class="read_btn" href="#">Read More <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>















                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BLOG END
    ==================================-->  
<?php $__env->stopSection(); ?>


    
<?php echo $__env->make('layouts.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Guider_School_Management\resources\views/main.blade.php ENDPATH**/ ?>