@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Create Route</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('store.routes') }}"enctype="multipart/form-data">
                                    @csrf
                            
                                        <div class="row">

                                            <div class="col-md-6">
                                
                                                <div class="form-group">
                                                    <h5>Route Title<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                 <input type="varchar" name="route_title" class="form-control" > 
                                                  </div>		 
                                                </div>
                                                </div> <!-- // end form group -->

                                                <div class="col-md-6">
                                        
                                                        <div class="form-group">
                                                            <h5>Fare<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                         <input type="varchar" name="fare" class="form-control" > 
                                                          </div>		 
                                                        </div>
                                                        </div> <!-- // end form group -->
                                           
                                        </div> <!-- end Row -->
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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
