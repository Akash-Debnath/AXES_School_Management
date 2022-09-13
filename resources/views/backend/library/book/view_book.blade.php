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
				  <h3 class="box-title">Book List</h3>
	<a href="{{ route('library.book.add_book') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Book
	</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Book Title</th> 
				<th>Book Number</th> 
				<th>ISBN Number</th> 
				<th>Publisher</th> 
				<th>Author </th> 
				<th>Subject</th> 
				<th>Rack Number</th> 
				<th>Qty</th> 
				<th>Available</th>
				<th>Book Price</th>
				<th>Post Date</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $book )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $book->book_title }}</td>
				<td> {{ $book->isbn_no }}</td>	
				<td> {{ $book->publish }}</td>	
				<td> {{ $book->author }}</td>	
				<td> {{ $book->subject }}</td>	
				<td> {{ $book->rack_no }}</td>	
				<td> {{ $book->qty }}</td>	
				<td> {{ $book->price }}</td>	
				<td> {{ $book->postdate }}</td>	
				<td> {{ $book->description }}</td>	

				<td>
<a href="{{ route('library.book.edit',$book->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('library.book.delete',$book->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
