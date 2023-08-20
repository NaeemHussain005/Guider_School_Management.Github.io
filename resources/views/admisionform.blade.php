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
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
    <!-- Icons font CSS-->
    <link href="asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.ico">
    <!-- Main CSS-->
    <link href="asset/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">

</head>
<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Online Admission Form</h2>
                    <form action="{{ url('applyadmission') }}" method="post" enctype="multipart/form-data">
                     @csrf
                    <div class="row p-4 justify-content-center" id="successMessage">
                            @if(session()->has('success'))
                            <div class="alert alert-success error-msg">
                                <i class="fa fa-check-circle"></i>
                                {{ session()->get('success') }}
                            </div>
                            @endif
                    </div>
                    @error('file')
                    <div class="alert alert-danger mt-2" role="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 0.75rem 1.25rem; border-radius: 0.25rem;">
                    {{ $message }}
                    </div>
                    @enderror
                    <h3>Personal Information</h3>
                        <div class="input-group">
                        <h5>Name</H5>
                            <input class="input--style-2" type="text" placeholder="" name="name" Required>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="input-group">
                        <h5>Father Name</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="text" placeholder="" name="father_name" Required>
                            </div>
                        </div>
                        <div class="input-group">
                            <h5>Gender</h5>
                                    <input type="radio" name="gender" value="M"> Male
                                    <input type="radio" name="gender" value="F"> Female

                            </div>
                        <div class="input-group">
                        <h5>Date Of Birth</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="date" placeholder="YYYY-MM-DD" name="dob" value="{{ old('date') ? old('date') : now()->format('d m y') }}" Required>
                            </div>
                        </div>
						<div class="input-group">
                        <h5>Address</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="text" placeholder="" name="address" Required>
                            </div>
                        </div>
                        <div class="input-group">
                        <h5>Phone No</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="text" placeholder="03241341541" name="phone_no" Required>
                            </div>
                        </div>

                        <div class="input-group">
                        <h5>CNIC No</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="text" data-inputmask='mask' placeholder="XXXXXXXXXXXXX" name="cnic_no"  maxlength = "13" Required>
                            </div>
                        </div>
                       <h3>Acedmic Information</h3>
                       <div class="input-group">
                        <h5>Degree</h5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="text" placeholder="Your Previous Class" name="degree" Required>
                            </div>
                        </div>
                        <div class="input-group">
                            <h5>Passing Year</h5>
                                <div class="rs-select2 js-select-simple select--no-search">
                                 <input class="input--style-2" type="text" placeholder="" name="passing_year" Required>
                                </div>
                            </div>
                            <div class="input-group">
                                <h5>Board</H5>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                     <input class="input--style-2" type="text" placeholder="" name="board" Required>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <h5>Obtained Marks</H5>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                         <input class="input--style-2" type="number" placeholder="" name="obtained_marks" Required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <h5>Total Marks</H5>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                             <input class="input--style-2" type="number" placeholder="" name="total_marks" Required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <h5>Your Previous School Name</H5>
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                 <input class="input--style-2" type="text" placeholder="" name="school_name" Required>
                                                </div>
                                            </div>


						<div class="input-group">
						<h5>Upload School Leaving Certificate</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                             <input class="input--style-2" type="file" placeholder="upload your CV" name="cv_file" Required>
                            </div>
                        </div>
                        <div class="input-group">
                            <h5>Upload Previous Class Result Sheet</H5>
                                <div class="rs-select2 js-select-simple select--no-search">
                                 <input class="input--style-2" type="file" placeholder="upload your CV" name="result_file" Required>
                                </div>
                            </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    <br>
                    <button style="display: inline-block; padding: 10px 20px; background-color: #1969b3; color: white; line-height: 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; text-decoration: none; position: relative;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='#1969b3'; this.style.border='2px solid #1969b3';"
                            onmouseout="this.style.backgroundColor='#1969b3'; this.style.color='white'; this.style.border='none';">
                        <span style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); color: #f34c4c; font-size: 12px;">&#8592;</span>
                        <a href="{{ route('admit') }}" style="color: #f34c4c;">Go Back</a>
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