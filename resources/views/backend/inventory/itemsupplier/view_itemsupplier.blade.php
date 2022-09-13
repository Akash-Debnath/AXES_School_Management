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
				  <h3 class="box-title">Item Supplier List</h3>
	<a href="{{ route('inventory.itemsupplier.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Item Supplier</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Item Supplier</th>
				<th>phone</th>
				<th>email</th>
				<th>address</th>
				<th>contact_person_name</th>
				<th>contact_person_phone</th>
				<th>contact_person_email</th>
				<th>description</th>
				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $itemsupplier )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $itemsupplier->item_supplier }}</td>
				<td> {{ $itemsupplier->phone }}</td>
				<td> {{ $itemsupplier->email }}</td>
				<td> {{ $itemsupplier->address }}</td>
				<td> {{ $itemsupplier->contact_person_name }}</td>
				<td> {{ $itemsupplier->contact_person_phone }}</td>
				<td> {{ $itemsupplier->contact_person_email }}</td>
				<td> {{ $itemsupplier->description }}</td>
				<td>
<a href="{{ route('edit_supplier',$itemsupplier->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('delete_supplier',$itemsupplier->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
