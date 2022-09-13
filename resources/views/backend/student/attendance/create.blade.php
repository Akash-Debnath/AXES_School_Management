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
					<h4 class="box-title">Student <strong>Attendance</strong></h4>
				  </div>

				  <div class="box-body">
				
		<form method="GET" action="{{ route('student.attendance.class.wise') }}">
			<div class="row">



				<div class="col-md-4">

					<div class="form-group">
						<h5>Year <span class="text-danger"> </span></h5>
						<div class="controls">
							<select name="year_id" required="" class="form-control">
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
						<select name="dept_id"  required="" class="form-control">
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
						<select name="batch_id"  required="" class="form-control">
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
							<select name="shift_id" required="" class="form-control">
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


 			<div class="col-md-4" style="padding-top: 25px;">

            <input type="submit" class="btn btn-rounded btn-dark mb-5" name="search" value="Search">
	  
 			</div> <!-- End Col md 4 --> 

 

				
			</div><!--  end row --> 

		</form>
 
					 
				  </div>
				</div>
	</div> <!-- // end first col 12 -->


			 

		

	@if($search==1)	
	<div class="col-12">
		<form method="post" action="{{ route('student.attendance.store') }}" enctype="multipart/form-data">
			@csrf 

		<input type="hidden" name="year_id" value="{{$year_id}}">
		<input type="hidden" name="batch_id" value="{{$batch_id}}">
		<input type="hidden" name="shift_id" value="{{$shift_id}}">
		<input type="hidden" name="dept_id" value="{{$dept_id}}">

		<div class="box">
		   <div class="box-header with-border">
			 <h3 class="box-title">Student List</h3>
			 <hr>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="controls">
						<input type="text" class="form-control" style="float: right;" value="{{$attend_track}}" name="attend_id" readonly>
						</div>
					 </div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="controls">
						 <input type="date" style="float: right;" class="form-control" name="date" >
						</div>
					 </div>

				</div>

			</div>
			 

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
				<th>Status</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $value )
			<tr>
				<input type="hidden" name="roll[]" value="{{$value['student']['id_no']}}">
				<input type="hidden" name="name[]" value="{{$value['student']['name']}}">
				<input type="hidden" name="sid[]" value="{{$value['student']['id']}}">
				<td>{{ $key+1 }}</td>
				<td> {{ $value['student']['name'] }}</td>
				<td> {{ $value['student']['id_no'] }}</td>	
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status[]" id="flexRadioDefault1" value="1" checked>
						<label class="form-check-label" for="flexRadioDefault1">
						 Present
						</label>
						<input class="form-check-input" type="radio" name="status[]" id="flexRadioDefault2" value="0">
						<label class="form-check-label" for="flexRadioDefault2">
						 Absent
						</label>
					  </div>
					  
				</td>	
				
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>


		



					</div>
					<div class="col-md-4" style="padding-top: 25px;">

						<input type="submit" class="btn btn-rounded btn-dark mb-5" name="submit" value="Submit">
				  
						 </div> <!-- End Col md 4 --> 
						   
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			  
			<!-- /.col -->
			</form>
		  </div>
		  @endif
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
