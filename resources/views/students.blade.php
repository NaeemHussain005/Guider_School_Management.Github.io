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
                        <h2>Admissions</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Admissions</a></li>
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
        BLOG PAGE START
    ==================================-->
    <section class="tf__blog_page mt_190 xs_mt_95">
        <div class="container">
            <p> @if($latestEntry)
                <p>{{ $latestEntry->announcement }}</p>
                
            @else
                <p> No Admissions Updates Yet</p>
            @endif</p>
            <br>
            <br><br>
            <button> <a href="{{ route('apply')}}">Apply Now</a></button>
        </div>
    </section>
    <!--=================================
        BLOG PAGE END
    ==================================-->

@endsection
    