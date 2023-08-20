@extends('layouts.frontend-master')

@section('body')
<!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url({{ asset('/images/breadcrumb_bg_1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Jobs</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('jobs') }}">Active Jobs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->

<section class="tf__courses_page mt_190 xs_mt_95">
<div class="col-lg-12">
    <h2 id="tableHeading" class="form-title" style="text-align: center; color: #1969B3; font-size: 40px; font-weight: bold; margin-top: 2px; margin-bottom: 20px; text-transform: uppercase; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Active Jobs</h2>
    <table id="activeJobsTable" class="table table-bordered">
        <thead>
            <tr>
                <th>S#</th>
                <th>Position Title</th>
                <th>Qualification</th>
                <th>Department</th>
                <th>Job Description</th>
                <th>Last Date to Apply</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
               <tr>
                <td>{{ $user->id }}</td>
               <td>{{ $user->job_title }}</td>
               <td>{{ $user->eligibility_criteria }}</td>
               <td>{{ $user->department }}</td>
               <td>{{ $user->job_description }}</td>
               <td>{{ date('d-m-Y', strtotime($user->lastdateofapply)) }}</td>
               
                <td class="data-label"><button><a href="{{ route('applyJob') }}">apply now</a></button>
                    {{-- <a href="{{ route('uploadpage', ['job_applied_for' => $job->job_title]) }}" style="text-decoration: underline; color: #1969B3; font-weight: bold;">
                        Apply Now
                    </a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
@endsection