@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Notification Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- left column -->
                                <form id="form1" action="https://www.bdsoft.org/admin/notification/setting"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                                    <div class="box ">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><i class="fa fa-commenting-o"></i> Notification Setting</h3>
                                        </div>
                                        <div class="around10">
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body ">
                                            <!-- Button HTML (to Trigger Modal) -->
                                            <div class="table-responsive">

                                                <table class="table table-hover">
                                                    <thead>
                                                    <th>Event</th>
                                                    <th>Option</th>
                                                    <th>Sample Message</th>
                                                    </thead>
                                                    <tbody>


                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="1">
                                                            Student Admission                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_1" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_1" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                        </td>

                                                        <td width="60%">
{{--                                                            Dear {{student_name}} your admission is confirm in Class: {{class}} Section:  {{section}} for Session: {{current_session_name}} for more--}}
                                                            detail
                                                            contact
                                                            System
                                                            Admin
{{--                                                            {{class}} {{section}} {{admission_no}} {{roll_no}} {{admission_date}} {{mobileno}} {{email}} {{dob}} {{guardian_name}} {{guardian_relation}} {{guardian_phone}} {{father_name}} {{father_phone}} {{blood_group}} {{mother_name}} {{gender}} {{guardian_email}}                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="1" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="2">
                                                            Exam Result                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_2" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_2" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_2" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            Dear {{student_name}} - {{exam_roll_no}}, your {{exam}} result has been published.                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="3">
                                                            Fee Submission                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_3" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_3" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_3" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            Dear parents, we have received Fees Amount {{fee_amount}} for  {{student_name}}  by Your School Name--}}
{{--                                                            {{class}} {{section}} {{fine_type}} {{fine_percentage}} {{fine_amount}} {{fee_group_name}} {{type}} {{code}} {{email}} {{contact_no}} {{invoice_id}} {{sub_invoice_id}} {{due_date}} {{amount}} {{fee_amount}}                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="3" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="4">
                                                            Absent Attendance                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_4" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_4" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_4" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            Absent Notice :{{student_name}}  was absent on date {{date}} in period {{subject_name}} {{subject_code}} {{subject_type}} from Your School Name                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="4" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="5">
                                                            Login Credential                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_5" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_5" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                        </td>

                                                        <td width="60%">
{{--                                                            Hello {{display_name}} your login details for Url: {{url}} Username: {{username}}  Password: {{password}}                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="5" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="6">
                                                            Homework                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_6" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_6" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_6" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
                                                            New Homework has been created for
{{--                                                            {{student_name}} at--}}



{{--                                                            {{homework_date}} for the class {{class}} {{section}} {{subject}}. kindly submit your--}}


{{--                                                            homework before {{submit_date}} .Thank you                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="6" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="7">
                                                            Fees Reminder                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_7" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_7" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_7" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            Dear parents, please pay fee amount Rs.{{due_amount}} of {{fee_type}} before {{due_date}} for {{student_name}}  from smart school (ignore if you already paid)                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="7" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="8">
                                                            Forgot Password                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_8" value="1"  checked="checked"> Email                                                    </label>
                                                        </td>

                                                        <td width="60%">
{{--                                                            Dear  {{name}} ,--}}
{{--                                                            Recently a request was submitted to reset password for your account. If you didn't make the request, just ignore this email. Otherwise you can reset your password using this link <a href='{{resetPassLink}}'>Click here to reset your password</a>,--}}
{{--                                                            if you're having trouble clicking the password reset button, copy and paste the URL below into your web browser. your username {{username}}--}}
{{--                                                            {{resetPassLink}}--}}
{{--                                                            Regards,--}}
{{--                                                            {{school_name}}                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="8" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="9">
                                                            Online examination publish exam                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_9" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_9" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_9" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            A new exam {{exam_title}} has been created for  duration: {{time_duration}} min, which will be available from:  {{exam_from}} to  {{exam_to}}.                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="9" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td width="15%">
                                                            <input type="hidden" name="ids[]" value="10">
                                                            Online examination publish result                                                </td>
                                                        <td width="25%">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="mail_10" value="1"  checked="checked"> Email                                                    </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="sms_10" value="1"  checked="checked">
                                                                SMS                                                        </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="notification_10" value="1"  checked="checked">
                                                                Mobile App                                                        </label>

                                                        </td>

                                                        <td width="60%">
{{--                                                            Exam {{exam_title}} result has been declared which was conducted between  {{exam_from}} to   {{exam_to}}, for more details, please check your student portal.                                                    <br/>--}}
                                                            <button type="button" class="button_template btn btn-primary btn-xs" id="load" data-record-id="10" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait.."><i class="fa fa-pencil-square-o"></i></button>

                                                        </td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>

                                        </div></div>
                                </form>
                            </div>

                        </div>
                    </div>
                    </div>

            </section>
        </div>
    </div>

@endsection

