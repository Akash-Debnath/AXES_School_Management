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
				  <h3 class="box-title">Visitor List</h3>
	<a href="{{ route('visitorbook.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Visitor</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Purpose</th> 
				<th>Name</th>
				<th>Email</th>	
				<th>Phone</th> 
				<th>ID Card</th> 
				<th>Number of People</th> 
				<th>Date</th> 
				<th>In Time</th> 
				<th>Out Time</th>			
				<th>Note</th> 
				<th>Image</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $visitors_book )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $visitors_book->purpose}}</td>	
				<td> {{ $visitors_book->name }}</td>
				<td> {{ $visitors_book->email }}</td>		
				<td> {{ $visitors_book->Phone }}</td>	
				<td> {{ $visitors_book->id_card }}</td>	
				<td> {{ $visitors_book->no_of_people }}</td>	
				<td> {{ $visitors_book->date }}</td>	
				<td> {{ $visitors_book->in_time }}</td>	
				<td> {{ $visitors_book->out_time }}</td>	
				<td> {{ $visitors_book->note }}</td>	
				<td>
					<img src="{{ (!empty($visitors_book->image))? url('public/upload/visitor_images/'.$visitors_book->image):url('public/upload/no_image.jpg') }}" style="width: 60px; width: 60px;"> 
			   </td>		
			
				<td>
<a href="{{ route('visitorbook.edit',$visitors_book->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('visitorbook.delete',$visitors_book->id) }}" class="btn btn-danger" id="delete">Delete</a>

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