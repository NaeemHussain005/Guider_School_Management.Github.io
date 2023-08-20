@extends('layouts.frontend-master')

@section('body')


    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>error/404</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">error</a></li>
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
        ERROR PAGE START
    ==================================-->
    <section class="tf__error_page mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__error_text">
                        <div class="img">
                            <img src="{{ asset('images/error_img.png') }}" alt="error" class="img-fluid w-100">
                        </div>
                        <h4>Page not found</h4>
                        <p>Sorry This 404 Page Not found take a look at our most popular</p>
                        <a class="common_btn" href="#">go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        ERROR PAGE END
    ==================================-->

@endsection
    