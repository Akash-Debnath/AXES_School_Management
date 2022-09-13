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
				  <h3 class="box-title">Expense List</h3>
	                 <a href="{{ route('account.expensevoucher.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Expense</a>			  

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
							 @foreach($allData as $key => $expense )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $expense->voucher_no }}</td>
								<td> {{ $expense->date }}</td>
                                <td> {{ $expense->amount }}</td>
								<td> {{ $expense->note }}</td>				 
								<td>
									{{-- <a href="{{ route('account.ledger.edit',$ledger->id) }}" class="btn btn-info">Edit</a> --}}
									<a href="{{ route('account.expensevoucher.delete',$expense->voucher_no) }}" class="btn btn-danger" id="delete">Delete</a>

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
