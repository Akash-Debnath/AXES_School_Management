   <!-- ==============================================
    ** Header **
    =================================================== -->

    @php
        $facebook= App\Models\Socialgroup::Where('type','Facebook')->first();
        $youtube= App\Models\Socialgroup::Where('type','Youtube')->first();
    @endphp
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="{{$facebook->link}}"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="{{$youtube->link}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                        <li> <a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{route('register') }}">Register</a></li>
                         <li><a href="{{ route ('faq') }}">FAQs</a></li>
                         <li> <a href="{{ route('allnews') }}">Nesw & Events</a></li>
                        <!--<li><a href="{{ route('applyaddmission') }}">Apply Online</a></li>-->
                        <li><a href="{{ route('studentlogin') }}" >Student Login <i class="fa fa-sign-in"></i></a></li>
                      
                    </ul>
                    <div class="lang-wrapper">
                        <div class="select-lang">
                            <!--<head>-->
                            <!--    <title>-->
                            <!--        Blinking with JavaScript-->
                            <!--    </title>-->
                              
                            <!--    <style>-->
                            <!--        #blink {-->
                            <!--            font-size: 18px;-->
                            <!--            color:green;-->
                            <!--            font-weight: bold;-->
                            <!--            font-family: sans-serif;-->
                            <!--        }-->
                            <!--    </style>-->
                            <!--</head>-->
  
                            <body>
                                <!--<p id="blink">-->
                                <!--   <a href="{{ route('applyaddmission') }}">Apply Online</a>-->
                                <!--</p>-->
                                  
                                <!--<script type="text/javascript">-->
                                <!--    var blink = -->
                                <!--        document.getElementById('blink');-->
                              
                                <!--    setInterval(function () {-->
                                <!--        blink.style.opacity = -->
                                <!--        (blink.style.opacity == 0 ? 1 : 0);-->
                                <!--    }, 1000); -->
                                <!--</script>-->
                            </body>
                        </div>
                        <!--<div class="select-lang2">-->
                        <!--    <select class="custom_select">-->
                        <!--        <option value="en">English</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="{{ route('userhome')}}"><img src="{{ url('public/upload/website/',Websiteinfo()->logo) }}" class="img-responsive" alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a href="info@rmu.ac.bd">{{Websiteinfo()->email}}</a> </li>
                            <li> <span>Phone</span> {{Websiteinfo()->phone}} </li>
                        </ul>
                        <a href="{{ route('applyaddmission') }}" class="login">Apply Online <span class="icon-more-icon"></span></a>
                        <!--<a href="{{ route('studentlogin') }}" class="login">Student Login <span class="icon-more-icon"></span></a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <!--<form class="navbar-form navbar-right">-->
                    <!--    <input type="text" placeholder="Search Now" class="form-control">-->
                    <!--    <button class="search-btn"><span class="icon-search-icon"></span></button>-->
                    <!--</form>-->
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a  href="{{ route('userhome')}}">Home</a> </li>

                     
                        <li class="dropdown"> <a data-toggle="dropdown" href="{{ route('about')}}">ABOUT <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <li> <a href="{{ route('about')}}"><b>About</b></a></li>
                                        <!--<li><a href="{{ route('contact') }}"><b>Contact Us</b></a></li>-->
                                        <li><a href="{{route('allfaculty')}}"><b>Faculties</b></a></li>
                                        <li><a href="{{route('alldepartment')}}"><b>Departments</b></a></li>
                                        <li><a href="{{ route('brief_history_rmu') }}"><b> Brief History Of University </b></a></li>
                                        <li><a href="{{ route('faculty_members') }}"> <b>Feculty Member</b> </a></li>
                                        <li><a href="#"> <b>Vision & Mission</b> </a></li>
                                        <li><a href="{{ route ('bot') }}"> <b> Board Of Trustees</b></a></li>
                                        <li ><a href="{{ route('messagefromchairman') }}"> <b>Message from Chairman of BOT</b></a></li>
                                        <li><a href="{{ route('messagefromfounder') }}"><b>Message from Founder and Vice-Chairman of BOT</b></a></li>
                                        <li><a href="{{ route('messagefromvicechancellor') }}"><b>Message from Vice Chancellor</b></a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li class="visible-xs"><a href="apply-online.html"><b> Committee</b></a></li>
                                        <li><a href="{{ route('disciplinarycommittee') }}"><b>Disciplinary Committee</b> </a></li>
                                        <li><a href="{{ route('academiccouncil') }}"> <b>Academic Council</b> </a></li>
                                        <li><a href="{{ route('complaintcommittee') }}"><b>Complaint Committee</b></a></li>
                                        <li><a href="{{ route('fincom') }}"><b>Finance Committee</b></a></li>
                                        <li><a href="{{ route('syndicate') }}"><b>Syndicate</b></a></li>
                                        <li><a href="{{ route('administration') }}"><b>Administration</b></a></li>
                                        <li class="hidden-xs"><a href="{{ route('deanofthefaculties') }}"><b>Deans</b> </a></li>
                                    </div>
                                    <div class="col-md-4">
                                        
                                        
                                        <!--<li class="hidden-xs"><a href="{{ route ('privacy')}}"><b>Privacy Policy</b></a></li>-->
                                        <!--<li><a href="#"><b>Improvement Examination</b></a></li>-->
                                        <!--<li><a href="{{ route('course_add') }}"><b>Course Add Or Drop</b></a></li>-->
                                        <!--<li><a href="{{ route('department_change') }}"><b>Department Change</b></a></li>-->



                                    </div>
                                </div>
                                    
                            </ul>
                        </li>
                    
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Academics <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" >
                                <div class="row">
                                    <div class="col-md-5">
                                         <li><a href="#"> <b>Faculty of Arts and Social Sciences</b></a> </li>
                                         <li><a href="{{route ('departmentenglish') }}"><b>Department of English</b></a></li>
                                         <li><a href="{{ route ('departmentbangla')}}"><b>Department of Bangla</b></a></li>
                                         <li><a href="{{ route('physicalEducationandsportsscience') }}"><b>Department of Physical Education and Sports Science</b></a></li> 
                                         <li ><a href="#"><b>Faculty of Science and Engineering</b></a></li>
                                         <li><a href="{{ route('ict') }}"><b>Department of Information and Communication Technology</b>
                                         </a></li>
                                    </div>
                                    <div class="col-md-5">
                                        
                                        <li><a href="{{ route ('cse')}}"><b>Department of Computer Science and Engineering</b>
                                        </a></li>
                                        <li><a href="{{ route ('eee')}}"><b>Department of Electrical and Electronic Engineering</b>
                                        </a></li>
                                        
                                        <li><a href="{{ route ('microbiology')}}"><b>Department of Microbiology</b></a></li>
                                
                                        <li><a href="#"><b>Faculty of Business Studies</b></a></li>
                                        <li><a href="{{ route ('businessadministration') }}"><b>Department of Business Administration</b> </a></li>
                                       
                                
                                         <li><a href="#"><b>Faculty of Agriculture</b></a></li>
                                        <li><a href="{{ route('departmentenglish') }}"><b>Department of Agriculture</b></a></li>
                                        
                                        
                                        
                                    </div>
                                    
                                  
                                    
                            </ul>

                        </li>
                        <!--<li> <a href="{{ route('gallery') }}">Gallery</a></li>-->
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">ADMISSIONS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <div class="row">
                                    <div class="col-md-5">
                                        <li><a href="{{ route('tuitionfee')}}"><b>Available Programs </b></a></li>
                                      
                                        <!--<li><a href="{{route('register') }}"> <b>Register</b> </a></li>-->
                                        <li><a href="{{ route('applyaddmission') }}"><b>Apply Online</b> </a></li>
                                        <!--<li class="visible-xs"><a href=""> <b>Blog</b> </a></li>-->
                                        <li class="visible-xs"><a href="{{route('faq') }}"><b>FAQs</b></a></li>
                                        <li><a href="{{ route('tuitionfee')}}"><b>Tuition Fee</b></a></li>
                                        <li><a href="{{ route('waiverpolicy') }}"><b>Waiver policy</b></a></li>
                                        <li><a href="{{ route('scholarshipandfinancialaids') }}"><b>Scholarship And Financial Aids</b></a></li>
                                       <!-- <li><a href="faq2.html">FAQ 2</a></li> -->
                                    </div>
                                    <div class="col-md-5">
                                        
                                       <!-- <li><a href="coming-soon.html"></a></li>  -->
                                        <!--<li class="hidden-xs"><a href="{{ route ('privacy')}}"><b>Privacy Policy</b></a></li>-->
                                        <li class="hidden-xs"><a href=""><b>Application Process</b></a></li>
                                        <li class="hidden-xs"><a href=""><b>Circular</b>r</a></li>
                                        
                                    </div>
                               
                              
                            </ul>
                        </li>
                       
                        
                         <li class="dropdown"> <a data-toggle="dropdown" href="#">Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">

                                <div class="row">
                                    <div class="col-md-3">
                                        <li><a href="{{ route('admit_card') }}"><b>Admit Card</b></a></li>
                                        <li><a href="{{ route('student_permission') }}"><b>Permission</b></a></li>
                                        <li><a href="#"><b>Improvement Examination</b></a></li>
                                        <li><a href="{{ route('course_add') }}"><b>Course Add Or Drop</b></a></li>
                                        <li><a href="{{ route('department_change') }}"><b>Department Change</b></a></li>
                                        <li><a href="{{ route('register_slip') }}"><b>Register slip</b></a></li>

                                    </div>

                                </div>

                            </ul>
                        </li>
                        
                        <li> <a href="{{ route('allnotice') }}">Notice</a></li>
                        <li> <a href="{{ route('contact') }}">Contact</a></li>
                        <li> <a href="{{ route('allcourse') }}">Courses</a></li>
                        <!--<li class="dropdown"> <a data-toggle="dropdown" href="#">Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>-->
                        <!--    <ul class="dropdown-menu">-->

                        <!--        <div class="row">-->
                        <!--            <div class="col-md-3">-->
                        <!--                <li><a href="{{ route('admit_card') }}"><b>Courses1</b></a></li>-->
                        <!--                <li><a href="{{ route('student_permission') }}"><b>Courses2</b></a></li>-->
                        <!--                <li><a href="#"><b>Courses3</b></a></li>-->
                        <!--                <li><a href="{{ route('course_add') }}"><b>Course4</b></a></li>-->
                        <!--                <li><a href="{{ route('department_change') }}"><b>Course5</b></a></li>-->
                        <!--                <li><a href="{{ route('register_slip') }}"><b>Course6</b></a></li>-->

                        <!--            </div>-->

                        <!--        </div>-->

                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li> <a href="{{ route('allnews') }}">Nesw & Events</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>


    