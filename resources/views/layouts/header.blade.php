<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>Guider || Online Education Learning HTML Template</title>

    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <!--=================================
        MAIN MENU START
    ==================================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Guider" class="img-fluid w-90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('main') }}">Home <i class=""></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course') }}">courses</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">contact</a>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Register</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admission') }}">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('career') }}">Careers</a>
                    </li>
                </ul>
                
                   {{-- <li class="nav-item">
                        <a class="nav-link common btn" href="{{ route('login') }}">Login</a>
                    </li>  --}}
                    
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            <li><a href="courses_details.html">courses details</a></li>
                            <li><a href="blog_details.html">blog details</a></li>
                            <li><a href="events.html">event</a></li>
                            <li><a href="event_details.html">event details</a></li>
                            <li><a href="team.html">team</a></li>
                            <li><a href="team_details.html">team details </a></li>
                            <li><a href="error.html">error</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="sign_in.html">sign in</a></li>
                            <li><a href="sign_up.html">sign up</a></li>
                            <li><a href="terms_condition.html">terms and condition</a></li>
                            <li><a href="privacy_policy.html">privacy policy</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="contact.html">contact</a>
                    </li>
                   --}}
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
        MAIN MENU END
    ==================================-->