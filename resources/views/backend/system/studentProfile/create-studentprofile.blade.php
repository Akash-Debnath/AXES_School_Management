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
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Student Profile Update</h3>
                                    </div>
                                    <div class="box-body">
                                        <form action="https://www.bdsoft.org/student/profilesetting" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="sch_id" value="1">
                                            <div class="form-group row">
                                                <label class="col-sm-4">Allow Editable Form Fields</label>
                                                <div class="col-sm-8">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="student_profile_edit" value="0" checked >Disabled                                                </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="student_profile_edit" value="1" >Enabled                                                </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary"> Save</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="box-header">
                                            <h3 class="box-title">Allowed edit form fields on student profile</h3></div>
                                        <div class="download_label">Allowed edit form fields on student profile</div>
                                        <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">

                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>First Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_firstname" name="firstname" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_firstname" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_admission_date" name="admission_date" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_admission_date" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Middle Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_middlename" name="middlename" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_middlename" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_lastname" name="lastname" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_lastname" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>RTE</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_rte" name="rte" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_rte" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Student Photo</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_student_photo" name="student_photo" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_student_photo" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_mobile_no" name="mobile_no" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_mobile_no" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_student_email" name="student_email" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_student_email" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Religion</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_religion" name="religion" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_religion" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caste</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_cast" name="cast" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_cast" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_dob" name="dob" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_dob" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_is_blood_group" name="is_blood_group" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_is_blood_group" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_gender" name="gender" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_gender" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Current Address</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_current_address" name="current_address" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_current_address" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Permanent Address</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_permanent_address" name="permanent_address" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_permanent_address" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_category" name="category" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_category" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bank Account Number</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_bank_account_no" name="bank_account_no" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_bank_account_no" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bank Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_bank_name" name="bank_name" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_bank_name" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>IFSC Code</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_ifsc_code" name="ifsc_code" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_ifsc_code" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_father_name" name="father_name" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_father_name" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father Phone</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_father_phone" name="father_phone" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_father_phone" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father Occupation</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_father_occupation" name="father_occupation" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_father_occupation" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_mother_name" name="mother_name" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_mother_name" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother Phone</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_mother_phone" name="mother_phone" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_mother_phone" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Student House</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_is_student_house" name="is_student_house" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_is_student_house" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother Occupation</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_mother_occupation" name="mother_occupation" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_mother_occupation" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Name</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_name" name="guardian_name" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_name" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Relation</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_relation" name="guardian_relation" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_relation" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Phone</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_phone" name="guardian_phone" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_phone" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Occupation</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_occupation" name="guardian_occupation" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_occupation" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Address</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_address" name="guardian_address" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_address" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Email</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_email" name="guardian_email" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_email" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>National Identification Number</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_national_identification_no" name="national_identification_no" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_national_identification_no" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Local Identification Number</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_local_identification_no" name="local_identification_no" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_local_identification_no" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father Photo</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_father_pic" name="father_pic" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_father_pic" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother Photo</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_mother_pic" name="mother_pic" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_mother_pic" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Guardian Photo</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_guardian_pic" name="guardian_pic" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_guardian_pic" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Height</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_student_height" name="student_height" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_student_height" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Weight</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_student_weight" name="student_weight" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_student_weight" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Previous School Details</td>
                                                <td  class="text-right">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_previous_school_details" name="previous_school_details" type="checkbox" data-role="field_" class="chk"  value=""  checked="checked"/>
                                                        <label for="field_previous_school_details" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

