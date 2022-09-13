@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Class Rooms</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.classrooms') }}">
	 	@csrf
            <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Building Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="building_name" class="form-control" > 
                                @error('building_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>
                    	 
						
					

				</div>
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Room Number <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="room_no" class="form-control" > 
                                @error('room_no')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
        <div class="row">

                  <div class="col-12">	
                          <div class="form-group">
                              <h5>Description <span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="text" name="description" class="form-control" > 
                                  @error('description')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          
                          </div>
                        
              

          </div>
          <!-- /.col -->
          </div>
          <!-- /.row -->
              <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
            </div>
              </form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>





@endsection
