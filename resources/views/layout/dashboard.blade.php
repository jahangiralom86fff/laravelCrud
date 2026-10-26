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
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="student-catagoris">
                               <div class="single-item">
                                    <h2 class="title">Congratulations John! 🎉</h2>
                                    <p class="desc"> Studen school we have done 72% more sales today. Check your new badge in your profile.</p>
                                    <a href="{{ route('profile') }}" class="mt-2 btn btn-primary">Student view</a>
                               </div>
                               <div class="single-item-t">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/dashbord-page/man-with-laptop-light.png')}}" alt="img-studen">
                                    </a>
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shedule-student">
                                <a href="#" class="item">
                                    <h2 class="title text-decoration-none">Registation</h2>
                                    <p class="amount-desc">Amount</p>
                                    <p class="m-title">$120</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--single -item-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="shedule-student">
                                <div class="item shedule-g">
                                    <h2 class="title text-decoration-none">From Filup</h2>
                                    <p class="amount-desc">1st year</p>
                                    <a href="{{ route('apply') }}" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shedule-student">
                                <div class="item shedule-g">
                                    <h2 class="title text-decoration-none">Admission Fee</h2>
                                    <p class="amount-desc">New</p>
                                    <a href="{{ route('create') }}" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shedule-student">
                                <div class="item">
                                    <h2 class="title text-decoration-none">CV Create</h2>
                                    <p class="amount-desc">New</p>
                                    <a href="{{ route('scholarship.create') }}" class="btn btn-primary">Create Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--side bar end-->

                    <!--chat js start-->
                    <div class="chat-js">
                        <canvas id="attendanceChart"></canvas>
                    </div>
                    <!---chat js end-->
                    <!--fotter include-->
                    @include('layout.apps.fotter')
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
      
    </body>
</html>

<script>
const attendanceCanvas = document.getElementById('attendanceChart');

if (attendanceCanvas) {

    const ctx = attendanceCanvas.getContext('2d');

    new Chart(ctx, {
        type: 'bar',

        data: {
            labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June'
            ],

            datasets: [
                {
                    label: 'Present',
                    data: [82, 88, 76, 91, 85, 94],
                    borderWidth: 1
                },
                {
                    label: 'Absent',
                    data: [18, 12, 24, 9, 15, 6],
                    borderWidth: 1
                }
            ]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    position: 'top'
                }
            },

            scales: {
                x: {
                    ticks: {
                        font: {
                            size: 14
                        }
                    }
                },

                y: {
                    beginAtZero: true,

                    ticks: {
                        font: {
                            size: 14
                        }
                    }
                }
            }
        }
    });
}
</script>