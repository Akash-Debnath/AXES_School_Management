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
				  <h3 class="box-title">Item Stock List</h3>
	<a href="{{ route('inventory.additemstock.add_itemstock') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Item Stock</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>category_id</th>
				<th>item_id</th>
				<th>supplier_id</th>
				<th>store_id</th>
				<th>symbol</th>
				<th>purchase_price</th>
				<th>date</th>
				<th>attachment</th>
				<th>description</th>

				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $additemstock )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $additemstock->category_id }}</td>
				<td> {{ $additemstock->item_id }}</td>
				<td> {{ $additemstock->supplier_id }}</td>
				<td> {{ $additemstock->store_id }}</td>
				<td> {{ $additemstock->symbol }}</td>
				<td> {{ $additemstock->purchase_price }}</td>
				<td> {{ $additemstock->date }}</td>
				<td> {{ $additemstock->attachment }}</td>
				<td> {{ $additemstock->description }}</td>
				<td>
<a href="{{ route('edit_item_stock',$additemstock->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('delete_item_stock',$additemstock->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
