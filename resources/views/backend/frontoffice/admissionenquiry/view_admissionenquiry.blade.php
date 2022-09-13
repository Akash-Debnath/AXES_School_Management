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
				  <h3 class="box-title">Admission Enquiry</h3>
	<a href="{{ route('admissionenquiry.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Select Criteria</a>			  

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
				<th>Email</th> 
				<th>Address</th> 
				<th>Description</th> 
				<th>Note</th> 
				<th>Date</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $admissionenquirie )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $admissionenquirie->name }}</td>	
				<td> {{ $admissionenquirie->phone }}</td>	
				<td> {{ $admissionenquirie->email }}</td>	
				<td> {{ $admissionenquirie->address }}</td>	
				<td> {{ $admissionenquirie->description }}</td>	
				<td> {{ $admissionenquirie->note }}</td>	
				<td> {{ $admissionenquirie->date }}</td>		 
				
				<td>
<a href="{{ route('admissionenquiry.edit',$admissionenquirie->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('admissionenquiry.delete',$admissionenquirie->id) }}" class="btn btn-danger" id="delete">Delete</a>

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