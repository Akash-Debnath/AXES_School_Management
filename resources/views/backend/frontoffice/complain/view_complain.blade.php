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
				  <h3 class="box-title">Complain List</h3>
	<a href="{{ route('complain.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Complain</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>   
				<th>Complain Type</th>
				<th>Complain</th>
				<th>Source</th>
				<th>Complain_by</th> 
				<th>contact</th> 
				<th>Date</th> 
				<th>Description</th>
				<th>Action Taken</th>
				<th>Assigned</th>
				<th>Email</th>
				<th>Note</th>
				<th>Image</th> 
			
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $complain )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $complain->complain_type }}</td> 
				<td> {{ $complain->complain }}</td>
				<td> {{ $complain->source}}</td>	
				<td> {{ $complain->complain_by }}</td>
				<td> {{ $complain->contact }}</td>
				<td> {{ $complain->date }}</td>
				<td> {{ $complain->description }}</td> 
				<td> {{ $complain->action_taken }}</td>
				<td> {{ $complain->assigned }}</td>
				<td> {{ $complain->email}}</td>  
				<td> {{ $complain->note }}</td>	
				<td> {{ $complain->image }}</td>

				<td>
<a href="{{ route('complain.edit',$complain->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('complain.delete',$complain->id) }}" class="btn btn-danger" id="delete">Delete</a>

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