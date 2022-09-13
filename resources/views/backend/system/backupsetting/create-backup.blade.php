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
                            <div class="col-md-8">
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-database"></i> Backup History</h3>
                                        <div class="box-tools pull-right">
                                            <form id="form1" action="https://www.bdsoft.org/admin/admin/backup"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" role="form">
                                                <input type='hidden' name='ci_csrf_token' value=''/>                                                                    <button class="btn btn-primary btn-sm btn-info" type="submit" name="backup" value="backup"><i class="fa fa-plus-square-o"></i>   Create Backup</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="box-body">


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive mailbox-messages">
                                                    <table class="table table-hover table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Backup Files</th>
                                                            <th class="text-right" colspan="4">
                                                                Action                                                </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div>
                            <div class="col-md-4 col-sm-4">
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Upload From Local Directory</h3>
                                    </div>
                                    <form role="form" action="https://www.bdsoft.org/admin/admin/backup" method="post" enctype="multipart/form-data">
                                        <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="box-body">
                                            <input class="filestyle form-control" data-height="30"  type="file" name="file" id="exampleInputFile" >
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="box-footer">
                                            <button class="btn btn-primary btn-sm pull-right" type="submit" name="backup" value="upload"><i class="fa fa-upload"></i> Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Cron Secret Key</h3>
                                        <div class="box-tools pull-right">
                                            <a class="btn btn-primary btn-sm btn-info" data-toggle="tooltip" title="Cron Secret Key" href="https://www.bdsoft.org/admin/admin/addCronsecretkey/1">Generate</a>
                                        </div>

                                    </div>
                                    <div class="box-body cronkeyheight">
                                        <div style="display:none" id="cronkey">
                                            <p class="hideeyep"></p>
                                        </div>
                                        <a class="hideeye" data-toggle="tooltip" title="Cron Secret Key" id="showbtn" onclick="showkey()" href="#"><i class="fa fa-eye"></i></a>

                                    </div>

                                </div><!--./box box-warning-->
                            </div><!--./col-md-4-->
                            <!-- <div class="col-md-4"></div> -->

                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

