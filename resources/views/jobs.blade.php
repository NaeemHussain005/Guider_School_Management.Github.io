@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1>Jobs</h1>
        <a href="{{ route('postJob') }}" style="display: inline-block; padding: 6px 12px; margin-bottom: 10px; font-size: 14px; font-weight: 400; line-height: 1.42857143; text-align: center; white-space: nowrap; vertical-align: middle; cursor: pointer; border: 1px solid transparent; border-radius: 4px; color: #fff; background-color: #337ab7; border-color: #2e6da4;">Post a new Job</a>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><input type="text" class="form-control" placeholder="Job Title" disabled></th>
                <th><input type="text" class="form-control" placeholder="DOA" disabled></th>
                <th><input type="text" class="form-control" placeholder="Department" disabled></th>
                <th><input type="text" class="form-control" placeholder="Eligibility Criteria" disabled></th>
                <th><input type="text" class="form-control" placeholder="Unpost" disabled></th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>Job Title {{ $i + 1 }}</td>
                    <td>2023-08-{{ $i + 1 }}</td>
                    <td>Department {{ $i + 1 }}</td>
                    <td>Eligibility Criteria {{ $i + 1 }}</td>
                    <td><a href='delete/{{ $i + 1 }}' class="btn btn-danger btn-sm" style="padding: 6px 12px; font-size: 14px; font-weight: 400; line-height: 1.42857143; text-align: center; white-space: nowrap; vertical-align: middle; border: 1px solid transparent; border-radius: 4px;">Unpost</a></td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
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
