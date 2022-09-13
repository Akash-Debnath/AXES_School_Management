@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Class Time</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.classtimetable') }}">
	 	@csrf
            <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Type <span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="type" required="" class="form-control">
                                <option value="" selected="" disabled="">Select Type</option>
                                <option value="Class" >Class</option>
                                <option value="Exam" >Exam</option>
                              </select>
                            </div>
                        
                        </div>
                    	 
						
					

				</div>
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Periods <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="period" class="form-control" > 
                                @error('period')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
        <div class="row">
          <div class="col-6">	
                        <div class="form-group">
                            <h5>Start Time<span class="text-danger">*</span></h5>
                            <div class="controls">
                              <input type="time" name="start" class="form-control" > 
                              @error('start')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                      
                        
                        </div>
                      
            
          

        </div>
                <div class="col-6">	
                        <div class="form-group">
                            <h5>End Time<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="time" name="end" class="form-control" > 
                                @error('end')
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
