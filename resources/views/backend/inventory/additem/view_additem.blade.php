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
				  <h3 class="box-title">Item List</h3>
	<a href="{{ route('inventory.additem.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Item</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Item</th>
				<th>Category</th>
				<th>Unit</th>
				<th>Description</th>
				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $additem )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $additem->name }}</td>
				<td> {{ $additem->item_category }}</td>
				<td> {{ $additem->unit }}</td>
				<td> {{ $additem->description }}</td>
				<td>
<a href="{{route('edit_item',['id'=>$additem->id])}}" class="btn btn-info">Edit</a>
<a href="{{route('delete_item',['id'=>$additem->id])}}" class="btn btn-danger" id="delete">Delete</a>

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
