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
				  <h3 class="box-title">Item Store List</h3>
	<a href="{{ route('inventory.itemstore.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Item Store</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Item Store Name</th>
				<th>Item Stock Code</th>
				<th>description</th>
				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $itemstore)
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $itemstore->item_store }}</td>
				<td> {{ $itemstore->code }}</td>
				<td> {{ $itemstore->description }}</td>
				<td>
<a href="{{ route('edit_itemstore',$itemstore->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('delete_itemstore',$itemstore->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
