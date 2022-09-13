@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Add Room Type</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.roomtype') }}" enctype="multipart/form-data">
                                    @csrf                              
                        <div class="row">

                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label>Room Type<small class="req"> *</small></label>
                                    <input id="name" name="room_type" placeholder="" type="text" class="form-control" value="">
                                    <span class="text-danger"></span>
                                </div>
                              </select>
                            </div>
                        </div> <!-- // end form group -->



                    <div class="row">

                        <div class="col-md-12">
                                
                            <div class="form-group">
                                 <label>Description<small class="req"> *</small></label>
                                 <input id="description" name="description" placeholder="" type="text" class="form-control" value="">
                                 <span class="text-danger"></span>
                            </div>
                          </select>
                         </div>
                    </div> <!-- // end form group -->


                                            </div><!-- End col-md-5 -->
                                        </div> <!-- end Row -->
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Save">
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
