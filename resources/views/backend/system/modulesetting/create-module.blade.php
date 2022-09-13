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
                        <h4 class="box-title">Module Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="nav-tabs-custom box theme-shadow">
                                    <ul class="nav nav-tabs float-right">

                                        <li><a href="#tab_parent" data-toggle="tab">Parent</a></li>
                                        <li><a href="#tab_students" data-toggle="tab">Student</a></li>
                                        <li class="active"><a href="#tab_system" data-toggle="tab">System</a></li>

                                        <li class="float-left header"> Modules</li>
                                    </ul>
                                    <div class="tab-content box">
                                        <div class="tab-pane table-responsive active" id="tab_system">
                                            <div class="download_label">Modules</div>
                                            <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>

                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Fees Collection</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system2" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="2" value="checked" checked='checked' />
                                                            <label for="system2" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Income</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system3" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="3" value="checked" checked='checked' />
                                                            <label for="system3" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Expense</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system4" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="4" value="checked" checked='checked' />
                                                            <label for="system4" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Student Attendance</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system5" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="5" value="checked" checked='checked' />
                                                            <label for="system5" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Examination</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system6" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="6" value="checked" checked='checked' />
                                                            <label for="system6" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Download Center</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system8" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="8" value="checked" checked='checked' />
                                                            <label for="system8" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Library</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system9" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="9" value="checked" checked='checked' />
                                                            <label for="system9" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Inventory</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system10" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="10" value="checked" checked='checked' />
                                                            <label for="system10" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Transport</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system11" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="11" value="checked" checked='checked' />
                                                            <label for="system11" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hostel</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system12" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="12" value="checked" checked='checked' />
                                                            <label for="system12" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Communicate</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system13" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="13" value="checked" checked='checked' />
                                                            <label for="system13" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Front CMS</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system16" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="16" value="checked" checked='checked' />
                                                            <label for="system16" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Front Office</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system17" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="17" value="checked" checked='checked' />
                                                            <label for="system17" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Homework</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system19" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="19" value="checked" checked='checked' />
                                                            <label for="system19" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Certificate</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system20" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="20" value="checked" checked='checked' />
                                                            <label for="system20" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Calendar To Do List</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system21" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="21" value="checked" checked='checked' />
                                                            <label for="system21" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Online Examination</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system23" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="23" value="checked" checked='checked' />
                                                            <label for="system23" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system25" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="25" value="checked" checked='checked' />
                                                            <label for="system25" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Multi Class</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system26" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="26" value="checked" checked='checked' />
                                                            <label for="system26" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Online Admission</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system27" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="27" value="checked" checked='checked' />
                                                            <label for="system27" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alumni</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system28" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="28" value="checked" checked='checked' />
                                                            <label for="system28" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lesson Plan</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="system29" name="someSwitchOption001" type="checkbox" data-role="system" class="chk" data-rowid="29" value="checked" checked='checked' />
                                                            <label for="system29" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane table-responsive" id="tab_students">
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
                                                    <td>Fees</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student1" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="student1" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Homework</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student3" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="3" value="checked" checked='checked' />
                                                            <label for="student3" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Download Center</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student4" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="4" value="checked" checked='checked' />
                                                            <label for="student4" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Attendance</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student5" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="5" value="checked" checked='checked' />
                                                            <label for="student5" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Examinations</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student7" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="7" value="checked" checked='checked' />
                                                            <label for="student7" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Notice Board</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student8" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="8" value="checked" checked='checked' />
                                                            <label for="student8" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Library</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student11" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="11" value="checked" checked='checked' />
                                                            <label for="student11" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Transport Routes</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student12" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="12" value="checked" checked='checked' />
                                                            <label for="student12" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hostel Rooms</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student13" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="13" value="checked" checked='checked' />
                                                            <label for="student13" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Calendar To Do List</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student14" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="14" value="checked" checked='checked' />
                                                            <label for="student14" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Online Examination</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student15" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="15" value="checked" checked='checked' />
                                                            <label for="student15" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Teachers Rating</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student16" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="16" value="checked" checked='checked' />
                                                            <label for="student16" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student17" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="17" value="checked" checked='checked' />
                                                            <label for="student17" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lesson Plan</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student19" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="19" value="checked" checked='checked' />
                                                            <label for="student19" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Syllabus Status</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student20" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="20" value="checked" checked='checked' />
                                                            <label for="student20" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apply Leave</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="student23" name="someSwitchOption001" type="checkbox" data-role="student" class="chk" data-rowid="23" value="checked" checked='checked' />
                                                            <label for="student23" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.tab-pane -->
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
                                                    <td>Fees</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent1" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="1" value="checked" checked='checked' />
                                                            <label for="parent1" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Homework</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent3" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="3" value="checked" checked='checked' />
                                                            <label for="parent3" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Download Center</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent4" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="4" value="checked" checked='checked' />
                                                            <label for="parent4" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Attendance</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent5" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="5" value="checked" checked='checked' />
                                                            <label for="parent5" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Examinations</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent7" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="7" value="checked" checked='checked' />
                                                            <label for="parent7" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Notice Board</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent8" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="8" value="checked" checked='checked' />
                                                            <label for="parent8" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Library</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent11" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="11" value="checked" checked='checked' />
                                                            <label for="parent11" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Transport Routes</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent12" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="12" value="checked" checked='checked' />
                                                            <label for="parent12" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hostel Rooms</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent13" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="13" value="checked" checked='checked' />
                                                            <label for="parent13" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Calendar To Do List</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent14" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="14" value="checked" checked='checked' />
                                                            <label for="parent14" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Online Examination</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent15" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="15" value="checked" checked='checked' />
                                                            <label for="parent15" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Teachers Rating</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent16" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="16" value="checked" checked='checked' />
                                                            <label for="parent16" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent17" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="17" value="checked" checked='checked' />
                                                            <label for="parent17" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lesson Plan</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent19" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="19" value="checked" checked='checked' />
                                                            <label for="parent19" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Syllabus Status</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent20" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="20" value="checked" checked='checked' />
                                                            <label for="parent20" class="label-success"></label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Apply Leave</td>



                                                    <td class="relative">
                                                        <div class="material-switch pull-right">

                                                            <input id="parent23" name="someSwitchOption001" type="checkbox" data-role="parent" class="chk" data-rowid="23" value="checked" checked='checked' />
                                                            <label for="parent23" class="label-success"></label>
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

