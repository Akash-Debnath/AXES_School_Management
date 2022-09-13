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
                        <h1>BANGLA </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                <div class="col-md-7 col-md-push-5 left-block">
                    <h2>COURSE DESCRIPTION</h2>
                    <p>About Us</p> 
					<p>

Rabindra Maitree University was established in 2015 and started its academic journey in September 2017 with a view to keeping the memories of the Great Poet Rabindranath Tagore. One of the objectives of this university has been set to run the university with Tagore’s philosophy of education. The contribution of Rabindranath in creation and development of Bengali literature is undeniable. Without studying Bengali literature as well as Rabindra literature, Tagore’s philosophy of education will be incomplete. So the university authority proposed Bengali department as one of the core disciplines that is unique in the history of private universities in Bangladesh. Presently the Department of Bengali offers undergraduate program in Bengali which give students an opportunity to know and appreciate the science of language as well as the literary works of Bengali and to develop literary and linguistic aptitudes of their own. At present the department is conducting its academic activities with four brilliant faculties under the leadership of Professor Dr. Md. Shahidur Rahman, former Head of the Department of Bengali of Islamic University and former Head of the Department of Folklore of the University of Rajshahi. </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <div class="cert-head">
                        <h3>CERTIFICATION</h3>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <ul class="cert-list clearfix">
                        <li>Lorem Ipsum is simply dummy text of the</li>
                        <li>Lorem Ipsum is simply dummy </li>
                        <li>Lorem Ipsum is simply dummy </li>
                        <li>Lorem Ipsum is simply dummy text of the</li>
                    </ul>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <div class="enquire-wrapper">
                        <figure class="hidden-xs hidden-sm"><img src="images/course-img.jpg" class="img-responsive" alt=""></figure>
                        <div class="enquire-now">
                            <div class="inner">
                                <h3>Enquire now</h3>
                                <div class="row1">
                                    <input name="Name" type="text" placeholder="Name">
                                </div>
                                <div class="row2 clearfix">
                                    <input name="Email" type="text" placeholder="Email">
                                    <input name="Phone" type="text" placeholder="Phone">
                                </div>
                                <div class="row2 clearfix">
                                    <input name="Place" type="text" placeholder="Place">
                                    <input name="Course" type="text" placeholder="Course">
                                </div>
                            </div>
                            <button class="enquire-btn">Enquire now <span class="icon-more-icon"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="course-detail clearfix">
                        <div class="duration clearfix">
                            <div class="icon"><span class="icon-duration-icon"></span></div>
                            <div class="detail"> <span>Duration</span> 4 YEAR </div>
                        </div>
                        <div class="duration eligible clearfix">
                            <div class="icon"><span class="icon-eligibility-icon"></span></div>
                            <div class="detail"> <span>ELIGIBILITY:</span> HSC/<br>
                                Diploma/Equivalent </div>
                        </div>
                        <div class="duration fee clearfix">
                            <div class="detail"> <span>COURSE FEE:</span> Tk80000 </div>
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
    <section class="details-tab">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                        <ul class="nav nav-tabs course-tab" id="myTabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#curriculam" id="curriculam-tab" role="tab" data-toggle="tab" aria-controls="curriculam" aria-expanded="true">
                                    <span class="icon-curriculam-icon"></span>
                                    <div class="block">MODERN</div>
                                    CURRICULUM
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#schedule" role="tab" id="schedule-tab" data-toggle="tab" aria-controls="schedule" aria-expanded="false">
                                    <span class="icon-schedule-icon"></span>
                                    <div class="block">FEE</div>
                                    SCHEDULE
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#semester" role="tab" id="semester-tab" data-toggle="tab" aria-controls="semester" aria-expanded="false">
                                    <span class="icon-semester-icon"></span>
                                    <div class="block">SEMESTER</div>
                                    I TO VIII
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#teachers" role="tab" id="teachers-tab" data-toggle="tab" aria-controls="teachers" aria-expanded="false">
                                    <span class="icon-parents-icon"></span>
                                    <div class="block">Member Of </div>
                                    Faculty
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active in" role="tabpanel" id="curriculam" aria-labelledby="curriculam-tab">
                                <div class="table-responsive">
                                    <table class="table course-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sem 1</th>
                                                <th>Sem 2</th>
                                                <th>Sem 3</th>
                                                <th>Sem 4</th>
                                            </tr>
											<tr>
                                                <th>Sem 1</th>
                                                <th>Sem 2</th>
                                                <th>Sem 3</th>
                                                <th>Sem 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-col1">
                                                        <div class="lecture-txt">Lecture <span>1.1</span> <a href="#" class="preview">Preview</a> </div>
                                                        Lorem Ipsum is simply dummy
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="schedule" aria-labelledby="schedule-tab">
                                <div class="table-responsive">
                                    <table class="table course-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>FEES</th>
                                                <th>AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="table-col1"> One Time Payment</div>
                                                </td>
                                                <td>
                                                    <div class="fee-amt"> $2500</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1"> Short term Installment Plan </div>
                                                </td>
                                                <td>
                                                    <div class="fee-amt">$2700</div>
                                                    <ul class="fee-details">
                                                        <li>Lorem Ipsum is simply dummy text of the</li>
                                                        <li>Lorem Ipsum is simply dummy </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-col1"> Short term Installment Plan </div>
                                                </td>
                                                <td>
                                                    <div class="fee-amt">$3000</div>
                                                    <ul class="fee-details">
                                                        <li>Lorem Ipsum is simply dummy text of the</li>
                                                        <li>Lorem Ipsum is simply dummy </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="semester" aria-labelledby="semester-tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="content">
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                                <ul>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                            </li>
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="content">
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                            </li>
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                            </li>
                                            <li>
                                                <h4>Lorem Ipsum is simply dummy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</p>
                                                <ul>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="teachers" aria-labelledby="teachers-tab">
                                <ul class="row browse-teachers-list clearfix">
                                    <li class="col-xs-6 col-sm-3">
                                        <figure> <img src="images/teacher1.jpg" alt="" width="123" height="124"> </figure>
                                        <h3>Bruno Acselrad</h3>
                                        <span class="designation">Math Teacher</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <ul class="teachers-follow">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure> <img src="images/teacher2.jpg" alt="" width="123" height="124"> </figure>
                                        <h3>Bruno Acselrad</h3>
                                        <span class="designation">Senior Lecturor</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <ul class="teachers-follow">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure> <img src="images/teacher3.jpg" alt="" width="123" height="124"> </figure>
                                        <h3>Bruno Acselrad</h3>
                                        <span class="designation">Development</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <ul class="teachers-follow">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure> <img src="images/teacher4.jpg" alt="" width="123" height="124"> </figure>
                                        <h3>Bruno Acselrad</h3>
                                        <span class="designation">professor</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        <ul class="teachers-follow">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  


@endsection