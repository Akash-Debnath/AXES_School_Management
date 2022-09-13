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
				  <h3 class="box-title">Journal Entry List</h3>
	                 <a href="{{ route('account.journal.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Journal</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th width="30%">Invoice</th>
								<th width="30%">Date</th> 
                                <th width="30%">Amount</th> 
								<th width="50%">Note</th> 
								<th width="15%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							 @foreach($allData as $key => $journal )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $journal->voucher_no }}</td>
								<td> {{ $journal->date }}</td>
                                <td> {{ $journal->amount }}</td>
								<td> {{ $journal->note }}</td>				 
								<td>
									<a href="{{ route('account.journal.view',$journal->voucher_no) }}" class="btn btn-info">View</a>
									<a href="{{ route('account.journal.delete',$journal->voucher_no) }}" class="btn btn-danger" id="delete">Delete</a>

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
