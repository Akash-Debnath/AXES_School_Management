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
                                <div class="box box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-envelope"></i> File Types</h3>
                                    </div>

                                    <form id="form1" action="https://www.bdsoft.org/emailconfig/index"   name="form_filetype" class="form_filetype" method="post" accept-charset="utf-8">

                                        <div class="box-body">

                                            <input type='hidden' name='ci_csrf_token' value=''/>                             <h4>Setting for Files</h4>
                                            <hr/>

                                            <div class="form-group">
                                                <label> Allowed Extension <small class="req"> *</small></label>
                                                <textarea class="form-control" rows="6"  name="file_extension" placeholder="" cols="50">pdf, zip, jpg, jpeg, png, txt, 7z, gif, csv, docx, mp3, mp4, accdb, odt, ods, ppt, pptx, xlsx, wmv, jfif, apk, ppt, bmp, jpe, mdb, rar, xls, svg</textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label> Allowed MIME type <small class="req"> *</small></label>
                                                <textarea class="form-control" rows="6"  name="file_mime" placeholder="" cols="50">application/pdf, image/zip, image/jpg, image/png, image/jpeg, text/plain, application/x-zip-compressed, application/zip, image/gif, text/csv, application/vnd.openxmlformats-officedocument.wordprocessingml.document, audio/mpeg, application/msaccess, application/vnd.oasis.opendocument.text, application/vnd.oasis.opendocument.spreadsheet, application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.presentation, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, video/x-ms-wmv, video/mp4, image/jpeg, application/vnd.android.package-archive, application/x-msdownload, application/vnd.ms-powerpoint, image/bmp, image/jpeg, application/msaccess, application/vnd.ms-excel, image/svg+xml</textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label> Upload Size (in Bytes) <small class="req"> *</small></label>
                                                <input class="form-control"  name="file_size" placeholder="" value="100048576">
                                                <span class="text-danger"></span>
                                            </div>
                                            <br><br><br>
                                            <h4>Setting for Image</h4>
                                            <hr/>
                                            <div class="form-group">
                                                <label> Allowed Extension <small class="req"> *</small></label>
                                                <textarea class="form-control" rows="6"  name="image_extension" placeholder="" cols="50">jfif, png, jpe, jpeg, jpg, bmp, gif, svg</textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label> Allowed MIME type <small class="req"> *</small></label>
                                                <textarea class="form-control" rows="6"  name="image_mime" placeholder="" cols="50">image/jpeg, image/png, image/jpeg, image/jpeg, image/bmp, image/gif, image/x-ms-bmp, image/svg+xml</textarea>
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label> Upload Size (in Bytes) <small class="req"> *</small></label>
                                                <input class="form-control"  name="image_size" placeholder="" value="10048576">
                                                <span class="text-danger"></span>
                                            </div>

                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary"> Save</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>

@endsection

