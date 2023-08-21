@extends('layouts.app')

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<script>
    $("document").ready(function(){
        setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 4000); 

});
</script>
@endpush

@section('content')

<div class="">
    @if (session('status'))
    <div class="alert alert-success" role="alert">

        {{ session('status') }}
    </div>
    @endif

<h1>Admissions</h1> <br> <br>
<form action="{{ url('saveAnnouncement') }}" method="post">
    @csrf
    <div class="input-group">
        <h5>
          Announcement
        <h5>
            <br>
            <textarea class="form-control " name ="announcement"  rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"></textarea><br><br>
            <button type="submit">Add admission announcement</button>
        </div>
</form>
<br> <br>

<a href="{{ route('viewapplicant') }}" > View Applicants</a>
<br>
<a href="{{ route('home') }}" >Back</a>

    
@endsection
