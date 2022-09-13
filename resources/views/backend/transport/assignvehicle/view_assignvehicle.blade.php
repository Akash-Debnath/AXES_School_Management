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
				  <h3 class="box-title">Vehicle Route List</h3>
	<a href="{{ route('assignvehicle.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Assign Vehicle On Route</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Route Name</th>
				<th>Vehicle</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $assignvehicle )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $assignvehicle->route_name }}</td>
				<td> {{ $assignvehicle->vehicle_id }}</td>				 
				<td>
<a href="{{ route('assignvehicle.edit',$assignvehicle->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('assignvehicle.delete',$assignvehicle->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
