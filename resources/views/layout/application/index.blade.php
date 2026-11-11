<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student dashboard</title>
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
                                <a href="{{ route('atten') }}" class="menu-link">student id</a>
                                <a href="{{ route('atten') }}" class="menu-link">Attdence</a>
                                <a href="{{ route('atten') }}" class="menu-link">Exam schedule</a>
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
                                <a href="{{ route('profile.index') }}" class="menu-link">student id</a>
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
                                <a href="{{ route('profile.index') }}" class="menu-link">student id</a>
                                <a href="{{ route('atten') }}" class="menu-link">Attdence</a>
                                <a href="{{ route('shedule.create') }}" class="menu-link">Exam schedule</a>
                            </div>
                        </div>
                        <!--two End-->

                        <!--Admission module html-->
                        <div class="d-inline-flex gap-1 mt-2 w-100">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExamplt " role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="wedget-icon"><i class="fa-solid fa-building-columns"></i></span>Admission
                            </a>
                        </div>
                        <div class="collapse" id="collapseExamplt">
                            <div class="card card-body">
                                <a href="" class="menu-link">Applications</a>
                                <a href="" class="menu-link">New Registation</a>
                                <a href="" class="menu-link">Student List</a>
                                <a href="" class="menu-link">Transfers</a>
                                <a href="" class="menu-link">Status Types</a>
                                <a href="" class="menu-link">ID Cards</a>
                            </div>
                        </div>
                        <!--Admissiion module-->

                        <!--single menu bar-->
                        <div class="single-menu-bar">
                            <ul>
                                <li><a href="{{ route('admission.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-money-bill"></i></span>Fees Reports</a></li>
                                <li><a href="{{ route('batches.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-book-medical"></i></span>Batches</a></li>
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

                    <!--Application module-->
                    <form action="" method="post" class="application_form">
                        <h3 class="title mb-3">Application List</h3>
                        <div class="row mb-5">
                            <div class="col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="program" class="w-100 pb-10" >Program</label>
                                    <select name="program" class="application_item">
                                        <option value>All</option>
                                        <option value="0">Civil Engineering</option>
                                        <option value="2">Computer Engineering</option>
                                        <option value="3">English Studies</option>
                                        <option value="5">Excel Profesional</option>
                                        <option value="8">Fine Arts and Design</option>
                                        <option value="6">Informática Básica</option>
                                        <option value="9">Mechanical Engineering</option>
                                        <option value="4">Politics and Governance</option>
                                        <option value="7">Social Sciences</option>
                                        <option value="1"></option>
                                    <select>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="program w-100" class="pb-10">Status</label><br>
                                    <select name="status" class="application_item">
                                        <option value>All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Approved</option>
                                        <option value="0">Rejected</option>
                                      
                                    <select>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="date-picker">
                                    <label for="date" class="form-label w-100">Datepicker</label>
                                    <input type="date" class="date_picker" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="date-picker">
                                    <label for="date" class="form-label w-100">Datepicker</label>
                                    <input type="date" class="date_picker" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="form-flied">
                                    <label for="text">Registration No</label>
                                    <input type="text" name="regi" class="regi_num" placeholder="Registaion" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <button type="submit" class="btn btn-info btn-filter"><i class="fas fa-search">
                                    Search</i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--Application module End-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
    </body>
</html>

<script>
    document.querySelectorAll('.date_picker').forEach(input => {

    input.addEventListener('click', function () {

        if (typeof this.showPicker === 'function') {
            try {
                this.showPicker();
            } catch (e) {
                console.log(e);
            }
        }

    });

});
</script>

