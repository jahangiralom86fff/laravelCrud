<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students Batches</title>
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

                        <!--single menu bar-->
                        <div class="single-menu-bar">
                            <ul>
                                <li><a href="{{ route('admission.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-money-bill"></i></span>Fees Reports</a></li>
                                <li><a href="#" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-book-medical"></i></span>Batches</a></li>
                                <li><a href="#" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-pen-to-square"></i></span>Apply Leaves</a></li>
                                <li><a href="{{ route('download.create') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-download"></i></span>Download</a></li>
                                <li><a href="{{ route('setting') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-gear"></i></span>setting</a></li>
                                <li><a href="{{ route('profile.index') }}" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-user"></i></span>My Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <marquee>
                        Student Batch me functions are disabled in the demo version
                    </marquee>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="needs_batch">
                                <h4 class="create-title">Create Batch</h4>
                                <form action="" method="post">
                                    <label for="title" class="w-100 mt-4 mb-2 title-txt">Title*</label>
                                    <input type="text" name="title" class="form-control input-title" placeholder="title">

                                    <label for="title" class="w-100 mt-4 mb-2 title-txt">Start Date*</label>
                                    <input type="date" name="date" class="form-control input-title" placeholder="title">

                                    <div class="form-field mt-4 mb-4">
                                        <input type="checkbox" id="checkAll" class="check checkItem">
                                        <label for="checkAll" class="fill-title">All</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="civil" class="checkItem">
                                        <label for="civil" class="fill-title">Civil Engineering</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="computer" class="checkItem">
                                        <label for="computer" class="fill-title">Computer Engineering</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="english" class="checkItem">
                                        <label for="english" class="fill-title">English Studies</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="arts" class="checkItem">
                                        <label for="arts" class="fill-title">Fine Arts and Design</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="informatics" class="checkItem">
                                        <label for="informatics" class="fill-title">Informática Básica</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="politics" class="checkItem">
                                        <label for="politics" class="fill-title">Politics and Governance</label>
                                    </div>
                                    <div class="form-field mb-4">
                                        <input type="checkbox" id="social" class="checkItem">
                                        <label for="social" class="fill-title">Social Sciences</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-bold">Save</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="needs_batch">
                                <h4 class="create-title">Batch List</h4>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>@social</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>@social</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
        <script>
           //date picker//
            document.querySelectorAll('input[type="date"]').forEach(function (input) {

                input.addEventListener("click", function () {
                    this.showPicker();
                });

            });
        </script>
    </body>
</html>