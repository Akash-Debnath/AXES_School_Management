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
                        <h4 class="box-title">Payment Methods</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="nav-tabs-custom box  theme-shadow">
                                    <div class="box-header with-border">
                                        <h3 class="box-title titlefix">Payment Methods</h3>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs2">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Paypal</a></li>
                                        <li><a href="#tab_2" data-toggle="tab">Stripe</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">PayU</a></li>
                                        <li><a href="#tab_4" data-toggle="tab">CCAvenue</a></li>
                                        <li><a href="#tab_5" data-toggle="tab">InstaMojo</a></li>
                                        <li><a href="#tab_6" data-toggle="tab">Paystack</a></li>
                                        <li><a href="#tab_7" data-toggle="tab">Razorpay</a></li>
                                        <li><a href="#tab_8" data-toggle="tab">Paytm</a></li>
                                        <li><a href="#tab_9" data-toggle="tab">Midtrans</a></li>
                                        <li><a href="#tab_10" data-toggle="tab">Pesapal</a></li>
                                        <li><a href="#tab_11" data-toggle="tab">Flutter Wave </a></li>
                                        <li><a href="#tab_12" data-toggle="tab">iPay Africa</a></li>
                                        <li><a href="#tab_13" data-toggle="tab">JazzCash</a></li>
                                        <li><a href="#tab_14" data-toggle="tab">Billplz</a></li>
                                    </ul>
                                    <div class="tab-content pb0 box ">
                                        <div class="tab-pane active " id="tab_1">
                                            <form role="form" id="paypal" action="https://www.bdsoft.org/admin/paymentsettings/paypal" class="form-horizontal" method="post">
                                                <div class="box-body ">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Paypal Username<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input autofocus="" id="name" name="paypal_username" placeholder="" type="text" class="form-control col-md-7 col-xs-12" value="" />
                                                                        <span class=" text text-danger paypal_username_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Paypal Password<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input id="name" name="paypal_password" placeholder="" type="password" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paypal_password_error"></span>
                                                                    </div></div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Paypal Signature<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input id="name" name="paypal_signature" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paypal_signature_error"></span>
                                                                    </div>  </div>


                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.paypal.com/in/home" target="_blank">
                                                                    <h5>Multinational Payment Gateway</h5>
                                                                    <img src="https://www.bdsoft.org/backend/images/paypal.png" width="200"><p>https://www.paypal.com</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 paypal_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <form role="form" id="stripe" id="stripe" action="https://www.bdsoft.org/admin/paymentsettings/stripe" class="form-horizontal" method="post">
                                                <div class="box-body minheight149">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">Stripe API Secret Key<small class="req"> *</small></label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="api_secret_key" value="">
                                                                        <span class=" text text-danger api_secret_key_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">
                                                                        Stripe Publishable Key<small class="req"> *</small></label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="api_publishable_key" value="">
                                                                        <span class=" text text-danger api_publishable_key_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://stripe.com/" target="_blank">
                                                                    <h5>Multinational Payment Gateway</h5>
                                                                    <img src="https://www.bdsoft.org/backend/images/stripe.png"><p>https://stripe.com</p></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 stripe_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <form role="form" id="payu" id="custom" action="https://www.bdsoft.org/admin/paymentsettings/payu" class="form-horizontal" method="post">
                                                <div class="box-body minheight149">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">PayU Money Key<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="key" value="">
                                                                        <span class="text text-danger key_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">PayU Money Salt<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="salt" value="">
                                                                        <span class="text text-danger salt_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.payumoney.com" target="_blank">
                                                                    <h5>Payment Gateway for India</h5>
                                                                    <img src="https://www.bdsoft.org/backend/images/paym.png"><p>https://www.payumoney.com</p></a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.box-body -->

                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 payu_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="tab_4">
                                            <form role="form" id="ccavenue"  action="https://www.bdsoft.org/admin/paymentsettings/ccavenue" class="form-horizontal" method="post">
                                                <div class="box-body minheight149">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">CCAvenue Merchant ID<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="ccavenue_secret" value="">
                                                                        <span class="text text-danger ccavenue_secret_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">CCAvenue Working Key<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="ccavenue_salt" value="">
                                                                        <span class="text text-danger ccavenue_salt_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">Access Code<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="ccavenue_api_publishable_key" value="">
                                                                        <span class="text text-danger ccavenue_api_publishable_key_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.ccavenue.com" target="_blank">
                                                                    <h5>Payment Gateway for India</h5>
                                                                    <img src="https://www.bdsoft.org/backend/images/ccavenue.png" width="200"><p>https://www.ccavenue.com</p></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 ccavenue_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="tab_5">
                                            <form role="form" id="instamojo"  action="https://www.bdsoft.org/admin/paymentsettings/instamojo" class="form-horizontal" method="post">
                                                <div class="box-body minheight149">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">Private API Key<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="instamojo_apikey" value="">
                                                                        <span class="text text-danger instamojo_apikey_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">Private Auth Token<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="instamojo_authtoken" value="">
                                                                        <span class="text text-danger instamojo_authtoken_error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-5 control-label">Private Salt<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" class="form-control" name="instamojo_salt" value="">
                                                                        <span class="text text-danger instamojo_salt_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.instamojo.com/" target="_blank">
                                                                    <h5>Payment Gateway for India</h5>
                                                                    <img src="https://www.bdsoft.org/backend/images/instamojo.png" width="200"><p>https://www.instamojo.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 instamojo_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane " id="tab_6">
                                            <form role="form" id="paystack" action="https://www.bdsoft.org/admin/paymentsettings/paystack" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Paystack Secret Key<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="paystack_secretkey" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paystack_secretkey_error"></span>
                                                                    </div>  </div>


                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://paystack.com/" target="_blank">
                                                                    <h5>Payment Gateway for African Countries</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/paystack.png" width="200"><p>https://paystack.com</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 paystack_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane " id="tab_7">
                                            <form role="form" id="razorpay" action="https://www.bdsoft.org/admin/paymentsettings/razorpay" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Razorpay Key Id<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="razorpay_keyid" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger razorpay_keyid_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Razorpay Key Secret<small class="req"> *</small>
                                                                    </label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="razorpay_secretkey" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger razorpay_secretkey_error"></span>
                                                                    </div>  </div>



                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://razorpay.com/" target="_blank">
                                                                    <h5>Payment Gateway for India</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/razorpay.jpg" width="200"><p>https://razorpay.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 razorpay_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="tab_8">
                                            <form role="form" id="paytm" action="https://www.bdsoft.org/admin/paymentsettings/paytm" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">


                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Merchant Id                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="paytm_merchantid" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paytm_merchantid_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Merchant Key                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="paytm_merchantkey" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paytm_merchantkey_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Website                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="paytm_website" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paytm_website_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Industry Type                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="paytm_industrytype" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger paytm_industrytype_error"></span>
                                                                    </div>  </div>


                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://paytm.com/" target="_blank">
                                                                    <h5>Payment Gateway for India</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/paytm.jpg" width="200"><p>https://paytm.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 paytm_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="tab_9">
                                            <form role="form" id="midtrans" action="https://www.bdsoft.org/admin/paymentsettings/midtrans" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Server Key                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="midtrans_serverkey" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger midtrans_serverkey_error"></span>
                                                                    </div>  </div>




                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://midtrans.com/" target="_blank">
                                                                    <h5>Payment Gateway for Indonesia</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/midtrans.jpg" width="200"><p>https://midtrans.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 midtrans_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane " id="tab_10">
                                            <form role="form" id="pesapal" action="https://www.bdsoft.org/admin/paymentsettings/pesapal" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Consumer Key                                                    <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="pesapal_consumer_key" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger pesapal_consumer_key_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Consumer Secret                                                    <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="pesapal_consumer_secret" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger pesapal_consumer_secret_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.pesapal.com/" target="_blank">
                                                                    <h5>Payment Gateway for African Countries</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/pesapal.jpg" width="200"><p>https://www.pesapal.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 midtrans_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane " id="tab_11">
                                            <form role="form" id="flutterwave" action="https://www.bdsoft.org/admin/paymentsettings/flutterwave" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Public                                                     <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="public_key" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger public_key_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Secret key                                                    <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="secret_key" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger secret_key_error"></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://flutterwave.com/us/" target="_blank">
                                                                    <h5>Multinational Payment Gateway</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/flutterwave.png" width="200"><p>https://flutterwave.com/us</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 midtrans_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane " id="tab_12">
                                            <form role="form" id="ipayafrica" action="https://www.bdsoft.org/admin/paymentsettings/ipayafrica" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Vendor ID                                                    <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="ipayafrica_vendorid" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger ipayafrica_vendorid_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Hashkey                                                    <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="ipayafrica_hashkey" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger ipayafrica_hashkey_error"></span>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://ipayafrica.com/" target="_blank">
                                                                    <h5>Payment Gateway for African Countries</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/ipayafrica.png" width="200"><p>https://ipayafrica.com//</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 midtrans_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane " id="tab_13">
                                            <form role="form" id="jazzcash" action="https://www.bdsoft.org/admin/paymentsettings/jazzcash" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        pp_MerchantID                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="jazzcash_pp_MerchantID" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger jazzcash_pp_MerchantID_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        pp_Password                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="jazzcash_pp_Password" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger jazzcash_pp_Password_error"></span>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.jazzcash.com.pk/" target="_blank">
                                                                    <h5>Payment Gateway for Pakistan</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/jazzcash.jpg" width="200"><p>https://www.jazzcash.com.pk/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 jazzcash_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane " id="tab_14">
                                            <form role="form" id="billplz" action="https://www.bdsoft.org/admin/paymentsettings/billplz" class="form-horizontal" method="post">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Api Key                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="billplz_api_key" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger billplz_api_key_error"></span>
                                                                    </div>  </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-5 col-sm-12 col-xs-12" for="exampleInputEmail1">
                                                                        Customer Service Email
                                                                        <small class="req"> *</small></label>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input  name="billplz_customer_service_email" placeholder="" type="text" class="form-control col-md-7 col-xs-12"  value="" />
                                                                        <span class=" text text-danger billplz_customer_service_email_error"></span>
                                                                    </div>  </div>
                                                            </div>
                                                            <div class="col-md-5 text text-center disblock">
                                                                <a href="https://www.billplz.com/" target="_blank">
                                                                    <h5>Payment Gateway for Malaysia</h5>
                                                                    <img src="https://www.bdsoft.org//backend/images/billplz.jpg" width="200"><p>https://www.billplz.com/</p></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-primary col-md-offset-3 jazzcash_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box ">
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form" action="https://www.bdsoft.org/admin/paymentsettings/setting" id="payment_gateway" method="POST">
                                        <div class="box-body minheight199">
                                            <div class="form-group"> <!-- Radio group !-->

                                                <label class="control-label">Select Payment Gateway</label>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment_setting" value="paypal" >
                                                        Paypal                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="stripe" >
                                                        Stripe                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="payu" >
                                                        PayU                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="ccavenue" >
                                                        CCAvenue                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="instamojo" >
                                                        InstaMojo                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment_setting" value="paystack" >
                                                        Paystack                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="razorpay" >
                                                        Razorpay                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="paytm" >
                                                        Paytm                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="midtrans" >
                                                        Midtrans                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="pesapal" >
                                                        Pesapal                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="flutterwave" >
                                                        Flutter Wave                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="ipayafrica" >
                                                        iPay Africa                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="jazzcash" >
                                                        JazzCash                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="billplz" >
                                                        Billplz                                    </label>
                                                </div>

                                                <span class="text text-danger payment_setting_error"></span>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"  name="payment_setting" value="none" checked>
                                                        None                                    </label>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary pull-right payment_gateway_save" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
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

