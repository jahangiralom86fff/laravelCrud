
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>setting page</title>
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
                            <ul>
                                <li><span class="icon"><i class="fa-solid fa-circle-user"></i></span><a href="{{ route('profile.index') }}">Profile</a></li>
                                <li><span class="icon"><i class="fa-solid fa-clipboard-user"></i></span><a href="{{ route('atten') }}">Attendance</a></li>
                                <li><span class="icon"><i class="fa-solid fa-money-bill"></i></span><a href="{{ route('admission.index') }}">Payment</a></li>
                                <li><span class="icon"><i class="fa-regular fa-bell"></i></span><a href="#">Notification</a></li>
                                <li><span class="icon"><i class="fa-solid fa-bullhorn"></i></span><a href="{{ route('notice') }}">Notice System</a></li>
                                <li><span class="icon"><i class="fa-solid fa-language"></i></span><a href="#">Language System</a></li>
                                <li><span class="icon"><i class="fa-solid fa-lock"></i></span><a href="{{ route('login') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--student setting system end-->

                    <!--student accoradian-->
                    <div class="accrodian-card mb-5 mt-4">
                        <div class="table-responsive">
                            <table class="table nowrap table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>side bars</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Class Schedules</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch1">
                                                <label for="switch1"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Exam Schedules</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch2" checked>
                                                <label for="switch2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Attendances</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch2" checked>
                                                <label for="switch2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fees Reports</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch2" checked>
                                                <label for="switch2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Notices</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch2" checked>
                                                <label for="switch2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Assignments</td>
                                        <td>
                                            <div class="switch">
                                                <input type="checkbox" class="fieldSwitch" id="switch2" checked>
                                                <label for="switch2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--student accorodian-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
        <script>
            document.querySelectorAll(".fieldSwitch").forEach(function(input) {
            const parent = input.closest(".switch");

            function updateSwitch() {
                parent.classList.toggle("active", input.checked);
                parent.classList.toggle("inactive", !input.checked);
            }

            updateSwitch();

            input.addEventListener("change", updateSwitch);

        });
        </script>
    </body>
</html>
