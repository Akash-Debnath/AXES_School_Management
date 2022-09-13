@extends('user.body.main')
@section('user')



    <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>{{$item->name}}</h1>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img src="images/apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a> <a href="#" class="download-prospects brochure"> <span class="icon-brochure-icon"></span> <span class="small">Download:</span>Course Brochure</a> </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Course Description **
    =================================================== -->
    <section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>COURSE DESCRIPTION</h2>
                   
					<p>{!!$item->description!!}</p>
                    <!--<div class="cert-head">-->
                    <!--    <h3>Grading System</h3>-->
                    <!--</div>-->
                    <!--<p>{{$item->grading_system}}</p>-->
                    
                </div>
                <!--<div class="col-md-5 col-md-pull-7">-->
                <!--    <div class="enquire-wrapper">-->
                <!--        <figure class="hidden-xs hidden-sm"><img src="images/course-img.jpg" class="img-responsive" alt=""></figure>-->
                <!--        <div class="enquire-now">-->
                <!--            <div class="inner">-->
                <!--                <h3>Enquire now</h3>-->
                <!--                <div class="row1">-->
                <!--                    <input name="Name" type="text" placeholder="Name">-->
                <!--                </div>-->
                <!--                <div class="row2 clearfix">-->
                <!--                    <input name="Email" type="text" placeholder="Email">-->
                <!--                    <input name="Phone" type="text" placeholder="Phone">-->
                <!--                </div>-->
                <!--                <div class="row2 clearfix">-->
                <!--                    <input name="Place" type="text" placeholder="Place">-->
                <!--                    <input name="Course" type="text" placeholder="Course">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <button class="enquire-btn">Enquire now <span class="icon-more-icon"></span></button>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="course-detail clearfix">
                        <div class="duration clearfix">
                            <div class="icon"><span class="icon-duration-icon"></span></div>
                            <div class="detail"> <span>Duration</span> {{$item->duration}}</div>
                        </div>
                        <div class="duration eligible clearfix">
                            <div class="icon"><span class="icon-eligibility-icon"></span></div>
                            <div class="detail"> <span>ELIGIBILITY:</span> {{$item->eligibility}} </div>
                        </div>
                        <div class="duration fee clearfix">
                            <div class="detail"> <span>COURSE FEE:</span> {{$item->course_fee}} </div>
                        </div>
                        <a href="{{route('applyaddmission')}}" class="btn">apply now <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
    ** Course Details Tab **
    =================================================== -->
    <!--<section class="details-tab">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-12">-->
    <!--                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">-->
    <!--                    <ul class="nav nav-tabs course-tab" id="myTabs" role="tablist">-->
    <!--                        <li role="presentation" class="active">-->
    <!--                            <a href="#curriculam" id="curriculam-tab" role="tab" data-toggle="tab" aria-controls="curriculam" aria-expanded="true">-->
    <!--                                <span class="icon-curriculam-icon"></span>-->
    <!--                                <div class="block">MODERN</div>-->
    <!--                                CURRICULUM-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li role="presentation" class="">-->
    <!--                            <a href="#schedule" role="tab" id="schedule-tab" data-toggle="tab" aria-controls="schedule" aria-expanded="false">-->
    <!--                                <span class="icon-schedule-icon"></span>-->
    <!--                                <div class="block">FEE</div>-->
    <!--                                SCHEDULE-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li role="presentation" class="">-->
    <!--                            <a href="#semester" role="tab" id="semester-tab" data-toggle="tab" aria-controls="semester" aria-expanded="false">-->
    <!--                                <span class="icon-semester-icon"></span>-->
    <!--                                <div class="block">SEMESTER</div>-->
    <!--                                I TO VIII-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li role="presentation" class="">-->
    <!--                            <a href="#teachers" role="tab" id="teachers-tab" data-toggle="tab" aria-controls="teachers" aria-expanded="false">-->
    <!--                                <span class="icon-parents-icon"></span>-->
    <!--                                <div class="block">Member Of </div>-->
    <!--                                Faculty-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                    <div class="tab-content" id="myTabContent">-->
    <!--                        <div class="tab-pane fade active in" role="tabpanel" id="curriculam" aria-labelledby="curriculam-tab">-->
    <!--                            <div class="table-responsive">-->
    <!--                               {{$item->course_curriculum}}-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="tab-pane fade" role="tabpanel" id="schedule" aria-labelledby="schedule-tab">-->
    <!--                            <div class="table-responsive">-->
    <!--                                {{$item->fee_schedules}}-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="tab-pane fade" role="tabpanel" id="semester" aria-labelledby="semester-tab">-->
    <!--                            <div class="row">-->
    <!--                                {{$item->semester_details}}-->
    <!--                        </div>-->
    <!--                        <div class="tab-pane fade" role="tabpanel" id="teachers" aria-labelledby="teachers-tab">-->
    <!--                            <ul class="row browse-teachers-list clearfix">-->
    <!--                                <li class="col-xs-6 col-sm-3">-->
    <!--                                    <figure> <img src="images/teacher1.jpg" alt="" width="123" height="124"> </figure>-->
    <!--                                    <h3>Bruno Acselrad</h3>-->
    <!--                                    <span class="designation">Math Teacher</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
    <!--                                    <ul class="teachers-follow">-->
    <!--                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
    <!--                                    </ul>-->
    <!--                                </li>-->
    <!--                                <li class="col-xs-6 col-sm-3">-->
    <!--                                    <figure> <img src="images/teacher2.jpg" alt="" width="123" height="124"> </figure>-->
    <!--                                    <h3>Bruno Acselrad</h3>-->
    <!--                                    <span class="designation">Senior Lecturor</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
    <!--                                    <ul class="teachers-follow">-->
    <!--                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
    <!--                                    </ul>-->
    <!--                                </li>-->
    <!--                                <li class="col-xs-6 col-sm-3">-->
    <!--                                    <figure> <img src="images/teacher3.jpg" alt="" width="123" height="124"> </figure>-->
    <!--                                    <h3>Bruno Acselrad</h3>-->
    <!--                                    <span class="designation">Development</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
    <!--                                    <ul class="teachers-follow">-->
    <!--                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
    <!--                                    </ul>-->
    <!--                                </li>-->
    <!--                                <li class="col-xs-6 col-sm-3">-->
    <!--                                    <figure> <img src="images/teacher4.jpg" alt="" width="123" height="124"> </figure>-->
    <!--                                    <h3>Bruno Acselrad</h3>-->
    <!--                                    <span class="designation">professor</span>-->
    <!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>-->
    <!--                                    <ul class="teachers-follow">-->
    <!--                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
    <!--                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
    <!--                                    </ul>-->
    <!--                                </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->



  


@endsection