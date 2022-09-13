@extends('user.body.main')
@section('user')





    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    {{-- <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div> --}}

 

    <!-- ==============================================
    ** Banner Carousel **
    =================================================== -->
    <div class="banner-outer">
        <div class="banner-slider">
            @foreach($sliders as $key => $slider )
            <div class="slide1" style="background:url(public/upload/slider/{{ $slider->image }}) no-repeat center top /cover;">
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight">{{$slider->title }}</h1>
                            <p class="animated fadeInRight">{{$slider->description}}</p>
                            <a href="{{ $slider->link }}" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            {{-- <div class="slide2">
                <div class="container">
                    <div class="content">
                        <h1 class="animated fadeInUp">MBA </h1>
                        <p class="animated fadeInUp"></p>
                        <a href="about.html" class="btn animated
fadeInUp">Know More <span class="icon-more-icon"></span></a>
                        <a href="gallery.html" class="btn white
animated fadeInUp hidden-xs">Take a Tour <span
class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="slide3">
                <div class="container">
                    <div class="content animated fadeInLeft">
                        <h1 class="animated fadeInLeft">Online MBA</h1>
                        <p class="animated fadeInLeft">Lorem Ipsum is
simply dummy text of the printing and typesetting industry.</p>
                        <a href="about.html" class="btn animated
fadeInLeft">Know More <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>


    <!-- ==============================================
    ** About **
    =================================================== -->
    <section class="about">
        <div class="container">
            <ul class="row our-links">
                <li class="col-sm-4 apply-online clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('public/themefronted/images/apply-online-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>Admission</h3>
                        <p>We have students coming from different backgrounds, cultures, and nationalities as well. More than 500 international students are enrolled in various programs.</p>
                        <a href="{{ route('applyaddmission') }}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 prospects clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('public/themefronted/images/prospects-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3><span>Programs</span>Prospects</h3>
                        <p>We are offering 8 undergraduate and graduate programs under 25 departments. Our curriculum is designed to help the students to develop the skills required for 21st-century employment.</p>
                        <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="col-sm-4 certification clearfix equal-hight">
                    <div class="icon"><img src="{{ asset('public/themefronted/images/certification-ico.png')}}" class="img-responsive" alt=""></div>
                    <div class="detail">
                        <h3>Tuition Fees</h3>
                        <p>We offer affordable tuition fees for students with the option to pay them in multiple installments to create convenience for students.</p>
                        <a href="{{ route('tuitionfee') }}" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-push-5 left-block"> <span class="sm-head"> Education For Better Success</span>
                    <h2>Rabindra Maitree University</h2>
                    <p>The Rabindra Maitree University was proposed for approval to the Ministry of Education, Government of Bangladesh as Legend Trust University in 2011. It was the brain child and under an active nourishment of Professor Dr. Mohammad Johurul Islam, presently the Chairman of the Department of Law of Islamic University and formerly Dean of Faculty of Law of Islamic University, Kushtia-the then Chairman of the Board of Trustees of the proposed Legend Trust University. .</p>
                    <div class="know-more-wrapper"> <a href="{{ route('about') }}" class="know-more">Know More <span class="icon-more-icon"></span></a> </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="video-block">
                        <div id="thumbnail_container"> <img src="{{ asset('public/themefronted/images/about-video.jpg')}}" id="thumbnail" class="img-responsive" alt=""> </div>
                        <a href="https://www.youtube.com/watch?v=XGjBR9e75gE&ab_channel=%E0%A6%97%E0%A7%81%E0%A6%B0%E0%A7%81%E0%A6%95%E0%A7%81%E0%A6%B2%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%AD%5BGOLN%5D" class="start-video video"><img src="{{ asset('public/themefronted/images/play-btn.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
    ** Our Cources **
    =================================================== -->
    <section class="our-cources padding-lg">
        <div class="container">
            <h2><a href="{{route('alldepartment')}}"> <span>Unique Features of our programs</span> What do you want to study? </a></h2>
            <ul class="course-list owl-carousel">
                @foreach ($department as $data)
                <li>
                    <div class="inner">
                        <figure><img src="{{url('public/upload/department/',$data->image) }}" alt=""></figure>
                        <h3>{{$data->name}} <span>Department</span></h3>
                        <!--<p>{!!$data->description,25!!}</p>-->
                        <div class="bottom-txt clearfix">
                            <div class="duration">
                                <h4>4 Year</h4>
                                <span> Courses</span>
                            </div>
                            <a href="{{route('departmentdetails',$data->id)}}"><span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </li>
                    
                @endforeach
               
                
            
            </ul>
        </div>
    </section>

    <!-- ==============================================
    ** Our Importance **
    =================================================== -->
    <section class="our-impotance padding-lg">
        <div class="container">
            <ul class="row">
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/study-time-ico.jpg')}}" alt="Malleable Study Time">
                        <h3>Accomodation</h3>
                        <p>We are providing a secure and convinient living facility for our students</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/placement-ico.jpg')}}" alt="Placement Assistance">
                        <h3>Transportation</h3>
                        <p>To make the students life easier and safe we are providing Transport Facility/p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/easy-access-ico.jpg')}}" alt="Easy To Access">
                        <h3>Easy To Access</h3>
                        <p>There is easy accessibility to online help in terms of online teachers and online forums. Teachers can be contacted with the help of video chats and e-mails.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/study-go-ico.jpg')}}" alt="Study on the Go">
                        <h3>Sports Club & Gymnasium</h3>
                        <p>Rabindra Maitree University that is easily accessible onTo ensure the mental and physical well being of our students and employees, we are providing a well-equipped gymnasium.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/get-innovative-ico.jpg')}}" alt="Get an Innovative, In-depth Transition">
                        <h3>Get an Innovative, <span>In-depth Transition</span></h3>
                        <p>The transition to an environment of learning becomes easy with the availability of multiple sources of learning such as text books, power-point presentations, and story boards on various subjects.</p>
                    </div>
                </li>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> <img src="{{ asset('public/themefronted/images/practical-ico.jpg')}}" alt="Practical & Interactive Participation">
                        <h3>Library <span>Participation</span></h3>
                        <p>RMU library has a collection of over 50000 books, journals, research papers and enriching the resources day by day. O....</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


<!-- ==============================================
    ** How Study **
    =================================================== -->
    <section class="how-study padding-lg">
        <div class="container">
            <a href="{{route('allfaculty')}}"><h2> <span><strong>To help you build your career and accomplish your goal, we are offering 8 undergraduate  programs under 4 faculties.</span> Our Faculties</h2></strong></a>
            <ul class="row">
                @foreach ($faculty as $data)
                <li class="col-sm-6">
                    <div class="overly">
                        <div class="cnt-block">
                            <h3>{{$data->name}}</h3>
                            <p>{{$data->description}}</p>
                        </div>
                        <a href="{{route('facultydetails',$data->id)}}" class="more"><i class="fafa-caret-right" aria-hidden="true"></i></a>
                    </div>
                    <figure><img src="{{url('public/upload/faculty/',$data->image) }}" class="img-responsive" alt=""></figure>
                </li>
                    
                @endforeach

               
                
                 
     
            </ul>
        </div>        
                    
    </section>

    
    <!-- ==============================================
    ** Why Choose **
    =================================================== -->
    <section class="why-choose padding-lg">
        <div class="container">
            <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
            <ul class="our-strength">
                <a href="{{route('alldepartment')}}">
                <li>
                    <div class="icon"><span class="icon-certification-icon"> </span></div>
                    <span class="counter">{{$total_dept}}</span>
                    <div class="title">Departments</div>
                </li>
                </a>
                <li>
                    <div class="icon"><span class="icon-student-icon"></span></div>
                    <span class="counter">{{$total_student}}</span>
                    <div class="title">Students Enrolled </div>
                </li>
                <li>
                    <div class="icon"><span class="icon-book-icon"></span></div>
                    <div class="couter-outer"><span class="counter">95</span><span>%</span></div>
                    <div class="title">Passing to Universities</div>
                </li>
                <li>
                    <div class="icon"><span class="icon-parents-icon"></span></div>
                    <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                    <div class="title">Satisfied Parents</div>
                </li>
            </ul>
        </div>
    </section>

    <!-- ==============================================
    ** News & Events **
    =================================================== -->
    <section class="news-events padding-lg">
        <div class="container">
            <h2><span>There are many ways to learn</span>News and events</h2>
            <ul class="row cs-style-3">
                @foreach ($newsevent as $data)
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <img src="{{url('public/upload/newsevent/',$data->image) }}" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"> <a href="{{route('newsdetails',$data->id)}}" class="plus-icon">+</a>
                                    <h3>{{$data->title}}</h3>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span>14 Feb</span> 2017
                                        </div>
                                        <div class="comment">
                                            <div class="icon"><span class="icon-chat-icon"></span></div>
                                            <span>24</span> comments
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
                    
                @endforeach
               
               
            </ul>
            <div class="know-more-wrapper"> <a href="{{route('allnews')}}" class="know-more">More Post <span class="icon-more-icon"></span></a> </div>
        </div>
    </section>
    <!-- ==============================================
    ** Popular Cources **
    =================================================== -->
    <section class="popular-cources padding-lg">
        <div class="container">
            <div class="title-row clearfix">
                <h3>Notice Board</h3>
                <a href="{{ route('allnotice') }}" class="view-courses">
                    <span class="icon-more-icon"></span>View all  Notice
                </a>
            </div>
            <ul class="row courses-list">
                @foreach($notices as $key => $notice )
                <li class="col-sm-6 col-md-3">
                    <div class="inner">
                        <figure><img style="width: 260px;height:165px;" src="{{ url('public/upload/notice',$notice->image) }}" alt=""></figure>
                        <div class="cnt-block">
                            <div class="duration">
                               <span class="year"><a href="{{ route('noticedetails',$notice->id) }}" style="color: white;">Read more</a></span>
                            </div>
                            <h4>{{ $notice->title }}</h4>
                            <p>{{ $notice->Description }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- ==============================================
    ** Campus Tour **
    =================================================== -->
    <section class="campus-tour padding-lg">
        <div class="container">
            <h2><span>Our campus have a lot to offer for our students</span>TAKE A CAMPUS TOUR</h2>
        </div>
        <ul class="gallery clearfix">
            @foreach ($gallery as $key=>$item)
                <li class="isotopeSelector contest">
                    <div class="overlay">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <a class="galleryItem" href="{{url('public/upload/gallery/',$item->image) }}"><span class="icon-enlarge-icon"></span></a> <a href="{{route('gallery')}}" class="more"><span class="icon-gallery-more-arrow"></span></a>
                    </div>
                    <figure><img src="{{url('public/upload/gallery/',$item->image) }}" class="img-responsive" alt=""></figure>
                </li>
                
            @endforeach
           
        </ul>
    </section>

    <!-- ==============================================
    ** Brands **
    =================================================== -->
    {{-- <section class="logos">
        <div class="container">
            <ul class="owl-carousel clearfix">
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo1.jpg')}}" class="img-responsive" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo2.jpg')}}" class="img-responsive" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo3.jpg')}}" class="img-responsive" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo4.jpg')}}" class="img-responsive" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo5.jpg')}}" class="img-responsive" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/themefronted/images/logo6.jpg')}}" class="img-responsive" alt=""></a></li>
            </ul>
        </div>
    </section> --}}

    <!-- ==============================================
    ** Testimonials **
    =================================================== -->
   <!-- ==============================================
    ** Testimonials **
    =================================================== -->
    <section class="testimonial padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>What Visitor Says About Us</h2>
                <ul class="testimonial-slide">
                    @foreach ($visitorsay as $item)
                    <li>
                        <p>{{$item->comment}}<a href="#">Read more</a></p>
                        <span>{{$item->name}}</span>
                    </li>
                        
                    @endforeach
                   
                   
                </ul>
                <div id="bx-pager">
                    @foreach ($visitorsay as $img)
                     <a data-slide-index="{{$img->id}}" href=""><img src="{{url('public/upload/visitorsays/',$img->image) }}" class="img-circle" alt="" /></a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


   


@endsection