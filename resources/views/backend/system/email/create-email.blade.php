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
                        <h4 class="box-title">Email Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box ">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-envelope"></i> Email Setting</h3>
                                    </div>
                                    <form id="form1" action="{{route('new_email')}}"   name="employeeform" class="form-horizontal form-label-left" method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1">Email Engine  </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select autofocus=""  name="email_type" class="form-control">
                                                        <option value="sendmail">SendMail</option>
                                                        <option value="smtp" selected=selected>SMTP</option>
                                                    </select>

                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="is_disabled " >


                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1">SMTP Username     </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="name" name="smtp_username" placeholder="" type="text" class="form-control col-md-7 col-xs-12" value="BDR" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1">SMTP Password  </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="name" name="smtp_password" placeholder="" type="password" class="form-control col-md-7 col-xs-12"  value="BDR" />
                                                        <span class="text-danger"></span>
                                                    </div></div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1"> SMTP Server  </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="name" name="smtp_server" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="smtp.bdsoft.org"  />
                                                        <span class="text-danger"></span>
                                                    </div>  </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1">SMTP Port     </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="name" name="smtp_port" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="21"  />
                                                        <span class="text-danger"></span>
                                                    </div></div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1">SMTP Security </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select  id="name" name="smtp_security" class="form-control col-md-7 col-xs-12">
                                                            <option value=""  selected="selected" >OFF</option>
                                                            <option value="ssl"  >SSL</option>
                                                            <option value="tls"  >TLS</option>
                                                        </select>
                                                        <!--      <input id="name" name="smtp_security" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value=""  /> -->
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleInputEmail1"> SMTP Auth  </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select  id="smtp_auth" name="smtp_auth" class="form-control col-md-7 col-xs-12">
                                                            <option value="true"  selected="selected" >ON</option>
                                                            <option value="false"  >OFF</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
                                                <input type="submit" class="btn btn-info pull-left" value="save">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

@endsection

