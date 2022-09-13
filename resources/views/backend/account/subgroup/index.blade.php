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
				  <h3 class="box-title">Sub-Group List</h3>
	                 <a href="{{ route('account.subgroup.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Sub-Group</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th width="30%">Name</th>
								<th width="30%">Group Name</th> 
								<th width="50%">Description</th> 
								<th width="15%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $group )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $group->name }}</td>
								<td> {{ $group->group->name ?? ''}}</td>
								<td> {{ $group->description }}</td>				 
								<td>
									<a href="{{ route('account.subgroup.edit',$group->id) }}" class="btn btn-info">Edit</a>
									<a href="{{ route('account.subgroup.delete',$group->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
