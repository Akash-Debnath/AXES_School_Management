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
				  <h3 class="box-title">Bank Account List</h3>
	                 <a href="{{ route('account.bankaccount.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Bank Account</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th width="5%">SL</th>  
                                <th>Name</th> 
                                <th>Bank Name</th>
                                <th>Acc.No</th>
                                <th width="25%">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $bankaccount )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> {{ $bankaccount->acc_title }}</td>
                                <td> {{ $bankaccount->bank->name }}</td>
                                <td> {{ $bankaccount->acc_no }}</td>				 				 
                                <td>
                                    <a href="{{ route('account.bankaccount.edit',$bankaccount->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('account.bankaccount.delete',$bankaccount->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
