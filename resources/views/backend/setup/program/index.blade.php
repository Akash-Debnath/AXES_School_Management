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
				  <h3 class="box-title">Program List</h3>
					<a href="{{ route('program.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Program</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th>Faculty</th>
								<th>Department</th>
								<th>Name</th> 
								<th>Link</th>
								<th>Code</th>
								<th>Description</th>
								<th>Image</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $program )
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $program->faculty->name ?? '' }}</td>
								<td>{{ $program->department->name ?? '' }}</td>
								<td> {{ $program->name }}</td>		
								<td> {{ $program->link }}</td>
								<td> {{ $program->code }}</td>
								<td> {{ $program->description }}</td>
								<td> <img id="showImage1" src="{{url('public/upload/program/',$program->image) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"></td>		 		 
								<td>
								 <a href="{{ route('program.edit',$program->id) }}" class="btn btn-info">Edit</a> 
								<a href="{{ route('program.delete',$program->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
