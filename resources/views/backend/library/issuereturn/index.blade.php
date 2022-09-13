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
				  <h3 class="box-title">Book Issue List</h3>
	                 <a href="{{ route('library.issuereturn.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Issue</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th width="30%">Issue No</th>
								<th width="30%">Date</th> 
                                <th width="30%">Return Date</th> 
								<th width="50%">Note</th> 
								<th width="15%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							 @foreach($allData as $key => $issuebook )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $issuebook->invno }}</td>
								<td> {{ $issuebook->date }}</td>
                                <td> {{ $issuebook->rdate }}</td>
								<td> {{ $issuebook->note }}</td>				 
								<td>
									<a href="{{ route('library.issuereturn.view',$issuebook->invno) }}" class="btn btn-info">View</a>
									<a href="{{ route('library.issuereturn.delete',$issuebook->invno) }}" class="btn btn-danger" id="delete">Delete</a>

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
