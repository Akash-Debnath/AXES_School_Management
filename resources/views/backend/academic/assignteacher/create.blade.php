@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Assign Teacher</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.assignclassteacher') }}">
	 	@csrf
            <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                          <h5>Department <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <select name="department_id" required="" class="form-control">
                              <option value="" selected="" disabled="">Select Department</option>
                              @foreach($departments as $department )
                              <option value="{{ $department->id }}">{{ $department->name }}</option>
                              @endforeach	 
                              </select>
                          </div>
                        
                        </div>
                    	 
						
					

				</div>
                <div class="col-6">	
                  <div class="form-group">
                    <h5>Programs <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="programs_id" required="" class="form-control">
                        <option value="" selected="" disabled="">Select Programs</option>
                        @foreach($programs as $program )
                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                        @endforeach	 
                        </select>
                    </div>
                  
                  </div>
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
        <div class="row">
          <div class="col-4">	
                  <div class="form-group">
                    <h5>Class <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="class_id" required="" class="form-control">
                        <option value="" selected="" disabled="">Select Class</option>
                        @foreach($classes as $class )
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach	 
                        </select>
                    </div>
                  
                  </div>
                 
      
    

          </div>
          <div class="col-4">	
                  <div class="form-group">
                    <h5>Subject <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="subject_id" required="" class="form-control">
                        <option value="" selected="" disabled="">Select Subject</option>
                        @foreach($subjects as $subject )
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach	 
                        </select>
                    </div>
                  
                  </div>
                



          </div>
                  <div class="col-4">	
                    <div class="form-group">
                      <h5>Teacher <span class="text-danger">*</span></h5>
                      <div class="controls">
                          <select name="teacher_id" required="" class="form-control">
                          <option value="" selected="" disabled="">Select Teacher</option>
                          @foreach($teachers as $teacher )
                          <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                          @endforeach	 
                          </select>
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
