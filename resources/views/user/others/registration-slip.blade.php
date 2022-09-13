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
                            <b style="color: #009748; font-size: 30px; ">Registration Slip</b>
                        </h3>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="{{route('save_register_slip')}}">
                            @csrf

                            <div class="tab-content">

                                <div class="tab-pane active col-sm-8 col-sm-offset-2" id="team_details">

                                    <div class="panel panel-default">

                                        <div class="panel-heading" align="center">
                                            <h3 class="">
                                                <b><span style="color: #009748;">Download</span> <span style="color: #D8A541;">Registration Slip</span>
                                                </b>
                                            </h3>

                                        </div>


                                        <div class="panel-body">

                                            <div align="center">
                                                <!-- <span style="color:red; font-size: 17px;">You have to make confirm your payment of tuition fees before downloading the admit card<br></span> --><br>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label align="center">Student ID</label>
                                                        <input type="text" class="form-control form-control-lg" name="student_id" placeholder="Enter your Student ID" required="">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Department *</label>

                                                        <select name="dept" class="form-control" required="">
                                                            <option value="" selected="" disabled="">--Select Department--</option>
                                                            <option value="BBA">BBA</option>
                                                            <option value="EEE">B.Sc. in EEE</option>
                                                            <option value="EEE(eve)">B.Sc. in EEE(eve)</option>
                                                            <option value="CSE">B.Sc. in CSE</option>
                                                            <option value="CSE(eve)">B.Sc. in CSE(eve)</option>
                                                            <option value="TEX">B.Sc. in Textile</option>
                                                            <option value="TEX">B.Sc. in Textile(eve)</option>
                                                            <option value="English">BA(Hon's) in English</option>
                                                            <option value="LLB(Hons)">LLB (Hon's)</option>

                                                            <option value="JMC">Journalism &amp; Media Communication</option>
                                                            <option value="FTDM">Film, Television and Digital Media (FTDM)</option>
                                                            <option value="BSS(Sociology)">BSS in Sociology</option>

                                                            <option value="MBA(Regular)">MBA(Regular)</option>
                                                            <option value="MBA(BBA Holder)">MBA(BBA Holder)</option>
                                                            <option value="MBA(Executive)">MBA(Executive)</option>
                                                            <option value="LLM">Master of Law (LLM)</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group">

                                                        <label align="center">Name</label>
                                                        <input type="text" class="form-control" name="student_name" placeholder="Your Name *" required="">
                                                    </div>
                                                    <div class="form-group">

                                                        <label align="center">Email</label>
                                                        <input type="text" class="form-control" id="email" name="student_email" placeholder="Your Email *" required="">
                                                        <span id="error_email" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group">

                                                        <label align="center">Mobile</label>
                                                        <input type="text" class="form-control" id="app_mobile" name="student_mobile" placeholder="Your mobile *" required="">
                                                        <span id="error_phone" class="text-danger"></span>
                                                    </div>


{{--                                                    <div class="form-group">--}}

{{--                                                        <input type="checkbox" id="terms_and_condition"> Check here to <span style="color: green;">Confirm</span>--}}

{{--                                                    </div>--}}

                                                </div>

                                            </div>

                                            <div align="center">
                                                <label class="text-danger">NOTE: Please fill out all fields correctly.<br>Use valid format of email and mobile.</label><br><br>

                                                <input type="submit" class="btn btn-outline-success" value="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>


@endsection

