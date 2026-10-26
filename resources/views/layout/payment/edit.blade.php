<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
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
                                <a href="{{ route('shedule.create') }}" class="menu-link">Exam schedule</a>
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
                                <li><a href="#" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-gear"></i></span>setting</a></li>
                                <li><a href="" class="singe-menu w-100"><span class="wedget-single-icon"><i class="fa-solid fa-user"></i></span>My Profile</a></li>
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

                    <!--payment section-->
                    @if(session('success'))
                        <div class="alert-title text-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('admission.update', $row->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <h2 class="title mt-4 mb-4 text-success">Addimission Fees</h2>

                        <label for="name" class="w-100 label-title">Full Name</label>
                        <input type="text" class="name" value="{{ $row->name }}" name="name" placeholder="Your full Name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="subject" class="w-100 label-title pt-3">Subject Choose</label>
                        <select name="subject" class="sub-selector">
                            <option value="Math" {{ $row->subject == 'Math' ? 'selected' : ''}}>Math</option>
                            <option value="Biology" {{ $row->subject == 'Biology' ? 'selected' : ''}}>Biology</option>
                            <option value="zoology" {{ $row->subject == 'zoology' ? 'selected' : ''}}>zoology</option>
                            <option value="chemistry" {{ $row->subject == 'chemistry' ? 'selected' : ''}}>chemistry</option>
                            <option value="Physics" {{ $row->subject== 'Physics' ? 'selected' : ''}}>Physics</option>
                            <option value="Bangla" {{ $row->subject == 'Bangla' ? 'selected' : ''}}>Bangla</option>
                            <option value="political science" {{ $row->subject == 'political science' ? 'selected' : '' }}>political science</option>
                            <option value="socology" {{ $row->subject == 'socology' ? 'selected' : ''}}>socology</option>
                            <option value="botany" {{ $row->subject == 'botany' ? 'selected' : ''}}>Botany</option>
                        </select>
                        @error('subject')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="roll" class="w-100 label-title pt-4">Roll</label>
                        <input type="text" class="form-roll" value="{{ $row->roll }}" name="roll" placeholder="Your Roll">
                        @error('roll')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                
                        <label for="regi" class="w-100 label-title pt-4 pb-3">Regitation</label>
                        <input type="text" class="form-regi mb-2" value="{{ $row->regi }}" name="regi" placeholder="Your Registation">
                        @error('regi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="session" class="w-100 label-title pt-4 pb-3">Session</label>
                        <select name="session_year" class="sub-selector mb-4">
                            <option value="">Session Year</option>
                            @for($year = 2020; $year <= date('Y'); $year++)
                               <option value="Spring-{{ $year }}"
                                    {{ old('session_year', $row->session_year) == 'Spring-' . $year ? 'selected' : '' }}>
                                    Spring-{{ $year }}
                                </option>
                            @endfor
                        </select>
                        @error('session_year')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="fee" class="label-title w-100">Fees</label>
                        <select name="fee" class="sub-selector mb-3">
                        <option value="">Amount</option>
                        @for($fee = 0; $fee <= 1000; $fee++)
                            <option value="{{ $fee }}" @selected(old($row->fee) == $fee)>
                                {{ $fee }}.00$
                            </option>
                        @endfor
                    </select>
                        @error('fee')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="fee" class="w-100 label-title">Payment way</label>
                        <select name="payment_way" class="sub-selector">
                            <option value="Baksh"  {{ $row->payment_way == 'Baksh' ? 'selected' : '' }}>Baksh</option>
                            <option value="Nagad" {{ $row->payment_way == 'Nagad' ? 'selected' : '' }}>Nagad</option>
                            <option value="Rocket" {{  $row->payment_way == 'Rocket' ? 'selected' : ''}}>Rocket</option>
                            <option value="DBL" {{$row->payment_way == 'DBL' ? 'selected' : ''}}>DBL</option>
                            <option value="Upay" {{ $row->payment_way == 'UPay' ? 'selected' : ''}}>Upay</option>
                            <option value="Surecash" {{$row->payment_way == 'Surecash' ? 'selected' : ''}}>Surecash</option>
                        </select>
                        @error('payment_way')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <br><br>
                        <button type="submit"class="sub-btn  btn btn-primary" name="">Submit</button>
                    </form>
                    <!--single -item-->
                </div>
            </div>
        </div>
        <!--dashboard section start now-->
    </body>
</html>