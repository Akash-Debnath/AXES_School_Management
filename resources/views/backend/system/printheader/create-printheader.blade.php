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
                            <div class="col-md-12">

                                <div class="nav-tabs-custom box  theme-shadow">

                                    <ul class="nav nav-tabs float-right">
                                        <li ><a href="#tab_4" data-toggle="tab">Payslip</a></li>
                                        <li class="active"><a href="#tab_3" data-toggle="tab">Fees Receipt</a></li>

                                        <li class="float-left header"> Print Header Footer</li>
                                    </ul>
                                    <div class="tab-content box">

                                        <input type='hidden' name='ci_csrf_token' value=''/>                        <!-- /.tab-pane -->
                                        <div class="tab-pane active" id="tab_3">
                                            <form  enctype="multipart/form-data" action="{{route('new_printheader')}}" class="" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Header Image (2230px X 300px)</label>
                                                            <img src="https://www.bdsoft.org/./uploads/print_headerfooter/student_receipt/header_image.png" alt="">
{{--                                                            <input id="documents" data-default-file="https://www.bdsoft.org/./uploads/print_headerfooter/student_receipt/header_image.png" placeholder="" type="file" class="filestyle form-control" data-height="180"  name="header_image">--}}
                                                            <input  placeholder="" type="file" class="form-control-file"  name="header_image">
                                                            <span class="text-danger"></span>
                                                        </div>
                                                        <div class="form-group"><label>Footer Content<small class="req"> *</small></label>
                                                            <textarea id="editor" name="message1" class="form-control" style="height: 250px">
                                                This receipt is computer generated hence no signature is required.                                            </textarea>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-12">
                                                        <div class="pull-right">

                                                            <input type="submit" class="btn btn-primary " value="save">

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="tab_4">
                                            <form role="form" action="https://www.bdsoft.org/admin/print_headerfooter/edit" class="" enctype="multipart/form-data" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Header Image (2230px X 300px)</label>
                                                            <input id="documents" data-default-file="https://www.bdsoft.org/./uploads/print_headerfooter/staff_payslip/header_image.png" placeholder="" type="file" class="filestyle form-control" data-height="180"  name="header_image">
                                                            <input  placeholder="" type="hidden" class="form-control" value="staff_payslip" name="type">
                                                            <span class="text-danger"></span>
                                                        </div>
                                                        <div class="form-group"><label>Footer Content<small class="req"> *</small></label>
                                                            <textarea id="staff_textarea" name="message" class="form-control" style="height: 250px">
                                                This payslip is computer generated hence no signature is required.                                            </textarea>
                                                            <span class="text-danger"></span>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="pull-right">
                                                            <button type="submit" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Save">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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

