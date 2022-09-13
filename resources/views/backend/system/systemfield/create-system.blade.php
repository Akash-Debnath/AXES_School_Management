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
                        <h4 class="box-title">Session Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="nav-tabs-custom box theme-shadow">
                                    <ul class="nav nav-tabs float-right ">
                                        <li><a href="#tab_parent" data-toggle="tab">Staff</a></li>
                                        <li class="active"><a href="#tab_student" data-toggle="tab" >Student</a></li>
                                        <li class="float-left header">System Fields</li>

                                    </ul>
                                    <div class="tab-content box ">
                                        <div class="tab-pane active table-responsive" id="tab_student">
                                            <div class="download_label">System Fields</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Roll Number</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="roll_no" name="roll_no" type="checkbox" data-role="roll_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="roll_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Middle Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="middlename" name="middlename" type="checkbox" data-role="middlename" class="chk" data-rowid="1" value="checked"  />
                                                            <label for="middlename" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="lastname" name="lastname" type="checkbox" data-role="lastname" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="lastname" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="category" name="category" type="checkbox" data-role="category" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="category" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Religion</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="religion" name="religion" type="checkbox" data-role="religion" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="religion" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Caste</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="cast" name="cast" type="checkbox" data-role="cast" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="cast" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile Number</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="mobile_no" name="mobile_no" type="checkbox" data-role="mobile_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="mobile_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="student_email" name="student_email" type="checkbox" data-role="student_email" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student_email" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admission Date</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="admission_date" name="admission_date" type="checkbox" data-role="admission_date" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="admission_date" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Student Photo</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="student_photo" name="student_photo" type="checkbox" data-role="student_photo" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student_photo" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Student House</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="is_student_house" name="is_student_house" type="checkbox" data-role="is_student_house" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="is_student_house" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Blood Group</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="is_blood_group" name="is_blood_group" type="checkbox" data-role="is_blood_group" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="is_blood_group" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Height</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="student_height" name="student_height" type="checkbox" data-role="student_height" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student_height" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="student_weight" name="student_weight" type="checkbox" data-role="student_weight" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student_weight" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>As on Date</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="measurement_date" name="measurement_date" type="checkbox" data-role="measurement_date" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="measurement_date" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="father_name" name="father_name" type="checkbox" data-role="father_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="father_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father Phone</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="father_phone" name="father_phone" type="checkbox" data-role="father_phone" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="father_phone" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father Occupation</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="father_occupation" name="father_occupation" type="checkbox" data-role="father_occupation" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="father_occupation" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father Photo</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="father_pic" name="father_pic" type="checkbox" data-role="father_pic" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="father_pic" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="mother_name" name="mother_name" type="checkbox" data-role="mother_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="mother_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Phone</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="mother_phone" name="mother_phone" type="checkbox" data-role="mother_phone" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="mother_phone" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Occupation</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="mother_occupation" name="mother_occupation" type="checkbox" data-role="mother_occupation" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="mother_occupation" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Photo</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="mother_pic" name="mother_pic" type="checkbox" data-role="mother_pic" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="mother_pic" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_name" name="guardian_name" type="checkbox" data-role="guardian_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Phone</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_phone" name="guardian_phone" type="checkbox" data-role="guardian_phone" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_phone" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Relation</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_relation" name="guardian_relation" type="checkbox" data-role="guardian_relation" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_relation" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Email</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_email" name="guardian_email" type="checkbox" data-role="guardian_email" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_email" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Occupation </td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_occupation" name="guardian_occupation" type="checkbox" data-role="guardian_occupation" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_occupation" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Photo</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_pic" name="guardian_pic" type="checkbox" data-role="guardian_pic" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_pic" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardian Address</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="guardian_address" name="guardian_address" type="checkbox" data-role="guardian_address" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="guardian_address" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>If Guardian Address is Current Address</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="current_address" name="current_address" type="checkbox" data-role="current_address" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="current_address" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>If Permanent Address is Current Address</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="permanent_address" name="permanent_address" type="checkbox" data-role="permanent_address" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="permanent_address" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Route List</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="route_list" name="route_list" type="checkbox" data-role="route_list" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="route_list" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hostel Details</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="hostel_id" name="hostel_id" type="checkbox" data-role="hostel_id" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="hostel_id" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Account Number </td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="bank_account_no" name="bank_account_no" type="checkbox" data-role="bank_account_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="bank_account_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Name </td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="bank_name" name="bank_name" type="checkbox" data-role="bank_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="bank_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IFSC Code</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="ifsc_code" name="ifsc_code" type="checkbox" data-role="ifsc_code" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="ifsc_code" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>National Identification Number</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="national_identification_no" name="national_identification_no" type="checkbox" data-role="national_identification_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="national_identification_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Local Identification Number</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="local_identification_no" name="local_identification_no" type="checkbox" data-role="local_identification_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="local_identification_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>RTE</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="rte" name="rte" type="checkbox" data-role="rte" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="rte" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Previous School Details</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="previous_school_details" name="previous_school_details" type="checkbox" data-role="previous_school_details" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="previous_school_details" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="student_note" name="student_note" type="checkbox" data-role="student_note" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student_note" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Upload Documents</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="upload_documents" name="upload_documents" type="checkbox" data-role="upload_documents" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="upload_documents" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane table-responsive" id="tab_parent">
                                            <div class="download_label">Users</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Designation</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_designation" name="staff_designation" type="checkbox" data-role="staff_designation" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_designation" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Department</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_department" name="staff_department" type="checkbox" data-role="staff_department" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_department" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_last_name" name="staff_last_name" type="checkbox" data-role="staff_last_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_last_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_father_name" name="staff_father_name" type="checkbox" data-role="staff_father_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_father_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_mother_name" name="staff_mother_name" type="checkbox" data-role="staff_mother_name" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_mother_name" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Joining</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_date_of_joining" name="staff_date_of_joining" type="checkbox" data-role="staff_date_of_joining" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_date_of_joining" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_phone" name="staff_phone" type="checkbox" data-role="staff_phone" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_phone" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Emergency Contact Number</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_emergency_contact" name="staff_emergency_contact" type="checkbox" data-role="staff_emergency_contact" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_emergency_contact" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Marital Status</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_marital_status" name="staff_marital_status" type="checkbox" data-role="staff_marital_status" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_marital_status" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Photo</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_photo" name="staff_photo" type="checkbox" data-role="staff_photo" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_photo" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Current Address</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_current_address" name="staff_current_address" type="checkbox" data-role="staff_current_address" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_current_address" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Permanent Address</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_permanent_address" name="staff_permanent_address" type="checkbox" data-role="staff_permanent_address" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_permanent_address" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Qualification</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_qualification" name="staff_qualification" type="checkbox" data-role="staff_qualification" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_qualification" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Work Experience</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_work_experience" name="staff_work_experience" type="checkbox" data-role="staff_work_experience" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_work_experience" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_note" name="staff_note" type="checkbox" data-role="staff_note" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_note" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>EPF No</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_epf_no" name="staff_epf_no" type="checkbox" data-role="staff_epf_no" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_epf_no" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Basic Salary</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_basic_salary" name="staff_basic_salary" type="checkbox" data-role="staff_basic_salary" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_basic_salary" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contract Type</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_contract_type" name="staff_contract_type" type="checkbox" data-role="staff_contract_type" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_contract_type" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Work Shift</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_work_shift" name="staff_work_shift" type="checkbox" data-role="staff_work_shift" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_work_shift" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Location</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_work_location" name="staff_work_location" type="checkbox" data-role="staff_work_location" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_work_location" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Leaves</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_leaves" name="staff_leaves" type="checkbox" data-role="staff_leaves" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_leaves" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Account Details</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_account_details" name="staff_account_details" type="checkbox" data-role="staff_account_details" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_account_details" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Social Media Link</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_social_media" name="staff_social_media" type="checkbox" data-role="staff_social_media" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_social_media" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Upload Documents</td>
                                                    <td>
                                                        <div class="material-switch pull-right">
                                                            <input id="staff_upload_documents" name="staff_upload_documents" type="checkbox" data-role="staff_upload_documents" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="staff_upload_documents" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

