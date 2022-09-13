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
                            <!--/.col (right) -->
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box">
                                    <div class="box-header ptbnull">
                                        <h3 class="box-title titlefix">System Update</h3>
                                        <div class="box-tools pull-right">

                                        </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">


                                        <div class="row text-center">
                                            <div class="col-md-6 col-md-offset-3 progress" style="display: none;">
                                                <div class="progress-bar progress-bar-striped active " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-md-offset-4">
                                                <div class="alert alert-danger">
                                                    <p class="versionup">
                                                        Your Smart School Version <span> 6.2.0</span></p>
                                                </div><!--./alert alert-danger-->
                                            </div><!--./col-md-4 -->
                                            <div class="col-md-4 col-md-offset-4">
                                                <div class="alert alert-success">
                                                    <p class="versionup">Latest Smart School Version <span> 6.3.0</span></p>
                                                </div><!--./alert alert-danger-->
                                            </div><!--./col-md-4 -->

                                            <div class='clearfix'></div>                                <div class="col-md-12">
                                                <div class="text-success">
                                                    <ul class="update-list">
                                                        <li><h5><i class="fa fa-info-circle"></i> A new version is available.</h5></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb10 mt10 upgradeup">
                                                <!-- <h4><i class="fa fa-info-circle"></i> New version is available for update.</h4> -->
                                                <form method="POST" action="https://www.bdsoft.org/admin/updater" id="form-update">
                                                    <button type="button" class="btn cfees btn-submit" name="update_btn" value="update"> Update Now</button>
                                                </form>
                                            </div><!--./col-md-12-->

                                            <div class="font15">
                                                Please check <a href="https://smart-school.in/category/changelog/smart-school" target="_blank" class="displayinline align-text-top font-weight-bold">changelog</a> for latest version update.

                                            </div>
                                        </div><!--./row-->


                                    </div><!-- /.box-body -->

                                </div>
                            </div><!--/.col (left) -->


                            <!-- right column -->

                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

