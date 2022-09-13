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
				  <h3 class="box-title">Fees Master List : 2020-21</h3>
	<a href="{{ route('fees.master.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Fees Master</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th> 
								<th>Name</th> 
								<th>Group</th> 
								<th>Type</th>
								<th>Amount</th>
								<th>Due Date</th>
								<th width="25%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $fee )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $fee->name }}</td>	
								<td> {{ $fee->feegroup->name ??'' }}</td>
								<td> {{ $fee->feetype->name ?? '' }}</td>	
								<td> {{ $fee->amount }}</td>
								<td> {{ $fee->due_date }}</td>			 
								<td>
								<a href="{{ route('fees.master.edit',$fee->id) }}" class="btn btn-info">Edit</a>
								<a href="{{ route('fees.master.asign',$fee->id) }}" class="btn btn-primary">Asign</a>
								<a href="{{ route('fees.master.delete',$fee->id) }}" class="btn btn-danger" id="delete">Delete</a>

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