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
					<h4 class="box-title">Attendance <strong>Search</strong></h4>
				  </div>

				  <div class="box-body">
				
		<form method="GET" action="#">
			
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
	  
 			</div> <!-- End Col md 4 --> 


 			<div class="col-md-4" style="padding-top: 25px;">

 <input type="submit" class="btn btn-rounded btn-dark mb-5" name="search" value="Search">
	  
 			</div> <!-- End Col md 4 --> 

 

				
			</div><!--  end row --> 

		</form>
 
					 
				  </div>
				</div>
	</div> <!-- // end first col 12 -->


			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Attendance List</h3>
	<a href="{{ route('student.attendance.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Attendance  </a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					
	 <table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Date</th>
				<th>Year</th>
				<th>Batch</th>
				<th>Department</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($attendance as $key => $value )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value->date }}</td>	
				<td> {{ $value['student_year']['name'] }}  </td>	
				<td> {{ $value->batch_id }}</td>	
				<td>  {{ $value['department']['name'] ?? ''}}</td>			 
				<td>
					<a title="View" href="" class="btn btn-info"> <i class="fa fa-eye"></i> </a>
                    <a title="delete" href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>

				</td>
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>

		



					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
