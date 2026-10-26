<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile</title>
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
                            <a class="main-dashbord" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                               <span class="das-icon"><i class="fa-solid fa-house"></i></span> Dashboard
                            </a>
                        </div>
                        <div class="collapse" id="collapseExample5">
                            <div class="card card-body">
                                <a href="#" class="menu-link">student id</a>
                                <a href="#" class="menu-link">Attdence</a>
                                <a href="#" class="menu-link">Exam schedule</a>
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
                                <a href="{{ route('shedule.create') }}" class="menu-link">Exam schedule</a>
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
                                        <img src="{{ asset('uploads/scholarships/' . $scholarship->image) }}" alt="avator-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--studet view page-->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="student_profile">
                                <div class="profile-imgbox">
                                    <img src="{{ asset('uploads/scholarships/' . $scholarship->image) }}" alt="profile">
                                    <div class="content">
                                        <h4 class="name-titles">{{ $scholarship->name }}</h4>
                                        <span class="regi">#{{ $profile->bs_regi }}</span>
                                    </div>
                                </div>
                                <div class="student-contacts">
                                    <ul>
                                        <li><span class="icon"><i class="fa-regular fa-envelope"></i></span>Email :<span class="float-end">{{ $profile->email }}</span></li>
                                        <li><span class="icon"><i class="fa-solid fa-phone"></i></span>Phone :<span class="float-end">+880{{ $profile->phn_number }}</span></li>
                                        <li><span class="icon"><i class="fa-solid fa-people-line"></i></span>batch :<span class="float-end">{{ $profile->batch}}</span></li>
                                        <li><span class="icon"><i class="fa-solid fa-user-graduate"></i></span>program :<span class="float-end">{{ $profile->program }}</span></li>
                                        <li><span class="icon"><i class="fa-regular fa-calendar"></i></span>admission date :<span class="float-end">{{ $profile->ad_date }}</span></li>
                                    </ul>
                                </div>
                                <div class="credit">
                                    <div class="credit-num">
                                        <h6 class="number-title">0.00</h6>
                                        <span class="total-credit">Total Creadits</span>
                                    </div>
                                    <div class="cumulative">
                                        <h6 class="number-title">0.00</h6>
                                        <span class="total-credit">Cumulative GPA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="scheduler-border">
                                <ul>
                                    <li>Name<span class="float-end user-title">{{ $scholarship->name }}</span></li>
                                    <li>Father Name<span class="float-end user-title">{{ $scholarship->f_name}}</span></li>
                                    <li>Mother Name<span class="float-end user-title">{{ $scholarship->m_name }}</span></li>
                                    <li>Gender<span class="float-end user-title">{{ $scholarship->gender }}</span></li>
                                    <li>Date of Birth<span class="float-end user-title">{{ $scholarship->date }}</span></li>
                                    <li>Marital Status<span class="float-end user-title">{{ $scholarship->marital_status }}</span></li>
                                    <li>Perment Address<span class="float-end user-title">{{ $scholarship->address}}</span></li>
                                    <li>Nationlity<span class="float-end user-title">{{ $scholarship->nationality}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--student view page End-->

                    <!--fees collapse-->
                    <div class="student-table-item">
                        <div class="card">
                            <div class="card-body">
                                <!--bootstrap collapse tab-->
                                <p>
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Admission Fee
                                    </a>
                                    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                                        Form filup
                                    </button>
                                </p>
                                <!--collapse end-->

                                <!--form filup table-->
                                <div class="collapse" id="collapseExample7">
                                    <div class="card card-body">
                                        <h4 class="text-center text-dark">form Filup history</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Roll</th>
                                                    <th scope="col">Registation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                    <td>{{  $student->name ?? 'No data' }}</td>
                                                    <td>{{  $student->subject ?? 'No data'}}</td>
                                                    <td>{{  $student->roll ?? 'No data'}}</td>
                                                    <td>{{  $student->regi ?? 'No data'}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--form filup secton End-->

                                <!--admission secton-->
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <h4 class="text-center text-dark">Admission Fee history</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Roll</th>
                                                    <th scope="col">Registation</th>
                                                    <th scope="col">Session Year</th>
                                                    <th scope="col">Fee</th>
                                                    <th scope="col">Payment Way</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                    <td>{{ $admission->name  }}</td>
                                                    <td>{{ $admission->subject }}</td>
                                                    <td>{{ $admission->roll }}</td>
                                                    <td>{{ $admission->regi }}</td>
                                                    <td>{{ $admission->session_year }}</td>
                                                    <td>$0.{{ $admission->fee }}</td>
                                                    <td>{{ $admission->payment_way }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--admission view end-->
                            </div>
                        </div>
                    </div>
                    <!--fees colleapse end-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
    </body>
</html>