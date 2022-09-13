@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

            <section class="content">

                    <!-- Basic Forms -->
                    <div class="box">
                        <div class="box-header with-border">
                        <h4 class="box-title">Edit Route</h4>
                        
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('update.routes',$editData->id) }}"enctype="multipart/form-data">
                                    @csrf
								@method('PUT')

                                        <div class="row">

                                            <div class="col-md-6">
                                
                                                <div class="form-group">
                                                    <h5>Route Title<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                 <input type="varchar" name="route_title" class="form-control" value="{{ $editData->route_title }}"> 
                                                  </div>		 
                                                </div>
                                                </div> <!-- // end form group -->

                                                <div class="col-md-6">
                                        
                                                        <div class="form-group">
                                                            <h5>Fare<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                         <input type="varchar" name="fare" class="form-control" value="{{ $editData->fare }}"> 
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
