@extends('user.body.main')
@section('user')

    <div class="container registration_box">



    <br />



    <br />



    <div align="center">







        <!-- <span style="color:red; font-size: 18px;">Payment has been closed!<br></span><br> --></div>











    <form method="post" action="{{route('save_admit_card')}}">
        @csrf



        <div class="tab-content" >



            <div class="tab-pane active col-sm-8 col-sm-offset-2" id="team_details">



                <div class="panel panel-default">



                    <div align="center" class="panel-heading">

                        <h3 class="">

                            <b ><span style="color: #009748;">Download</span> <span style="color: #D8A541;">Admit Card</span>

                            </b>

                        </h3>



                    </div>





                    <div class="panel-body">



                        <div align="center">

                            <span style="color:red; font-size: 17px;"> Note: You have to make confirm your payment of tuition fees before downloading the admit card<br></span><br>

                        </div>





                        <div class="row">



                            <div class="col-md-12">



                                <div class="form-group">

                                    <label align="center">Student ID</label>

                                    <input type="text" class="form-control form-control-lg" name="student_id"  placeholder="Enter your Student ID" required="">



                                </div>

                                <div class="form-group">

                                    <label>Department *</label>



                                    <select name="st_department" class="form-control" required="">

                                        <option value="" name="" selected disabled="">--Select Department--</option>

                                        <option value="BBA">BBA</option>

                                        <option value="EEE">B.Sc. in EEE</option>

                                        <option value="EEE(eve)">B.Sc. in EEE(eve)</option>

                                        <option value="CSE">B.Sc. in CSE</option>

                                        <option value="CSE(eve)">B.Sc. in CSE(eve)</option>

                                        <option value="TEX">B.Sc. in Textile</option>

                                        <option value="TEX">B.Sc. in Textile(eve)</option>

                                        <option value="English">BA(Hon's) in English</option>

                                        <option value="LLB(Hons)">LLB (Hon's)</option>



                                        <option value="JMC">Journalism & Media Communication</option>

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





                                </div>

                                <div class="form-group">



                                    <label align="center">Mobile</label>

                                    <input type="text" class="form-control" id="app_mobile" name="student_mobile" placeholder="Your mobile *" required="">

                                    <span id="error_phone" class="text-danger"></span>

                                </div>





{{--                                <div class="form-group">--}}



{{--                                    <input type="checkbox" id="terms_and_condition" /> Check here to <span style="color: green;" >Confirm</span>--}}



{{--                                </div>--}}



                            </div>



                        </div>



                        <div align="center">

                            <label class="text-danger">NOTE: Please fill out all fields correctly.<br>Use valid format of email and mobile.</label><br><br>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-outline-success" value="submit">
                            </div>
{{--                            <button type="submit" value="Submit" id="confirm_submit" disabled="" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>--}}

                        </div>







                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection
