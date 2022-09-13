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
				  <h3 class="box-title">Hostel  List</h3>
	<a href="{{ route('hostel.hosteldetail.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Hostel</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Hostel Name</th> 
				<th>Type</th> 
				<th>Address</th> 
				<th>Intake</th> 
				<th>Description</th>
				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $hostel)
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $hostel->hostel_name }}</td>
				<td> {{ $hostel->type }}</td>
				<td> {{ $hostel->address }}</td>
				<td> {{ $hostel->intake }}</td>
				<td> {{ $hostel->description }}</td>
				<td>
<a href="{{ route('hostel.hosteldetail.edit',$hostel->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('hostel.hosteldetail.delete',$hostel->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
