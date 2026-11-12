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

                    <!--Admission Registration module-->
                    <div class="admission_info">
                        <form id="multiStepForm">
                            <!-- Tabs -->
                            <ul class="nav nav-pills mb-4">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active">
                                        1.Basic info
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" disabled>
                                        2.Education info
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" disabled>
                                        3.Documents
                                    </button>
                                </li>
                            </ul>
                            <!-- Home Tab -->
                            <div class="tab-pane-custom">
                                <div class="row">
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->

                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name *</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label> 
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->

                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                    
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                    <!--admission info-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control custom_input" name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control custom_input" name="email" required>
                                        </div>
                                    </div>
                                    <!--admission info-->
                                </div>
                                <button type="button" class="btn btn-primary next-btn">
                                    Next
                                </button>
                            </div>
                            <!-- Profile Tab -->
                            <div class="tab-pane-custom d-none">
                                <h5>Profile Information</h5>
                                <div class="mb-3">
                                    <label class="form-label">Father Name</label>
                                    <input type="text" class="form-control" name="father" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" required>
                                </div>

                                <button type="button" class="btn btn-secondary prev-btn">
                                    Previous
                                </button>

                                <button type="button" class="btn btn-primary next-btn">
                                    Next
                                </button>
                            </div>

                            <!-- Contact Tab -->
                            <div class="tab-pane-custom d-none">

                                <h5>Contact Information</h5>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address" required></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn">
                                    Previous
                                </button>

                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>

                        </form>
                    </div>
                    <!--Admission Registration module-->
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
<script>
    const form = document.getElementById('multiStepForm');
    const tabs = document.querySelectorAll('.nav-link');
    const steps = document.querySelectorAll('.tab-pane-custom');

    let currentStep = 0;

    // Show Step
    function showStep(index) {

        steps.forEach((step, i) => {
            step.classList.toggle('d-none', i !== index);
        });

        tabs.forEach((tab, i) => {
            tab.classList.toggle('active', i === index);
            tab.disabled = i > index;
        });

        currentStep = index;
    }

    // Validate Current Step
    function validateStep() {

        const inputs = steps[currentStep].querySelectorAll(
            'input, select, textarea'
        );

        let valid = true;

        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.reportValidity();
                valid = false;
            }
        });

        return valid;
    }

    // Next Button
    document.querySelectorAll('.next-btn').forEach(button => {

        button.addEventListener('click', function() {

            if (validateStep()) {
                if (currentStep < steps.length - 1) {
                    showStep(currentStep + 1);
                }
            }

        });

    });

    // Previous Button
    document.querySelectorAll('.prev-btn').forEach(button => {

        button.addEventListener('click', function() {

            showStep(currentStep - 1);

        });

    });

    // Form Submit
    form.addEventListener('submit', function(e) {

        e.preventDefault();

        if (!validateStep()) return;

        const formData = new FormData(form);

        console.log(Object.fromEntries(formData));

        alert('Form Submitted Successfully!');

    });
</script>

