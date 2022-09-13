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
                                <div class="box box" >
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Role</h3>
                                    </div>
                                    <form id="form1" action="https://www.bdsoft.org/admin/roles"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                                        <div class="box-body">

                                            <input type='hidden' name='ci_csrf_token' value=''/>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label><small class="req"> *</small>
                                                <input autofocus="" id="name" name="name" placeholder="" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>


                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="box box" id="route">
                                    <div class="box-header ptbnull">
                                        <h3 class="box-title titlefix">Role List</h3>

                                    </div>
                                    <div class="box-body">
                                        <div class="mailbox-controls">
                                            <div class="pull-right">
                                            </div>
                                        </div>
                                        <div class="mailbox-messages">
                                            <div class="download_label">Role List</div>
                                            <table class="table table-striped table-bordered table-hover example">
                                                <thead>
                                                <tr>
                                                    <th>Role</th>
                                                    <th>Type</th>


                                                    <th class="text-right no-print">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="mailbox-name"> Admin</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> Teacher</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> Accountant</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> Librarian</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> Receptionist</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> Super Admin</td>
                                                    <td class="mailbox-name">
                                                        System                                                </td>


                                                    <td class="mailbox-date pull-right no-print">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mailbox-name"> rrr</td>
                                                    <td class="mailbox-name">
                                                        Custom                                                </td>


                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/permission/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Assign Permission">
                                                            <i class="fa fa-tag"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/edit/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a data-placement="left" href="https://www.bdsoft.org/admin/roles/delete/8"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?');">
                                                            <i class="fa fa-remove"></i>
                                                        </a>


                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

