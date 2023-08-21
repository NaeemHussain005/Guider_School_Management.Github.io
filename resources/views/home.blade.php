@extends('layouts.app')

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
@endpush

@section('content')

<div class="">
    @if (session('status'))
    <div class="alert alert-success" role="alert">

        {{ session('status') }}
    </div>
    @endif

<h1>Admin Panel</h1>
<a href="{{ route('show') }}" >User management</a>
<a href="{{ route('jobs') }}" >Jobs</a>
<a href="{{ route('admissions') }}" >admissions</a>

    
@endsection
