@extends('user.body.main')
@section('user')
    <div id="content">
        <div align="center">
            <span style="color:#093565; font-size: 15px;"><b>Students who have scored less than 15 in a course in the Science &amp; Engineering Faculty and less than 12 in a course in the GBS, Law and Arts Faculties in the Mid-term examination are requested to fill up this form and contact their course teachers by 24th August 2021 for improvement examination. A fee of Tk.1500/= (Taka One thousand and Five hundred) per course is required for improvement examination.</b></span>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading" align="center">
                        <h3 class="panel-title">
                            <b style="color: #009748; font-size: 20px; ">Application for Improvement Examination (Mid-term only)</b>
                        </h3>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{route('improvement_post')}}" enctype="multipart/form-data" id="">
                            @csrf
                            <fieldset>

                                <div class="form-group">
                                    <label>Student ID *</label>

                                    <input type="text" class="form-control input-sm" name="student_id" placeholder="Student ID" required="">

                                </div>
                                <div class="form-group">
                                    <label>Name *</label>

                                    <input type="text" class="form-control input-sm" name="student_name" placeholder="Your Name" required="">

                                </div>
                                <div class="form-group">
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
                                <div class="form-group">
                                    <label>Campus *</label>

                                    <select class="form-control" name="campus" required="">
                                        <option value="" disabled="" selected="">--select campus--</option>
                                        <option value="City">City</option>
                                        <option value="Permanent">Permanent</option>
                                    </select>

                                </div>


                                <div class="form-group">
                                    <label>Semester *</label>

                                    <select class="form-control" name="current_sem" required="">
                                        <option value="" disabled="" selected="">--select semester--</option>
                                        <option value="Spring">Spring</option>
                                        <option value="Summer">Summer</option>
                                        <option value="Fall">Fall</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Year *</label>

                                    <input type="text" class="form-control input-sm" name="current_sem_year" placeholder="Year *" required="">

                                </div>

                                <div class="form-group">
                                    <label>Mobile Number *</label>

                                    <input type="text" class="form-control" id="app_mobile" name="student_mobile" placeholder="Mobile Number" required="">

                                    <span id="error_phone" class="text-danger"></span>
                                </div>
                                <div class="form-group ">
                                    <label>Email Address *</label>

                                    <input type="text" class="form-control" id="email" name="student_email" placeholder="Your Email *" required="">

                                    <span id="error_email" class="text-danger"></span>
                                </div>

                                <div class="form-group ">
                                    <label>Particular of the courses *</label>

                                    <input type="text" class="form-control" id="" name="course_name" placeholder="Your Email *" required="">

                                    <span id="error_email" class="text-danger"></span>
                                </div>


{{--                                <label>Particular of the courses *</label>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="table-responsive col-sm-12">--}}
{{--                                        <table class="table table-bordered" id="dynamic_field1">--}}
{{--                                            <tbody><tr>--}}
{{--                                                <td><input type="text" name="applied_course[]" placeholder="Course code" class="form-control name_list" required=""></td><td><input type="text" name="course_title[]" placeholder="Course title" class="form-control name_list" required=""></td><td><input type="text" name="course_teacher[]" placeholder="Course teacher name" class="form-control name_list" required=""></td><td><input type="text" name="mid_mark[]" placeholder="Mid-term Mark" class="form-control name_list" required=""></td>--}}
{{--                                                <td><button type="button" name="add" id="add1" class="btn btn-success"><i class="fa fa-plus-square"></i> Click Here to add more course</button></td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody></table>--}}
{{--                                    </div>--}}

{{--                                </div><hr>--}}

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Amount of Fee Paid TK </label>

                                        <input type="number" min="0.00" class="form-control" name="paid_amount" placeholder="Amount of fee paid">

                                        <span id="error_phone" class="text-danger"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Date </label>

                                        <input type="text" class="form-control hasDatepicker" id="datepicker" name="paid_date" placeholder="date">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Payment Option</label>

                                        <select class="form-control" name="payment_option">
                                            <option value="" disabled="" selected="">--select option--</option>
                                            <option>Online &amp; mobile banking</option>
                                            <option>Gub Rockect</option>
                                            <option>Prime Bank</option>
                                            <option>Bank Asia</option>
                                            <option>Dutch Bangla Bank</option>

                                        </select>

                                    </div>

                                </div>


                               <input class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="submit">
{{--                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="" disabled="" value="Register">Submit</button>--}}

                            </fieldset>


                        </form><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>

@endsection
