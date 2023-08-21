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

<h1>Applicants</h1>

{{-- <a href="{{ route('applicants') }}" >view applied Jobs</a>  --}}
<table class="table">
    <thead>
              <tr class="filters">
                            <tr  class="filters">
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="S.No" disabled></th> 
                  <th style="font-size:9px";><input  style="font-size:12px"; type="text" class="form-control" placeholder="Name" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Father Name" disabled></th>
                  <th style="font-size:9px";><input  style="font-size:12px"; type="text" class="form-control" placeholder="Date Of Birth" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Phone No" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Address" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Gender" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="CNIC No" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Degree" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Passing-Year" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Board" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Obtained Marks" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Total Marks" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="School Name" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="CV(FILE)" disabled></th>
                  <th style="font-size:9px";><input style="font-size:12px"; type="text" class="form-control" placeholder="Result(file)" disabled></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $data)
                    <tr>
                    <td>{{ $data->id }}</td>   
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->father_name}}</td>
                   <td>{{ date('d-m-Y', strtotime($data->dob)) }}
                    <td>{{ $data->phone_no }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->cnic_no }}</td>
                    <td>{{ $data->degree }}</td>
                    <td>{{ $data->passing_year }}</td>
                    <td>{{ $data->board}}</td>
                    <td>{{ $data->obtained_marks }}</td>
                    <td>{{ $data->total_marks}}</td>
                    <td>{{ $data->school_name}}</td>
                    <td><a href="{{url('/view',$data->id)}}"><span class="cv-link-icon">&#128065;</span></a>
                    <a href="{{ url('download', ['file' => $data->cv_file]) }}"><span class="cv-link-icon">&#128229;</span></a>
                    <td><a href="{{url('/viewfile',$data->id)}}"><span class="cv-link-icon">&#128065;</span></a>
                    <a href="{{ url('downloadresult', ['file' => $data->result_file]) }}"><span class="cv-link-icon">&#128229;</span></a></td> 
                    </tr>
                    @endforeach
                        </tbody>

                    </table>
    <br>
    <a href="{{ route('admissions') }}" >Back</a>
   
@endsection
