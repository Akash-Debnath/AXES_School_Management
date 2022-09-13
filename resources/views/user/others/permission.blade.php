@extends('user.body.main')
@section('user')


    <div id="content">
        <div align="center">
            <span style="color:#093565; font-size: 20px;"><b>If you are facing difficulties to pay full amount of your dues, fill up the following form to get permission for course registration or appearing at the mid-term/final examination.</b></span>
        </div>
        <br>

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        <h3 class="panel-title">
                            <b style="color: #009748; font-size: 30px; ">Application for getting Permission</b>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('save_permission')}}" enctype="multipart/form-data" id="register_form">
                           @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>I'm applying to get permission for *</label>

                                        <select class="form-control" name="application_for" required="">
                                            <option value="" disabled="" selected="">--Permission for--</option>
                                            <option value="Course Registration">Course Registration</option>
                                            <option value="Mid Term Exam">Mid Term Exam</option>
                                            <option value="Final Exam">Final Exam</option>

                                        </select>

                                    </div>
                                    <div class="form-group col-md-3">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Student ID *</label><!-- <span id="availability" class="text-danger"></span> -->
                                        <span id="error_id" class="text-danger"></span>

                                        <input type="text" class="form-control input-sm" name="student_id" placeholder="Student ID" id="student_id" required="">

                                        <span id="availability" class="text-danger"></span>
                                        <span id="error_id" class="text-danger"></span>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Name *</label>

                                        <input type="text" class="form-control input-sm" name="student_name" placeholder="Your Name" required="">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Department *</label>

                                        <select name="dept_name" class="form-control" required="">
                                            <option value="" selected="" disabled="">--Select Department--</option>
                                            <option value="BBA">BBA</option>
                                            <option value="EEE">B.Sc. in EEE</option>
                                            <option value="EEE(eve)">B.Sc. in EEE(eve)</option>
                                            <option value="CSE">B.Sc. in CSE</option>
                                            <option value="CSE(eve)">B.Sc. in CSE(eve)</option>
                                            <option value="TEX">B.Sc. in Textile</option>
                                            <option value="TEX(eve)">B.Sc. in Textile(eve)</option>
                                            <option value="English">BA(Hon's) in English</option>
                                            <option value="LLB(Hons)">LLB (Hon's)</option>

                                            <option value="JMC">Journalism &amp; Media Communication</option>
                                            <option value="BSS(Sociology)">BSS in Sociology</option>

                                            <option value="MBA(Regular)">MBA(Regular)</option>
                                            <option value="MBA(BBA Holder)">MBA(BBA Holder)</option>
                                            <option value="MBA(Executive)">MBA(Executive)</option>
                                            <option value="LLM">Master of Law (LLM)</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Campus *</label>

                                        <select class="form-control" name="campus" required="">
                                            <option value="" disabled="" selected="">--Select Campus--</option>
                                            <option value="City">City</option>
                                            <option value="Permanent">Permanent</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Current Semester*</label>

                                        <select class="form-control" name="current_semester" required="">
                                            <option value="" disabled="" selected="">--select semester--</option>
                                            <option value="Spring">Spring</option>
                                            <option value="Summer">Summer</option>
                                            <option value="Fall">Fall</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Year *</label>

                                        <input type="text" class="form-control input-sm" name="current_sem_year" placeholder="Year *" required="">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Mobile Number *</label>

                                        <input type="text" class="form-control" id="app_mobile" name="student_mobile" placeholder="Mobile Number" required="">

                                        <span id="error_phone" class="text-danger"></span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Email Address *</label>

                                        <input type="text" class="form-control" id="email" name="student_email" placeholder="Your Email *" required="">

                                        <span id="error_email" class="text-danger"></span>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label>Father’s Name*</label>

                                        <input type="text" class="form-control" name="father_name" placeholder="Father's Name *" required="">
                                    </div>
                                    <div class=" col-md-4">
                                        <label>Occupation *</label>

                                        <input type="text" class="form-control" name="father_occupation" placeholder="Father's Occupation *" required="">

                                        <span id="" class="text-danger"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Contact number*</label>

                                        <input type="text" class="form-control" id="f_mobile" name="father_number" placeholder="Contact number *" required="">

                                        <span id="" class="text-danger"></span>
                                    </div>


                                </div><hr>
                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label>Last paid amount *</label>

                                        <input type="number" class="form-control" name="last_paid_amou" placeholder="Last paid amoun" required="">
                                    </div>
                                    <div class=" col-md-2">
                                        <label>Last paid date *</label>

                                        <input type="text" class="form-control hasDatepicker" id="datepicker" name="last_paid_date" placeholder="Last paid date" required="">

                                        <span id="" class="text-danger"></span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Current Dues *</label>

                                        <input type="number" class="form-control" name="current_due" placeholder="Current Dues" required="">

                                        <span id="" class="text-danger"></span>
                                    </div>


                                    <div class="input-group form-group col-md-2">
                                        <label>I shall pay my due within *</label>

                                        <input type="text" class="form-control hasDatepicker" id="datepicker1" name="pay_within" placeholder="select date" required="">

                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Write the reasons for application</label>

                                        <div class="input-group-md">
                                            <textarea class="form-control" name="apply_reason" placeholder=""></textarea>
                                        </div>


                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Please attach relevant document</label>
                                        <div class="input-group">
                                                <input type="file" id="member_image_file1" name="member_image" class="file ">

{{--                                            <input type="text" class="form-control " disabled="" placeholder="Upload Document">--}}
{{--                                            <span class="input-group-btn">--}}
{{--                                                <button class="browse btn btn-primary input-group-md" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>--}}
{{--                                              </span>--}}
                                        </div>

                                        <p id="error1" style="display:none; color:#FF0000;">
                                            Invalid Image Format! Image Format Must Be JPG, JPEG, PNG, GIF or PDF.
                                        </p>
                                        <p id="error2" style="display:none; color:#FF0000;">
                                            Maximum File Size Limit is 2MB.
                                        </p>
                                        <p id="error3" style="display:none; color:#FF0000;">
                                            Photo must be 300 X 300 pixel(width X height)
                                        </p>
                                    </div>

                                </div>
                                <div class="row">

                                </div>
                                <hr>
                                <!--  <input class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="Register"> -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="Register">Submit</button>

                            </fieldset>
                        </form><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>


@endsection
