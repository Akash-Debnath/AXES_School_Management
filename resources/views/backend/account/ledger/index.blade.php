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
				  <h3 class="box-title">Ledger List</h3>
	                 <a href="{{ route('account.ledger.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Ledger</a>			  

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
                                <th width="30%">Sub-Group Name</th> 
								<th width="50%">Description</th> 
								<th width="15%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $ledger )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $ledger->name }}</td>
								<td> {{ $ledger->group->name ?? ''}}</td>
                                <td> {{ $ledger->subgroup->name ?? '' }}</td>
								<td> {{ $ledger->description }}</td>				 
								<td>
									<a href="{{ route('account.ledger.edit',$ledger->id) }}" class="btn btn-info">Edit</a>
									<a href="{{ route('account.ledger.delete',$ledger->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
