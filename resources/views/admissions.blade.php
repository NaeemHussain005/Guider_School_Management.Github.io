@extends('layouts.app')

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                $('#successMessage').fadeOut('fast');
            }, 4000);
        });
    </script>
@endpush

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="mb-5" style="color: #333;">Admissions</h1>

        <form action="{{ url('saveAnnouncement') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="announcement">Announcement</label>
                <textarea class="form-control" name="announcement" rows="6" style="resize: vertical;"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Add Admission Announcement</button>
        </form>
        <br><br>

        <a href="{{ route('viewapplicant') }}" class="btn btn-success btn-box">View Applicants</a>
        <a href="{{ route('home') }}" class="btn btn-secondary btn-box">Back</a>

    </div>

    <style>
        .btn-box {
            display: inline-block;
            padding: 10px 20px;
            width: 150px; /* Set the desired width */
            border: none;
            border-radius: 5px;
            color: white;
            text-align: center;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn-success {
            background-color: #28a745; /* Green */
        }

        .btn-secondary {
            background-color: #007bff; /* Blue */
        }
    </style>
<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png')  }}" type="image/png" />
        <!--plugins-->
        <link href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')  }}" rel="stylesheet"/>
        <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css')  }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')  }}" rel="stylesheet" />
        <!-- loader-->
        <link href="{{ asset('backend/assets/css/pace.min.css')  }}" rel="stylesheet" />
        <script src="{{ asset('backend/assets/js/pace.min.js')  }}"></script>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')  }}" rel="stylesheet">
        <link href="{{ asset('backend/assets/css/bootstrap-extended.css')  }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="{{ asset('backend/assets/css/app.css')  }}" rel="stylesheet">
        <link href="{{ asset('backend/assets/css/icons.css')  }}" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css')  }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/css/semi-dark.css')  }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/css/header-colors.css')  }}" />
        <title>Guider School - Admin Panel</title>
    </head>

    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
@endsection
