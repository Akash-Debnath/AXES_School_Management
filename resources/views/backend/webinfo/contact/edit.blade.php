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
              <h4 class="box-title">Edit Contact Information</h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col">

     <form method="post" action="{{ route('contact.update',$editData->id) }}"enctype="multipart/form-data">
        @csrf
        @method('PUT')
                      <div class="row">
                        <div class="col-12">

                         <div class="row"> <!-- 1st Row -->

                              <div class="col-md-12">
                  
                                  <div class="form-group">
                                      <h5>Title<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                              <input type="title" name="title" class="form-control" required="" value ={{ $editData->title }}>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <h5>Email<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                            <input type="email" name="email" class="form-control" required="" value ={{ $editData->email }} >
                                    </div>
                                </div>
                  
                              </div> <!-- End Col md 4 -->
                           </div>
                          </div>
                        </div>


            <div class="row"> <!-- 1st Row -->

                <div class="col-md-12">
                    <div class="form-group">
                        <h5>Phone <span class="text-danger">*</span></h5>
                        <div class="controls">
                                <input type="text" name="phone" class="form-control" required="" value ={{ $editData->phone }}>
                        </div>
                    </div>


                </div> <!-- End Col md 4 -->

        </div> <!-- End 1stRow -->

         



           
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <h5>Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="address" id="address" class="form-control" required="" placeholder="Textarea text" aria-invalid="false" value ={{ $editData->address }} >

                                </textarea>
                            </div>
                    </div>

                </div>

            </div>






                        <div class="text-xs-right">     
                             <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                        </div>
                    </form>

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>





      </div>
  </div>





@endsection
