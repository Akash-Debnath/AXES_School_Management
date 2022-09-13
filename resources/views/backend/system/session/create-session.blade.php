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
                                <div class="box ">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Add Session</h3>
                                    </div>
                                    <form id="form1" action="{{route('new_sessionsetting')}}"   method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Session</label><small class="req"> *</small>
                                                <input   name="session_name"  type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-info pull-right" value="save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="box ">
                                    <div class="box-header ptbnull">
                                        <h3 class="box-title titlefix">Session List</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="mailbox-messages">
                                            <div class="">
                                                <div class="download_label">Session List</div>
                                                <table class="table table-striped table-bordered table-hover example">
                                                    <thead>
                                                    <tr>
                                                        <th>Session</th>
                                                        <th>Status</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($sessions as $session)
                                                    <tr>
                                                        <td class="mailbox-name">{{$session->session_name}}</td>
                                                        <td class="mailbox-name">{{$session->status}}</td>
                                                        <td class="mailbox-date text-right">
                                                            <a data-placement="left" href="https://www.bdsoft.org/sessions/edit/7" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a data-placement="left" href="https://www.bdsoft.org/sessions/delete/7"class="btn btn-default btn-xs "  data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?');">
                                                                <i class="fa fa-remove"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
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

