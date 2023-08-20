<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Guider School</title>

    <!-- Icons font CSS-->
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
    <link href="asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Vendor CSS-->
    <link href="asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="asset/css/main.css" rel="stylesheet" media="all">

    <script>
        $("document").ready(function(){
            setTimeout(function() {
                $('#successMessage').fadeOut('fast');
            }, 4000);

        });
    </script>
    <style>
        textarea {
            width: 100%;
            height: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: grey;
            font-family: sans-serif;
        }

        .go-back-btn {
            padding: 10px 20px;
            background-color: #1969b3;
            color: white;
            line-height: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s, border 0.3s;
        }

        .go-back-btn:hover {
            background-color: white;
            color: #3ab319;
            border: 2px solid #1969b3;
        }
    </style>
</head>
<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Post A Job</h2>
                <form action="{{url('saveJob')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-4 justify-content-center" id="successMessage">
                        @if(session()->has('success'))
                            <div class="alert alert-success error-msg">
                                <i class="fa fa-check-circle"></i>
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group">
                        <h5>
                            Job Title
                            <h5>
                                <input class="input--style-2" type="text" placeholder="Enter Job Title" name="job_title" Required>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <h5>
                                    Last Date to Apply
                                    <h5>
                                        <input class="input--style-2 " type="date" placeholder="(YYYY-MM-DD)" name="lastdateofapply" value="{{ old('date') ? old('date') : now()->format('d m y') }}" Required>
                            </div>
                        </div>
                        <div class="input-group">
                            <h5>
                                Department
                                <h5>
                                    <input class="input--style-2" type="text" placeholder="Enter Department" name="department" Required>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="input-group">
                        <h5>
                            Job Description
                            <h5>
                                <br>
                                <textarea class="form-control " name ="job_description"  rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"></textarea>
                    </div>
                    <div class="input-group">
                        <h5>
                            Eligibility Criteria
                            <h5>
                                <br>
                                <textarea class="form-control " name ="eligibility_criteria"  rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"></textarea>
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                    </div>
                </form>
                <br>
                <button class="go-back-btn" style="padding: 10px 20px; background-color: #1969b3; color: white; line-height: 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; text-decoration: none;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#1969b3'; this.style.border='2px solid #1969b3';"
                        onmouseout="this.style.backgroundColor='#1969b3'; this.style.color='white'; this.style.border='none';">
                    <span style="margin-right: 5px; font-size: 12px; line-height: 12px;">&#8592;</span><a href="{{ route('jobs') }}" style="color: white; text-decoration: none;"
                                                  onmouseover="this.style.color='#1969b3';"
                                                  onmouseout="this.style.color='white';"> Go Back</a>
                </button>



            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="asset/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="asset/vendor/select2/select2.min.js"></script>
<script src="asset/vendor/datepicker/moment.min.js"></script>
<script src="asset/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="asset/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
