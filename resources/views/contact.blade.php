@extends('layouts.frontend-master')

@section('body')


    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url({{ asset('images/breadcrumb_bg_1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>contact us</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('contact') }}">contact</a></li>
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
        CONTACT PAGE START
    ==================================-->
    <section class="tf__contact_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-7 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__contact_form">
                        <div class="tf__heading_area tf__heading_area_left mb_25">
                            <h5>OUR contact Us</h5>
                            <h2>Get Our Contact Now.</h2>
                        </div>
                        <p>Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-xl-12">
                                    <textarea rows="8" placeholder="Message"></textarea>
                                    <button type="submit" class="common_btn_2">SEND REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="tf__contact_text">
                        <div class="tf__contact_single">
                            <div class="icon blue">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>Call</h3>
                                <a href="callto:+92-333 5689226">+92-333 5689226</a>
                                <a href="callto:(058114) 56703">(058114) 56703</a>
                            </div>
                        </div>
                        <div class="tf__contact_single">
                            <div class="icon orange">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>mail</h3>
                                <a href="mailto:gsc512514@gmail.com">gsc512514@gmail.com</a>
                                <a href="mailto:ruzzunaeem@gmail.com">ruzzunaeem@gmail.com</a>
                            </div>
                        </div>
                        <div class="tf__contact_single">
                            <div class="icon green">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>address</h3>
                                <p>Guider School, Danyore Gilgit</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__contact_map mt_100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25849.262684787645!2d74.34891879558567!3d35.91863648403229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e649e09f4d213d%3A0x7b304a98d3771ca4!2sThe%20Guider%20School%20and%20Degree%20College!5e0!3m2!1sen!2s!4v1689438290328!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CONTACT PAGE END
    ==================================-->
@endsection

   