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
                                    <ul class="nav nav-tabs float-right">

                                        <li><a href="#tab_staff" data-toggle="tab">Staff</a></li>
                                        <li><a href="#tab_parent" data-toggle="tab">Parent</a></li>

                                        <li class="active"><a href="#tab_students" data-toggle="tab">Student</a></li>

                                        <li class="float-left header">Users</li>
                                    </ul>
                                    <div class="tab-content box">

                                        <div class="tab-pane active table-responsive" id="tab_students">
                                            <div class="download_label">Users</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Admission No</th>
                                                    <th>Student Name</th>
                                                    <th>Username</th>
                                                    <th>Class</th>
                                                    <th>Father Name</th>
                                                    <th>Mobile Number</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane table-responsive" id="tab_parent">
                                            <div class="download_label">Users</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Guardian Name</th>
                                                    <th>Guardian Phone</th>
                                                    <th>Username</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Hasina Azmot</td>
                                                    <td>01712510088</td>
                                                    <td>parent1</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent1" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="2" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent1" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>abu askari</td>
                                                    <td>01712510011</td>
                                                    <td>parent2</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent2" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="4" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent2" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>dsds</td>
                                                    <td>0171465550</td>
                                                    <td>parent3</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent3" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="6" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent3" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>a</td>
                                                    <td>01712510054</td>
                                                    <td>parent4</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent4" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="8" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent4" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Alu khan</td>
                                                    <td>017123456789</td>
                                                    <td>parent5</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent5" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="10" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent5" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Baba</td>
                                                    <td>017987654321</td>
                                                    <td>parent6</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent6" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="12" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent6" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>hakim</td>
                                                    <td>017123456789</td>
                                                    <td>parent7</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="parent7" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="14" data-role="parent" value="checked" checked='checked' />
                                                            <label for="parent7" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane table-responsive" id="tab_staff">
                                            <div class="download_label">Users</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>

                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Designation</th>
                                                    <th>Department</th>
                                                    <th>Phone</th>
                                                    <th class="text-right">Action                                        </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="mailbox-name"> BDS9001</td>
                                                    <td class="mailbox-name"> <a href="https://www.bdsoft.org/admin/staff/profile/4">First Name</a></td>
                                                    <td class="mailbox-name"> MotheNamjiie@gmail.com</td>
                                                    <td class="mailbox-name"> Teacher</td>
                                                    <td class="mailbox-name"> Assistant Teacher</td>
                                                    <td class="mailbox-name"> Arts</td>
                                                    <td class="mailbox-name">  1234567890-</td>
                                                    <td class="relative">
                                                        <div class="material-switch pull-right">
                                                            <input id="staff4" name="someSwitchOption001" type="checkbox" class="chk" data-rowid="4" data-role="staff" value="checked" checked='checked' />
                                                            <label for="staff4" class="label-success"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.tab-pane -->
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


