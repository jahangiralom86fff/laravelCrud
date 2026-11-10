<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students Batches</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <h4 class="create-title mb-3">Create Batch</h4>
                                <form action="{{ route('batches.store') }}" method="POST">
                                    @csrf

                                    <label class="w-100 title-txt mb-2">Batch Title</label>
                                    <input type="text" name="title" class="form-control input-title mb-2" placeholder="Batch Number" required>

                                    <label class="title-txt mb-2">Start Date</label>
                                    <input type="date" name="start_date" class="form-control input-title mb-3" required>

                                    <label class="fill-title text-success fw-bold">Assign Program *</label>
                                    <div class="form-field mb-4">
                                        <input type="checkbox" id="checkAll" class="checkitem">
                                        <label for="checkAll" class="fill-title">All</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="civil" name="programs[]" value="Civil Engineering" class="programCheck checkitem">
                                        <label for="civil" class="fill-title">Civil Engineering</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="computer" name="programs[]" value="Computer Engineering" class="programCheck checkitem">
                                        <label for="computer" class="fill-title">Computer Engineering</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="english" name="programs[]" value="English Studies" class="programCheck checkitem">
                                        <label for="english" class="fill-title">English Studies</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="mechanical" name="programs[]" value="Mechanical Engineering" class="programCheck checkitem">
                                        <label for="mechanical" class="fill-title">Mechanical Engineering</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="politics" name="programs[]" value="Politics and Governance" class="programCheck checkitem">
                                        <label for="politics" class="fill-title">Politics and Governance</label>
                                    </div>
                                    <div class="form-field">
                                        <input type="checkbox" id="social" name="programs[]" value="Social Sciences" class="programCheck checkitem">
                                        <label for="social" class="fill-title">Social Sciences</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">
                                        Save
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="needs_batch">
                                <h4 class="create-title mb-4">Batch List</h4>
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
                                        @foreach($batches as $key => $batch)
                                            <tr>
                                                <td><span class="edu-item">{{ $key + 1 }}</span></td>
                                                <td><span class="edu-item">{{ $batch->title }}</span></td>
                                                <td><span class="edu-item">{{ $batch->start_date->format('d-m-Y') }}</span></td>
                                                <td class="batch-subject"> 
                                                    @foreach($batch->programs ?? [] as $program)
                                                        <span class="subject">{{ $program }}</span><br>
                                                    @endforeach
                                                </td>
                                                <td class="badge-item">
                                                    <span class="badge badge-pill badge-success">Active</span>
                                                </td>
                                                <td class="trash_edit">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editBatch({{ $batch->id }})">
                                                            <span class=""><i class="fa-solid fa-pen-to-square"></i></span>
                                                        </button>
                                                        <div class="delete-btn">
                                                            <span class="btn btn-danger" onclick="confirmDelete()"><i class="fa-solid fa-trash"></i></span>
                                                        </div> 
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Batch</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                </div>
                                                                <form id="editBatchForm">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <label class="fill-title mb-2">Batch Title</label>
                                                                        <input type="text" name="title" id="edit_title" class="form-control mb-3 input-title" required>

                                                                        <label  class="fill-title mb-2">Start Date</label>
                                                                        <input type="date" name="start_date"  id="edit_start_date" class="form-control mb-3 input-title" required>

                                                                        <label class="text-success fw-bold"  class="fill-title"> Assign Program *</label>
                                                                        @php
                                                                            $programList = ['Civil Engineering','Computer Engineering','English Studies','Mechanical Engineering','Politics and Governance','Social Sciences'];
                                                                        @endphp
                                                                        @foreach($programList as $key => $program)
                                                                            <div class="form-field mb-2">
                                                                                <input type="checkbox" id="edit_program_{{ $key }}" name="programs[]" value="{{ $program }}" class="editProgramCheck">
                                                                                <label for="edit_program_{{ $key }}"  class="fill-title">
                                                                                    {{ $program }}
                                                                                </label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>

                                                    </div> 
                                                </td>
                                            </tr>
                                        @endforeach
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

            // Select All
            const checkAll = document.getElementById('checkAll');
            const programChecks = document.querySelectorAll('.programCheck');
            // All click করলে সব Select হবে
            checkAll.addEventListener('change', function () {
                programChecks.forEach(item => {
                    item.checked = this.checked;
                });
            });

            //alert delete//
            function confirmDelete() {
                Swal.fire({
                    title: "Are you sure Delete?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    confirmButtonSize: "bold",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire("Deleted!", "Your data has been deleted.", "success");
                    }
                });
            }
            // Edit Batch
            function editBatch(id) {
                $.ajax({
                    url: `/batches/${id}/edit`,
                    type: 'GET',
                    success: function(response) {
                        // Input value set
                        $('#edit_title').val(response.title);
                        $('#edit_start_date').val(response.start_date);
                        // আগে সব checkbox unchecked
                        $('.editProgramCheck').prop('checked', false);
                        // আগের selected program checked
                        response.programs.forEach(function(program) {
                            $('.editProgramCheck').each(function() {

                                if ($(this).val() === program) {
                                    $(this).prop('checked', true);
                                }

                            });

                        });
                        // Update form action
                        $('#editBatchForm').attr(
                            'action',
                            `/batches/${id}`
                        );
                        // Modal show
                        $('#exampleModal').modal('show');
                    },
                    error: function() {
                        Swal.fire('Error!', 'Batch data not found!', 'error');
                    }

                });

            }
            // Update Batch
            $('#editBatchForm').on('submit', function(e) {
                e.preventDefault();
                let form = $(this);
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),

                    success: function(response) {
                        $('#exampleModal').modal('hide');
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success'
                        }).then(() => {
                            location.reload();

                        });

                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            Swal.fire(
                                'Validation Error!',
                                'Please check all required fields.',
                                'error'
                            );

                        } else {

                            Swal.fire(
                                'Error!',
                                'Something went wrong!',
                                'error'
                            );
                        }
                    }

                });
            });
            function editBatch(id) {
                $.ajax({
                    url: "{{ url('/batches') }}/" + id + "/edit",
                    type: "GET",
                    success: function(response) {
                        $('#edit_title').val(response.title);
                        $('#edit_start_date').val(response.start_date);
                        $('.editProgramCheck').prop('checked', false);
                        response.programs.forEach(function(program) {
                            $('.editProgramCheck').each(function() {

                                if ($(this).val() === program) {
                                    $(this).prop('checked', true);
                                }
                            });
                        });
                        $('#editBatchForm').attr('action', '/batches/' + id);
                        $('#exampleModal').modal('show');

                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        Swal.fire('Error!', xhr.responseJSON?.message || 'Something went wrong!', 'error');
                    }
                });
            }
        </script>
    </body>
</html>