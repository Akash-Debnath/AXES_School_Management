@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
		
<div class="col-12">
<div class="box bb-3 border-warning">
				  <div class="box-header">
					<h4 class="box-title"><strong>Add</strong>Member </h4>
					<a href="{{ route('addstudent.view') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Library Member List</a>
				  </div>

				  <div class="box-body">
				
		<form method="GET" action="{{ route('addstudentinfo.add') }}">
			<div class="row">



				<div class="col-md-4">

					<div class="form-group">
						<h5>Member Type <span class="text-danger"> </span></h5>
						<div class="controls">
							<select name="type" id="type" class="form-control">
								<option value="" selected="">Select Type</option>
								<option value="Student" >Student</option>
								<option value="Teacher" >Teacher</option>
							

								
							</select>
						</div>		 
					</div>
	  
 				</div> <!-- End Col md 4 --> 
			</div>
		
			<div id="student" style="display: none">
				<div class="row">



					<div class="col-md-4">

						<div class="form-group">
							<h5>Year <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="year_id"  class="form-control">
									<option value="" selected="">Select Year</option>
									@foreach($years as $year)
									<option value="{{ $year->id }}" {{ (@$year_id == $year->id)? "selected":"" }} >{{ $year->name }}</option>
									@endforeach
									
								</select>
							</div>		 
						</div>
		
					</div> <!-- End Col md 4 --> 



				
					<div class="col-md-4">

						<div class="form-group">
							<h5>Department <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="dept_id"   class="form-control">
								<option value="" selected="" >Select Department</option>
								@foreach($departments as $department)
								<option value="{{ $department->id }}" {{ (@$dept_id == $department->id)? "selected":"" }}>{{ $department->name }}</option>
								@endforeach
								
								</select>
							</div>		 
						</div>
					
					</div> <!-- End Col md 4 --> 
					<div class="col-md-4">

						<div class="form-group">
							<h5>Batch <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="batch_id" class="form-control">
								<option value="" selected="" >Select Batch</option>
								<option value="1" >1 Th</option>
								<option value="2" >2 Th</option>
								</select>
							</div>		 
						</div>
					
					</div> <!-- End Col md 4 --> 
				</div>
				
				<div class="row">



					<div class="col-md-4">

						<div class="form-group">
							<h5>Shifts <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="shift_id"  class="form-control">
									<option value="" selected="">Select Shift</option>
									@foreach($shifts as $shift)
									<option value="{{ $shift->id }}" {{ (@$shift_id == $shift->id)? "selected":"" }} >{{ $shift->name }}</option>
									@endforeach
									
								</select>
							</div>		 
						</div>
		
					</div> <!-- End Col md 4 --> 



				
						{{-- <div class="col-md-4">

							<div class="form-group">
								<h5>Class <span class="text-danger"> </span></h5>
								<div class="controls">
									<select name="dept_id"  required="" class="form-control">
									<option value="" selected="" >Select Departent</option>
									@foreach($departments as $department)
									<option value="{{ $department->id }}" {{ (@$dept_id == $department->id)? "selected":"" }}>{{ $department->name }}</option>
									@endforeach
									
									</select>
								</div>		 
							</div>
						
						</div> <!-- End Col md 4 -->  --}}
				</div><!--  end row --> 
			</div>
			<div id="teacher" style="display: none">
				<div class="row">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4" style="padding-top: 25px;">

					<input type="submit" class="btn btn-rounded btn-dark mb-5" name="search" value="Search">
		
				</div> <!-- End Col md 4 --> 

 

				
			</div><!--  end row --> 

		</form>
 
					 
				  </div>
				</div>
	</div> <!-- // end first col 12 -->
   <script>
	   	const el = document.getElementById('type');

		const student = document.getElementById('student');
		const teacher = document.getElementById('teacher');

		el.addEventListener('change', function handleChange(event) {
		if (event.target.value === 'Student') {
			student.style.display = 'block';
			teacher.style.display = 'none';
		} else if(event.target.value === 'Teacher') {
			teacher.style.display = 'block';
			student.style.display = 'none';
		}else{
			teacher.style.display = 'none';
			student.style.display = 'none';
		}
		});
   </script>

			 

		

	@if($search==1)	
	<div class="col-12">
			@csrf 

		

		<div class="box">
		   <div class="box-header with-border">
			 <h3 class="box-title">Student List</h3>
			
			 

		   </div>
		   <!-- /.box-header -->
		   <div class="box-body">
			   <div class="table-responsive">				


	  				<table  id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th>Name</th>
								<th>ID No</th>
								<th>Action</th>
								
							</tr>
						</thead>

						@if($type=='Student')	
							<tbody>
								<input type="hidden" name="year_id" value="{{$year_id}}">
								<input type="hidden" name="batch_id" value="{{$batch_id}}">
								<input type="hidden" name="shift_id" value="{{$shift_id}}">
								<input type="hidden" name="dept_id" value="{{$dept_id}}">
								<input type="hidden" name="type" value="{{$type}}">
								@foreach($allData as $key => $value )
								<tr>
									<input type="hidden" name="roll[]" value="{{$value['student']['id_no']}}">
									<input type="hidden" name="name[]" value="{{$value['student']['name']}}">
									<input type="hidden" name="sid[]" value="{{$value['student']['id']}}">
									<td>{{ $key+1 }}</td>
									<td> {{ $value['student']['name'] }}</td>
									<td> {{ $value['student']['id_no'] }}</td>	
									<td>
										<a href="{{ route('store.addstudent',$value['student']['id']) }}" class="btn btn-danger" id="added">Add</a>
									</td>	
									
									
								</tr>
								@endforeach
												
							</tbody>
						@endif

						@if($type=='Teacher')	
							<tbody>
								<input type="hidden" name="type" value="{{$type}}">
								@foreach($allData as $key => $value )
								<tr>
									<input type="hidden" name="roll[]" value="{{$value->id_no}}">
									<input type="hidden" name="name[]" value="{{$value->name}}">
									<input type="hidden" name="sid[]" value="{{$value->id}}">
									<td>{{ $key+1 }}</td>
									<td> {{ $value->name }}</td>
									<td> {{ $value->id_no }}</td>	
									<td>
										<a href="{{ route('store.addstudent',['id'=>$value->id,'type'=>$type]) }}" class="btn btn-danger" id="added">Add</a>
									</td>	
									
									
								</tr>
								@endforeach
												
							</tbody>
						@endif
					</table>


		



					</div>
						   
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  
			<!-- /.col -->
		  </div>
		  @endif
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
