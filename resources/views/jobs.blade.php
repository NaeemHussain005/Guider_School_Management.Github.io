@extends('layouts.app')

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
@endpush
@push('styles')
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    
@endpush
@section('content')

<div class="">
    @if (session('status'))
    <div class="alert alert-success" role="alert">

        {{ session('status') }}
    </div>
    @endif

<h1>Jobs</h1>
<a href="{{ route('postJob') }}" >Post a new Job</a>
{{-- <a href="{{ route('appliedJob') }}" >view applied Jobs</a> --}}
<table class="table">
    <thead>
              <tr class="filters">
                  <!-- <th><input type="text" class="form-control" placeholder="S.No" disabled></th> -->
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Job Title" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="DOA" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Department" disabled></th>
                  <!-- <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Job Description" disabled></th> -->
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Eligibilty Criteria" disabled></th> 
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Unpost" disabled></th>
              </tr>
          </thead>
      <tbody>
         @foreach ($users as $user)
        <tr>
        <!-- <td>{{ $user->id }}</td>   -->
        <td>{{ $user->job_title }}</td>
        <td>{{ date('d-m-Y', strtotime($user->lastdateofapply)) }}</td>
        <td>{{ $user->department }}</td>
        <!-- <td>{{ $user->job_description }}</td> -->
        <td>{{ $user->eligibility_criteria }}</td>
        {{-- <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>--}}
        <td><a href = 'delete/{{ $user->id }}'>Unpost</a></td> 
        </tr>
        @endforeach
      </tbody>
    </table>

    <br>
    <a href="{{ route('home') }}" >Back</a>
   
@endsection
