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
				  <h3 class="box-title">Phone Call Log List</h3>
	<a href="{{ route('phonecalllog.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Phone Call Log</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>   
				<th>Name</th>
				<th>Phone</th> 
				<th>Date</th> 
				<th>Next Follow Up Date</th> 
				<th>Description</th>
				<th>Call Duration </th>
				<th>Call Type </th>
				<th>Note </th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $phonecalllog )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $phonecalllog->name }}</td>	
				<td> {{ $phonecalllog->phone }}</td>
				<td> {{ $phonecalllog->date }}</td>	
				<td> {{ $phonecalllog->next_follow_up_date }}</td>	
				<td> {{ $phonecalllog->description }}</td>
				<td> {{ $phonecalllog->call_duration }}</td>
				<td> {{ $phonecalllog->call_type }}</td>
				<td> {{ $phonecalllog->note }}</td>				 
				<td>
<a href="{{ route('phonecalllog.edit',$phonecalllog->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('phonecalllog.delete',$phonecalllog->id) }}" class="btn btn-danger" id="delete">Delete</a>

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