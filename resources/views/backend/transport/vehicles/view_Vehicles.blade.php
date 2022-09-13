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
	<a href="{{ route('vehicles.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Assign Vehicle On Route</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Vehicle Number</th>
				<th>Vehicle Model</th>
				<th>Manufacture Year</th>
				<th>Driver Name</th>
				<th>Driver License</th>
				<th>Driver Contact</th>
				<th>Note</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $vehicle )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $vehicle->vehicle_no }}</td>
				<td> {{ $vehicle->vehicle_model }}</td>
				<td> {{ $vehicle->manufacture_year }}</td>
				<td> {{ $vehicle->driver_name }}</td>
				<td> {{ $vehicle->driver_licence }}</td>				 
				<td> {{ $vehicle->driver_contact }}</td>
				<td> {{ $vehicle->note }}</td>
				<td>
<a href="{{ route('vehicles.edit',$vehicle->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('vehicles.delete',$vehicle->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
