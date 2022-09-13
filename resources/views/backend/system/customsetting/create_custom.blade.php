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
                            <div class="col-md-4">
                                <!-- Horizontal Form -->
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Add Custom Field</h3>
                                    </div><!-- /.box-header -->
                                    <form id="form1" action="https://www.bdsoft.org/admin/customfield"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                                        <div class="box-body">

                                            <input type='hidden' name='ci_csrf_token' value=''/>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Field Belongs to</label> <small class="req">*</small>
                                                <select autofocus="" id="belong_to" name="belong_to" class="form-control" >
                                                    <option value="">Select</option>
                                                    <option value="students" >Student</option>

                                                    <option value="staff" >Staff</option>

                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Field Type</label> <small class="req">*</small>
                                                <select autofocus="" id="type" name="type" class="form-control" >
                                                    <option value="">Select</option>
                                                    <option value="input" >Input</option>

                                                    <option value="number" >Number</option>

                                                    <option value="textarea" >Textarea</option>

                                                    <option value="select" >Select</option>

                                                    <option value="multiselect" >Multi Select</option>

                                                    <option value="checkbox" >Checkbox</option>

                                                    <option value="date_picker" >Date Picker</option>

                                                    <option value="date_picker_time" >Datetime Picker</option>

                                                    <option value="colorpicker" >Color Picker</option>

                                                    <option value="link" >Hyperlink</option>

                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Field Name</label> <small class="req">*</small>
                                                <input id="name" name="name" placeholder="" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Grid (Bootstrap Column eg. 6) - Max is 12</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">col-md-</span>
                                                    <input type="number" max="12" class="form-control" name="column" id="column" value="12" aria-invalid="false">
                                                </div>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Field Values (Separate By Comma)</label>
                                                <textarea class="form-control" name="field_values"></textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group"> <!-- Radio group !-->
                                                <label class="control-label">Validation</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="content_available" name="validation" value="1" >
                                                        Required                                        </label>
                                                </div>



                                            </div>
                                            <div class="form-group"> <!-- Radio group !-->
                                                <label class="control-label">Visibility</label>

                                                <div class="checkbox">

                                                    <label>
                                                        <input type="checkbox" class="content_available" name="display_tbl" value="1" >
                                                        On Table                                        </label>
                                                </div>


                                            </div>

                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div><!--/.col (right) -->
                            <!-- left column -->
                            <div class="col-md-8">
                                <!-- general form elements -->
                                <div class="box box">
                                    <div class="box-header ptbnull">
                                        <h3 class="box-title titlefix">Custom Field List</h3>

                                        <div class="box-tools pull-right">
                                        </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">



                                        <div id="fade"></div>
                                        <div id="modal">
                                            <img id="loader" src="https://www.bdsoft.org//backend/images/loading_blue.gif" />
                                        </div>


                                        <div id="accordion" class="panel-group">

                                            <div class="panel panel-default">

                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsestudents" aria-expanded="false" aria-controls="collapsestudents">
                                                            <i class="more-less fa fa-plus"></i>
                                                            Student                                                </a>
                                                    </h4>

                                                </div>
                                                <div id="collapsestudents" class="panel-collapse collapse">
                                                    <div class="panel-body">


                                                        <ul class="sortable-item ui-sortable list-group" data-record_name="students">
                                                            <li id="1" class="list-group-item-sort text-left">
                                                                <span class="sort-action">



                                                                    <a href="https://www.bdsoft.org/admin/customfield/edit/1" class="btn btn-xs" data-toggle="tooltip"
                                                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                                    <a href="https://www.bdsoft.org/admin/customfield/delete/1" class="btn btn-xs" data-toggle="tooltip"
                                                                       data-original-title="Delete"><i class="fa fa-remove"></i></a>


                                                                </span> <i class="fa fa-arrows"></i> name                                                            </li>

                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">

                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsestaff" aria-expanded="false" aria-controls="collapsestaff">
                                                            <i class="more-less fa fa-plus"></i>
                                                            Staff                                                </a>
                                                    </h4>

                                                </div>
                                                <div id="collapsestaff" class="panel-collapse collapse">
                                                    <div class="panel-body">


                                                        <div class="alert alert-danger">
                                                            No Record Found                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                    </div><!-- /.box-body -->
                                </div>
                            </div><!--/.col (left) -->

                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

