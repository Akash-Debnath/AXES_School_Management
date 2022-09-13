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
                        <h4 class="box-title">SMS </h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                <div class="navbar navbar-expand-md">
                    <ul class="navbar-nav ml-auto ">
                        <li class="active nav-link"><a href="#tab_1" data-toggle="tab">Clickatell SMS Gateway</a></li>
                        <li><a class="nav-link" href="#tab_2" data-toggle="tab">Twilio SMS Gateway</a></li>
                        <li><a class="nav-link" href="#tab_4" data-toggle="tab">MSG91</a></li>
                        <li><a class="nav-link" href="#tab_6" data-toggle="tab">Text Local</a></li>
                        <li><a class="nav-link" href="#tab_5" data-toggle="tab">SMS Country</a></li>
                        <li><a class="nav-link" href="#tab_7" data-toggle="tab">Bulk SMS</a></li>
                        <li><a class="nav-link" href="#tab_8" data-toggle="tab">Mobi Reach</a></li>
                        <li><a class="nav-link" href="#tab_3" data-toggle="tab">Custom SMS Gateway</a></li>

                    </ul>
                </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form role="form" id="clickatell" action="https://www.bdsoft.org/smsconfig/clickatell" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">

                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Clickatell Username<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input autofocus="" type="text" class="form-control" name="clickatell_user" value="">
                                                        <span class=" text text-danger clickatell_user_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Clickatell Password<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="clickatell_password"  value="">
                                                        <span class=" text text-danger clickatell_password_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Clickatell Api Id<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="clickatell_api_id"  value="">
                                                        <span class=" text text-danger clickatell_api_id_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">

                                                        <select class="form-control" name="clickatell_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger clickatell_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://www.clickatell.com/" target="_blank"><img src="https://www.bdsoft.org/backend/images/clickatell.png"><p>https://www.clickatell.com</p></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="clickatell_loader"></span>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <form role="form" id="twilio" id="twilio" action="https://www.bdsoft.org/smsconfig/twilio" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Twilio Account SID</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="twilio_account_sid" value="">
                                                        <span class="text text-danger twilio_account_sid_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Authentication Token</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="twilio_auth_token" value="">
                                                        <span class="text text-danger twilio_auth_token_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Registered Phone Number</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="twilio_sender_phone_number" value="">
                                                        <span class="text text-danger twilio_sender_phone_number_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="twilio_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger twilio_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://www.twilio.com/?v=t" target="_blank"><img src="https://www.bdsoft.org/backend/images/twilio.png"><p>https://www.twilio.com</p></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="twilio_loader"></span>

                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <form role="form" id="custom" id="custom" action="https://www.bdsoft.org/smsconfig/custom" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Gateway Name<small class="req"> *</small>
                                                    </label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="name" value="rrr">
                                                        <span class="text text-danger name_error"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="custom_status">
                                                            <option
                                                                value=""
                                                            >Select</option>
                                                            <option
                                                                value="enabled"
                                                                selected=selected                                                                    >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger custom_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href=""><img src="https://www.bdsoft.org/backend/images/custom-sms.png"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="custom_loader"></span>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_4">
                            <form role="form" id="msg_nineone" id="msg_nineone" action="https://www.bdsoft.org/smsconfig/msgnineone" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Auth Key<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="authkey" value="">
                                                        <span class="text text-danger authkey_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Sender ID<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="senderid" value="">
                                                        <span class="text text-danger senderid_error"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="msg_nineone_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger msg_nineone_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://msg91.com/" target="_blank"><img src="https://www.bdsoft.org/backend/images/msg91.png"><p>https://msg91.com</p></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="msg_nineone_loader"></span>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_5">
                            <form role="form" id="smscountry" id="smscountry" action="https://www.bdsoft.org/smsconfig/smscountry" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Username<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="smscountry" value="">
                                                        <span class="text text-danger smscountry_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Sender ID<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="smscountrysenderid" value="">
                                                        <span class="text text-danger smscountrysenderid_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Password<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="smscountrypassword" value="">
                                                        <span class="text text-danger smscountrypassword_error"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="smscountry_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger smscountry_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5  text text-center disblock">
                                                <a href="https://www.smscountry.com/" target="_blank"><img src="https://www.bdsoft.org/backend/images/sms-country.jpg"><p>https://www.smscountry.com</p></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="smscountry_loader"></span>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_6">

                            <form role="form" id="text_local" id="text_local" action="https://www.bdsoft.org/smsconfig/textlocal" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Username</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="text_local" value="">
                                                        <span class="text text-danger text_local_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Hash Key</label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="text_localpassword" value="">
                                                        <span class="text text-danger text_localpassword_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Sender ID</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="text_localsenderid" value="">
                                                        <span class="text text-danger text_localsenderid_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="text_local_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger text_local_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://www.textlocal.in/" target="_blank"><img src="https://www.bdsoft.org/backend/images/textlocal.png"><p>https://www.textlocal.in</p></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="text_local_loader"></span>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_7">

                            <form role="form"  id="bulk_sms" action="https://www.bdsoft.org/smsconfig/bulk_sms" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Username<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="bulk_sms_user_name" value="">
                                                        <span class="text text-danger bulk_sms_user_name_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Password<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="bulk_sms_user_password" value="">
                                                        <span class="text text-danger bulk_sms_user_password_error"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="bulk_sms_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger bulk_sms_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://www.textlocal.in/" target="_blank"><img src="https://www.bdsoft.org/backend/images/bulk_sms.png" class="img-responsive center-block"><p>https://www.textlocal.in</p></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="bulk_sms_loader"></span>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_8">

                            <form role="form"  id="mobireach" action="https://www.bdsoft.org/smsconfig/mobireach" class="form-horizontal" method="post">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 minheight170">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Auth Key<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="mobireach_auth_key" value="">
                                                        <span class="text text-danger mobireach_auth_key_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Sender ID<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="mobireach_sender_id" value="">
                                                        <span class="text text-danger mobireach_sender_id_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Route Id<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="mobireach_route_id" value="">
                                                        <span class="text text-danger mobireach_route_id_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Status<small class="req"> *</small></label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="mobireach_status">
                                                            <option
                                                                value=""
                                                                selected=selected                                                                    >Select</option>
                                                            <option
                                                                value="enabled"
                                                            >Enabled</option>
                                                            <option
                                                                value="disabled"
                                                            >Disabled</option>
                                                        </select>
                                                        <span class=" text text-danger mobireach_status_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 text text-center disblock">
                                                <a href="https://user.mobireach.com.bd/" target="_blank"><img src="https://www.bdsoft.org/backend/images/mobireach.jpg"><p>https://user.mobireach.com.bd/</p></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary col-md-offset-3">Save</button>&nbsp;&nbsp;<span class="mobireach_loader"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </div></div>
    </section>
        </div>
    </div>

@endsection
