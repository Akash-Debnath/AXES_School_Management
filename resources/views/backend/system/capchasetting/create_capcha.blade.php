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
                        <h4 class="box-title">Captcha Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-tabs-custom box theme-shadow">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header">Captcha Setting</li>

                                    </ul>
                                    <div class="tab-content box">
                                        <div class="download_label">Captcha Setting</div>
                                        <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>User Login</td>
                                                <td class="relative">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_userlogin" name="userlogin" type="checkbox" data-role="field_" class="chk"  value="" />
                                                        <label for="field_userlogin" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Admin Login</td>
                                                <td class="relative">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_login" name="login" type="checkbox" data-role="field_" class="chk"  value="" />
                                                        <label for="field_login" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Online Admission</td>
                                                <td class="relative">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_admission" name="admission" type="checkbox" data-role="field_" class="chk"  value="" />
                                                        <label for="field_admission" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Complain</td>
                                                <td class="relative">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_complain" name="complain" type="checkbox" data-role="field_" class="chk"  value="" />
                                                        <label for="field_complain" class="label-success"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Contact Us</td>
                                                <td class="relative">
                                                    <div class="material-switch pull-right">
                                                        <input id="field_contact_us" name="contact_us" type="checkbox" data-role="field_" class="chk"  value="" />
                                                        <label for="field_contact_us" class="label-success"></label>
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

