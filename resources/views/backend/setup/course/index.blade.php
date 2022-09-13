@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Course List</h3>
	<a href="{{ route('course.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Course</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				
				<th>Name</th> 
				<th>Link</th>
				<th>Code</th>
                <th>Description</th>
                <th>Image</th>
                
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $course )
			<tr>
				<td>{{ $key+1 }}</td>
			
				<td> {{ $course ->name }}</td>		
				<td> {{ $course ->link }}</td>
				<td> {{ $course ->code }}</td>
				<td> {{ $course ->description }}</td>
                <!--<td> {{ Str::limit($course ->description, 20) }}</td>-->
                <td> <img id="showImage1" src="{{url('public/upload/course/',$course ->image) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"></td>		 
				<td>
			    <a href="{{ route('course.edit',$course ->id) }}" class="btn btn-info">Edit</a>
				<a href="{{ route('course.delete',$course ->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
