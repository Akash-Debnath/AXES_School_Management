@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Students</p>
								<h3 class="text-white mb-0 font-weight-500">{{$totalstudent}}
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-warning-light rounded w-60 h-60">
							<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Teacher</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totalteacher}}
						</div>
					</div>
				</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-info-light rounded w-60 h-60">
							<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">User</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totaluser}}
						</div>
					</div>
				</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-danger-light rounded w-60 h-60">
							<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Book</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totalbook}}
						</div>
					</div>
				</div>
				</div>


				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Payment</p>
								<h3 class="text-white mb-0 font-weight-500">{{$totalpayment}}
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-warning-light rounded w-60 h-60">
							<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Total Receive</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totalreceive}}
						</div>
					</div>
				</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-info-light rounded w-60 h-60">
							<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Total Expense</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totalexpense}}
						</div>
					</div>
				</div>
				</div>
				<div class="col-xl-3 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-danger-light rounded w-60 h-60">
							<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16">Total Collection</p>
							<h3 class="text-white mb-0 font-weight-500">{{$totalcollection}}
						</div>
					</div>
				</div>
				</div>

				<div class="col-12">

					<div class="box">
					   <div class="box-header with-border">
						 <h3 class="box-title">Fees Collections List</h3>
							<a href="{{ route('account.expensevoucher.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Collection</a>			  
	   
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
									@foreach($lastcollections as $key => $collection )
								   <tr>
									   <td>{{ $key+1 }}</td>
									   <td> {{ $collection->invno }}</td>
									   <td> {{ $collection->date }}</td>
									   <td> {{ $collection->tamount }}</td>
									   <td> {{ $collection->note }}</td>				 
									   <td>
										   <a href="{{ route('fees.feescollectionvoucher.view',$collection->invno) }}" class="btn btn-info">View</a>
										   <a href="{{ route('fees.feescollectionvoucher.delete',$collection->invno) }}" class="btn btn-danger" id="delete">Delete</a> 
	   
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

				   <div class="col-12">

					<div class="box">
					   <div class="box-header with-border">
						 <h3 class="box-title">Payment List</h3>
							<a href="{{ route('account.paymentvoucher.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Payment</a>			  
	   
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
									@foreach($lastpayments as $key => $paymemt )
								   <tr>
									   <td>{{ $key+1 }}</td>
									   <td> {{ $paymemt->voucher_no }}</td>
									   <td> {{ $paymemt->date }}</td>
									   <td> {{ $paymemt->amount }}</td>
									   <td> {{ $paymemt->note }}</td>				 
									   <td>
										   <a href="{{ route('account.paymentvoucher.view',$paymemt->voucher_no) }}" class="btn btn-info">View</a>
										   <a href="{{ route('account.paymentvoucher.delete',$paymemt->voucher_no) }}" class="btn btn-danger" id="delete">Delete</a>
	   
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

				   <div class="col-12">

					<div class="box">
					   <div class="box-header with-border">
						 <h3 class="box-title">Receive List</h3>
							<a href="{{ route('account.receivevoucher.create') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Receive</a>			  
	   
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
									@foreach($lastreceives as $key => $receive )
								   <tr>
									   <td>{{ $key+1 }}</td>
									   <td> {{ $receive->voucher_no }}</td>
									   <td> {{ $receive->date }}</td>
									   <td> {{ $receive->amount }}</td>
									   <td> {{ $receive->note }}</td>				 
									   <td>
										   {{-- <a href="{{ route('account.ledger.edit',$ledger->id) }}" class="btn btn-info">Edit</a> --}}
										   <a href="{{ route('account.receivevoucher.delete',$receive->voucher_no) }}" class="btn btn-danger" id="delete">Delete</a>
										   <a href="{{ route('account.receivevoucher.view',$receive->voucher_no) }}" class="btn btn-info" id="view">View</a>
	   
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
									@foreach($lastexpenses as $key => $expense )
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
				
 
 
 
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								New Arrivals
								<small class="subtitle">More than 400+ new members</small>
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-white">products</span></th>
											<th style="min-width: 100px"><span class="text-fade">pruce</span></th>
											<th style="min-width: 100px"><span class="text-fade">deposit</span></th>
											<th style="min-width: 150px"><span class="text-fade">agent</span></th>
											<th style="min-width: 130px"><span class="text-fade">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary-light badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection