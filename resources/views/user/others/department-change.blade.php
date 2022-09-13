@extends('user.body.main')
@section('user')


    <div id="content">
{{--        <div align="center">--}}
{{--            <span style="color:#093565; font-size: 20px;"><b>If you are facing difficulties to pay full amount of your dues, fill up the following form to get permission for course registration or appearing at the mid-term/final examination.</b></span>--}}
{{--        </div>--}}
        <br>

        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        <h3 class="panel-title">
                            <b style="color: #009748; font-size: 20px; ">Application form for Department Change</b>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('save_department_change')}}" enctype="multipart/form-data" id="register_form">
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
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Present Department *</label>

                                        <select name="present_dept" class="form-control" required="">
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
                                    <div class="form-group col-md-6">
                                        <label>Transfer To *</label>

                                        <select name="to_be_dept" class="form-control" required="">
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


                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-6">
                                        <label>Write the reason for department Transfer/Change:</label>

                                        <div class="input-group-md">
                                            <textarea class="form-control" name="apply_reason" placeholder=""></textarea>
                                        </div>


                                    </div>


                                </div>


                                 <input class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="submit">
{{--                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit_details" name="submit" value="Register">Submit</button>--}}

                            </fieldset>


                        </form><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>


@endsection

