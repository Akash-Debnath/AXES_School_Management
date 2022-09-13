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
				  <h3 class="box-title">Postal Receive List</h3>
	<a href="{{ route('postalreceive.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Postal Receive</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>   
				<th>From Title</th>
				<th>Reference No</th> 
				<th>Address</th> 
				<th>Note</th> 
				<th>To Title</th> 
				<th>Date</th> 
				<th>Image</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $dispatch_receives )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $dispatch_receives->from_title }}</td> 
				<td> {{ $dispatch_receives->reference_no }}</td>			
				<td> {{ $dispatch_receives->address }}</td> 
				<td> {{ $dispatch_receives->note }}</td>	
				<td> {{ $dispatch_receives->to_title }}</td>	
				<td> {{ $dispatch_receives->date }}</td>	
				{{-- <td> {{ $dispatch_receives->image }}</td>  --}}
				<td> <img id="showImage1" src="{{url('public/upload/dispatchreceive_images/',$dispatch_receives->image) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"></td>>	 
				<td>
<a href="{{ route('postalreceive.edit',$dispatch_receives->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('postalreceive.delete',$dispatch_receives->id) }}" class="btn btn-danger" id="delete">Delete</a>

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