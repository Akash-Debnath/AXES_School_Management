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
                        <h4 class="box-title">Front CMS Setting</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box">
                                    <div class="box-header ptbnull">
                                        <h3 class="box-title titlefix">Front CMS Setting</h3>
                                        <div class="box-tools pull-right">
                                        </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="">
                                        <form role="form" id="custom" action="https://www.bdsoft.org/admin/frontcms" class="form-horizontal form-horizontal2" method="post" enctype="multipart/form-data">
                                            <div class="box-body">

                                                <div class="row">
                                                    <div class="box-body">
                                                        <div class="col-md-6 col-sm-12 float-left">
                                                            <input type="hidden" name="id" value="1">
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Front CMS</label>
                                                                <div class="col-sm-7">
                                                                    <div class="material-switch">
                                                                        <input id="enable_frontcms" name="is_active_front_cms" type="checkbox" class="chk" value="1"  checked="checked">
                                                                        <label for="enable_frontcms" class="label-success"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Sidebar</label>
                                                                <div class="col-sm-7">
                                                                    <div class="material-switch">
                                                                        <input id="enable_sidebar" name="is_active_sidebar" type="checkbox" class="chk" value="1"  checked="checked">
                                                                        <label for="enable_sidebar" class="label-success"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Language RTL Text Mode</label>
                                                                <div class="col-sm-7">
                                                                    <div class="material-switch">
                                                                        <input id="enable_rtl" name="is_active_rtl" type="checkbox" class="chk" value="1"  checked="checked">
                                                                        <label for="enable_rtl" class="label-success"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Sidebar Option</label>
                                                                <div class="col-sm-7">
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" name="sidebar_options[]" value="news"  checked="checked"> News                                                    </label>
                                                                    <label class="checkbox-inline">
                                                                        <input type="checkbox" name="sidebar_options[]" value="complain"  checked="checked"> Complain                                                    </label>
                                                                </div>
                                                            </div>



                                                            <div class="form-group hide">
                                                                <label class="col-sm-5 control-label">Contact us Page Email --r </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="contact_us_email" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group hide">
                                                                <label class="col-sm-5 control-label">Complain Page Email --r </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="complain_form_email" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Logo (369px X 76px)</label>
                                                                <div class="col-sm-7">
                                                                    <input type="file" class="filestyle form-control-file" name="logo" id="exampleInputFile" data-height="100" data-default-file="https://www.bdsoft.org/">
                                                                    <span class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Favicon (32px X 32px)</label>
                                                                <div class="col-sm-7">
                                                                    <input type="file" class="filestyle form-control-file" name="fav_icon" id="exampleInputFile" data-height="50" data-default-file="https://www.bdsoft.org/">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Footer Text</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="footer_text" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Google Analytics </label>
                                                                <div class="col-sm-7">
                                                                    <textarea class="form-control" name="google_analytics" rows="5"></textarea>

                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>


                                                        </div><!--./col-md-7-->
                                                        <div class="col-md-5 col-md-offset-1 col-sm-12 float-right">

                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">WhatsApp URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="whatsapp_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Facebook URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="fb_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Twitter URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="twitter_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Youtube URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="youtube_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Google Plus </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="google_plus" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Linkedin URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="linkedin_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Instagram URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="instagram_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-5 control-label">Pinterest URL </label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="pinterest_url" value="">
                                                                    <span class="text text-danger"></span>
                                                                </div>

                                                            </div>
                                                        </div><!--./col-md-5-->

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr/>
                                                <div class="">
                                                    <div class="">
                                                        <label for="input-type">Current Theme</label>
                                                        <div id="input-type" class="mediarow">
                                                            <div class="row">
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="default" type="radio"  />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_default.jpg">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="yellow" type="radio"  />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_yellow.jpg">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="darkgray" type="radio"  />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_darkgray.jpg">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="bold_blue" type="radio"  />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_bold_blue.jpg">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="shadow_white" type="radio"  checked="checked" />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_shadow_white.jpg">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2 col-sm-4 col-xs-6 img_div_modal">
                                                                    <label class="radio-img">
                                                                        <input name="theme"  value="material_pink" type="radio"  />

                                                                        <img src="https://www.bdsoft.org/backend/images/front_theme/theme_material_pink.jpg">
                                                                    </label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.box-body -->

                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary pull-right"> Save</button>&nbsp;&nbsp;<span class="custom_loader"></span>

                                            </div>
                                        </form>
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

