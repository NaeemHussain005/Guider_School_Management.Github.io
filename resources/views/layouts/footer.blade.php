 <!--=================================
        FOOTER START
    ==================================-->
    <footer class="tf__footer mt_100" style="background: url({{ asset('images/footer_bg.jpg') }});">
        <div class="tf__footer_overlay pt_75">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-sm-10 col-md-7 col-lg-6">
                        <div class="tf__footer_logo_area">
                            <a class="footer_logo" href="{{ route('home') }}>
                                <img src="{{ url('images/footer_logo.png') }}" alt="Guider" class="img-fluid w-100">
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
                                <li><a href="{{ route('main') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
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
                                <li><a href="{{ route('about') }}">About</a></li>
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
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('js/Font-Awesome.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <!--slick slider js-->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--counterup js-->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countup.min.js') }}"></script>
    <!--animated barfiller js-->
    <script src="{{ asset('js/animated_barfiller.js') }}"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('js/sticky_sidebar.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>