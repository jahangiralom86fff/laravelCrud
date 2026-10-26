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
        <div class="cv mt-4">
            <div class="container">
                <div class="row">
                    <!--cv header-->
                    <div class="col-lg-4 col-sm-4">
                        <div class="cv-imgbox">
                            <img src="{{ asset('assets/images/login-page/cv-1.jpg')}}" alt="cv-logo">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="curriculam-imgbox">
                            <img src="{{ asset('assets/images/login-page/curriculam-vate.jpg')}}" alt="cv-logo">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="cover-imgbox">
                            <img src="{{ asset('uploads/scholarships/' . $scholarship->image) }}" alt="cv-logo">
                        </div>
                    </div>
                    <h3 class="name-title text-center ">{{ $scholarship->name }}</h3>
                    <h3 class="phn-title text-center">PHONE: ++0{{ $scholarship->phone_number }}</h3>
                    <!--cv header end-->
                    <div class="career-content">
                        <h2 class="cv-title">CAREER OBJECTIVE</h2>
                        <p class="desc">To explore the opportunity for active involvement in Management, administrative and team work offering the full utilization of my education, practical knowledge and professional</p>
                    </div>

                    <!--personal information-->
                    <div class="academic">
                        <div class="row">
                        <div class="webget-skills">
                            <h3 class="langu-title">Personal information</h3>
                        </div>
                            <div class="col-lg-6">
                                <div class="academic-cv mt-2">
                                    <div class="academic-content">
                                        <h3 class="std-title">Father Name</h3>
                                        <h3 class="std-title">Mother Name</h3>
                                        <h3 class="std-title">Date of Birth</h3>
                                        <h3 class="std-title">Gender</h3>
                                        <h3 class="std-title">Nationlity</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">{{ $scholarship->f_name }}</p>
                                        <p class="std-desc">{{ $scholarship->m_name }}</p>
                                        <p class="std-desc">{{ $scholarship->date }}</p>
                                        <p class="std-desc">{{ $scholarship->nationality }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="academic-cv mt-2">
                                    <div class="academic-content">
                                        <h3 class="std-title">Marital Status</h3>
                                        <h3 class="std-title">Perment Address</h3>
                                        <h3 class="std-title">Email</h3>
                                        <h3 class="std-title">Passing Year</h3>
                                        <h3 class="std-title">Result</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">{{ $scholarship->marital_status }}</p>
                                        <p class="std-desc">{{ $scholarship->address }}</p>
                                        <p class="std-desc">{{ $scholarship->email }}</p>
                                        <p class="std-desc">{{ $scholarship->pass_year }}</p>
                                        <p class="std-desc">{{ $scholarship->hsc }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--personal informaion End-->

                    <!--education qulification-->
                    <div class="academic">
                        <h2 class="academic-title">Education Qualification</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="school-title">Secondary School Certificate (S.S.C)</h3>
                                <div class="academic-cv">
                                    <div class="academic-content">
                                        <h3 class="std-title">Institute</h3>
                                        <h3 class="std-title">Board</h3>
                                        <h3 class="std-title">group</h3>
                                        <h3 class="std-title">Passing Year</h3>
                                        <h3 class="std-title">Result</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">{{ $scholarship->institute }}</p>
                                        <p class="std-desc">{{ $scholarship->board }}</p>
                                        <p class="std-desc">{{ $scholarship->group }}</p>
                                        <p class="std-desc">{{ $scholarship->pass_year }}</p>
                                        <p class="std-desc">{{ $scholarship->ssc }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="school-title">Higher Secondary School Certificate (H.S.C)</h3>
                                <div class="academic-cv">
                                    <div class="academic-content">
                                        <h3 class="std-title">Institute</h3>
                                        <h3 class="std-title">Board</h3>
                                        <h3 class="std-title">group</h3>
                                        <h3 class="std-title">Passing Year</h3>
                                        <h3 class="std-title">Result</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">{{ $scholarship->hsc_institute  }}</p>
                                        <p class="std-desc">{{ $scholarship->hsc_board}}</p>
                                        <p class="std-desc">{{ $scholarship->hsc_group }}</p>
                                        <p class="std-desc">{{ $scholarship->hsc_year }}</p>
                                        <p class="std-desc">{{ $scholarship->hsc}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--education qulifation-->

                    <!--hounrs-->
                    <div class="academic">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="school-title">Bachelor of Arts (BA.BSS.BSC)</h3>
                                <div class="academic-cv">
                                    <div class="academic-content">
                                        <h3 class="std-title">Institute</h3>
                                        <h3 class="std-title">Board</h3>
                                        <h3 class="std-title">group</h3>
                                        <h3 class="std-title">Passing Year</h3>
                                        <h3 class="std-title">Result</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">{{ $scholarship->hsc_institute }}</p>
                                        <p class="std-desc">{{ $scholarship->hours }}</p>
                                        <p class="std-desc">{{ $scholarship->h_degree}}</p>
                                        <p class="std-desc">2021</p>
                                        <p class="std-desc">4.20</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="school-title">Master’s degree Certificate (B.A)</h3>
                                <div class="academic-cv">
                                    <div class="academic-content">
                                        <h3 class="std-title">Institute</h3>
                                        <h3 class="std-title">Board</h3>
                                        <h3 class="std-title">group</h3>
                                        <h3 class="std-title">Passing Year</h3>
                                        <h3 class="std-title">Result</h3>
                                    </div>
                                    <div class="academic-cont">
                                        <p class="std-desc">Null</p>
                                        <p class="std-desc">Null</p>
                                        <p class="std-desc">Null</p>
                                        <p class="std-desc">Null</p>
                                        <p class="std-desc">Null</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--honurs end-->

                    <!--skill area-->
                    <div class="webget-skills">
                        <h3 class="langu-title">Language Skills</h3>
                        <p class="en-title">
                            Have an excellent command over Bengali and good command over English in all
                            Communicative way- writing, reading, listening and speaking. Communicative way- writing, reading, listening and speaking.
                        </p>
                    </div>
                    <div class="webget-skills">
                        <h3 class="langu-title">Computer skills</h3>
                        <p class="en-title">
                            Computer skills are abilities used to operate computers and digital tools. Essential
                            competencies include operating systems (Windows,), office suites (Word, Excel), internet
                            browsing, email management, file organization, typing, and basic online safety. Advanced
                            skills involve coding, data analysis
                        </p>
                    </div>
                    <!--skill area End-->
                </div>
            </div>
        </div>
    </body>
</html>