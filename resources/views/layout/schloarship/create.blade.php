<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schloarship Apply</title>
        <!--all css js link-->
        @include ('layout.apps.assets')
        <!--all css js link end-->
    </head>
    <body>
        <!--navbar  section start now-->
        <section class="navbar">
            <div class="container">
                <ul>
                    <li><a href=""><span class="dot-icon"><i class="fa-solid fa-bars"></i></span></a></li>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">service</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </section>
        <!--navbar section end-->

        <div class="layout-menu">
            <!-- Example single danger button -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="layout-main-menu">
                        <!--collapse no 1-->
                        <div class="d-inline-flex gap-1 mt-3 w-100">
                            <a class="main-dashbord" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                               <span class="das-icon"><i class="fa-solid fa-house"></i></span> Dashboard
                            </a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <a href="#" class="menu-link">student id</a>
                                <a href="#" class="menu-link">Attdence</a>
                                <a href="{{ route('shedule.create') }}" class="menu-link">Exam schedule</a>
                            </div>
                        </div>
                        <!--end one-->

                        <!--two start-->
                        <div class="d-inline-flex gap-1 mt-3 w-100">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExamp" role="button" aria-expanded="false" aria-controls="collapseExample">
                               <span class="wedget-icon"><i class="fa-regular fa-calendar-check"></i></span> Attendence
                            </a>
                        </div>
                        <div class="collapse" id="collapseExamp">
                            <div class="card card-body">
                                <a href="#" class="menu-link">student id</a>
                                <a href="{{ route('atten') }}" class="menu-link">Attdence</a>
                                <a href="#" class="menu-link">Exam schedule</a>
                            </div>
                        </div>
                        <!--two end-->

                        <!--three start-->
                        <div class="d-inline-flex gap-1 mt-2 w-100">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExampl " role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="wedget-icon"><i class="fa-solid fa-align-left"></i></span>schedule
                            </a>
                        </div>
                        <div class="collapse" id="collapseExampl">
                            <div class="card card-body">
                                <a href="#" class="menu-link">student id</a>
                                <a href="{{ route('atten') }}" class="menu-link">Attdence</a>
                                <a href="#" class="menu-link">Exam schedule</a>
                            </div>
                        </div>
                        <!--two End-->

                        <!--single menu bar-->
                        <div class="single-menu-bar">
                            <ul>
                                <li><a href="{{ route('admission.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-money-bill"></i></span>Fees Reports</a></li>
                                <li><a href="#" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-book-medical"></i></span>history</a></li>
                                <li><a href="#" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-pen-to-square"></i></span>Apply Leaves</a></li>
                                <li><a href="{{ route('download.create') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-download"></i></span>Download</a></li>
                                <li><a href="{{ route('setting') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-gear"></i></span>setting</a></li>
                                <li><a href="{{ route('profile.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-user"></i></span>My Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="navbar-right-nav">
                                <form action="#">
                                    <button type="submit" name="btn" class="search-btn"><span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span></button>
                                    <input type="text" name="search" class="search-input" placeholder="search">
                                </form>
                                <div class="avator">
                                    <a href="#" class="avator-img">
                                        <img src="{{ asset('assets/images/dashbord-page/das-1.jpg')}}" alt="avator-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--student dashboard-->

                    <!--schloarship section html start-->
                    <div class="scholarship-form">
                        <form action="{{ route('scholarship.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(session('success'))
                                <p>{{ (session('success'))}}</p>
                            @endif

                            @csrf
                            <h2 class="title mt-4 mb-2">Personal information</h2>

                            <label for="name" class="w-100 label-title">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="file" class="w-100 label-title">Photo</label>
                            <input type="file" name="image" value="{{ old('image') }}" >
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="number" class="w-100 label-title">Phone Number</label>
                            <input type="number" name="phone_number" value="{{ old('phone_number') }}"  placeholder="Enter your phone number">
                            @error('phone_number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="f_name" class="w-100 label-title">Father Name</label>
                            <input type="text" name="f_name" value="{{ old('f_name') }}"  placeholder="Enter your Name">
                            @error('f_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="m_name" class="w-100 label-title">Mother Name</label>
                            <input type="text" name="m_name"  value="{{ old('m_name') }}" placeholder="Enter your Name">
                            @error('m_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="date" class="w-100 label-title">Date of birth</label>
                            <input type="date" name="date" value="{{ old('date') }}" >
                            @error('date')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="gender" class="w-100 label-title">Gender</label>
                            <select name="gender" value="{{ old('gender') }}" >
                                <option value="">Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>

                            @error('gender')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="national" class="w-100 label-title">Nationlity</label>
                            <input type="text" name="nationality" value="{{ old('nationality') }}" placeholder="Enter your Nationality">
                            @error('nationality')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="maried" class="w-100 label-title">Marital Status</label>
                            <select name="marital_status" value="{{ old('marital_status') }}" >
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                            </select>
                            @error('marital_status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="address" class="w-100 label-title">Perment Address</label>
                            <input type="text" name="address" value="{{ old('address') }}"  placeholder="Enter your address">
                            @error('address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <h2 class="mt-3 title">Contact Information</h2>
                            
                            <label for="email" class="w-100 label-title">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"  placeholder="Enter your Number">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <h2 class="mt-3 title">Educational Qualification</h2>
                            
                            <label for="ssc" class="w-100 label-title">SSC RESULT</label>
                            <input type="text" name="ssc"  value="{{ old('ssc') }}" placeholder="Enter your result">
                            @error('ssc')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="board" class="w-100 label-title">Board</label>
                            <input type="text" name="board" value="{{ old('board') }}" placeholder="Enter your Board">
                            @error('board')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="pass" class="w-100 label-title">Passing year</label>
                            <input type="text" name="pass_year" value="{{ old('pass_year') }}" placeholder="Passing year">
                            @error('pass_year')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="institute" class="w-100 label-title">School / Instutue</label>
                            <input type="text" name="institute" value="{{ old('institute') }}"  placeholder="Enter your Name">
                            @error('institute')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="group" class="w-100 label-title">Group</label>
                            <input type="text" name="group" value="{{ old('group') }}"  placeholder="Enter your Name">
                            @error('group')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <h2 class="mt-3 title">Higher Secendary school certifite</h2>

                            <label for="hsc" class="w-100 label-title">HSC Result</label>
                            <input type="text" name="hsc" value="{{ old('hsc') }}" placeholder="Enter your result">
                            @error('hsc')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="hsc" class="w-100 label-title">Hsc Board</label>
                            <input type="text" name="hsc_board" value="{{ old('hsc_board') }}"  placeholder="Hsc Board">
                            @error('hsc_board')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="hsc" class="w-100 label-title">Hsc Passing year</label>
                            <input type="text" name="hsc_year" value="{{ old('hsc_year') }}"  placeholder="Passing year">
                            @error('hsc_year')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="hsc" class="w-100 label-title">Hsc Group</label>
                            <input type="text" name="hsc_group" value="{{ old('hsc_group') }}"  placeholder="Group">
                            @error('hsc_group')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror


                            <label for="institute" class="w-100 label-title">Colleage / Instutue</label>
                            <input type="text" name="hsc_institute" value="{{ old('hsc_institute') }}"  placeholder="Enter your Name">
                            @error('hsc_institute')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="institute" class="w-100 label-title">Honurs / Degree / Instutue</label>
                            <input type="text" name="hours" value="{{ old('hours') }}" placeholder="Enter your Name">
                            @error('hours')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="institute" class="w-100 label-title">BA / BSS / BSC </label>
                            <input type="text" name="h_degree" value="{{ old('h_degree') }}"  placeholder="Enter your Name">
                            @error('h_degree')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!--schloarship section End-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
    </body>
</html>