
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
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
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExampl" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="wedget-icon"><i class="fa-solid fa-align-left"></i></span>schedule
                            </a>
                        </div>
                        <div class="collapse" id="collapseExampl">
                            <div class="card card-body">
                                <a href="#" class="menu-link">student id</a>
                                <a href="" class="menu-link">Attdence</a>
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
                                <li><a href=" {{ route('setting') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-gear"></i></span>setting</a></li>
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

                    <!--student setting-->
                    <div class="student-setting">
                        <div class="setting-item">
                            <span class="mike-title">### 📢 Student Notices</span>
                            <h2 class="notice-title">1. Class Routine Update**</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">2. Assignment Submission Notice</h2>
                            <p class="notice-desc">All students are requested to submit their assignments within the specified deadline. Late submissions may not be accepted</p>

                            <h2 class="notice-title">3. New Course Notice</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">4. Examination Routine Published</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">5. Model Test Notice</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">6. Monthly Fee Payment Notice</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">7. Payment Due Reminde</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">8. Important Announcement</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>

                            <h2 class="notice-title">9. Emergency Noticephp</h2>
                            <p class="notice-desc">The updated class routine has been published. All students are requested to check the Student Dashboard and attend their classes according to the schedule.</p>
                        </div>
                    </div>
                    <!--student setting system end-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
    </body>
</html>
