


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
				  <h3 class="box-title">Issue Item</h3>
	<a href="{{ route('inventory.issueitem.add_issueitem') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Item Issue </a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>issue_type</th>
				<th>issue_to</th>
				<th>issue_by</th>
				<th>issue_date</th>
				<th>return_date</th>
				<th>item_category_id</th>
				<th>item_id</th>
				<th>quantity</th>
				<th>note</th>
				<th width="25%">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $issueitem )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $issueitem->issue_type }}</td>
				<td> {{ $issueitem->issue_to }}</td>
				<td> {{ $issueitem->issue_by }}</td>
				<td> {{ $issueitem->issue_date }}</td>
				<td> {{ $issueitem->return_date }}</td>
				<td> {{ $issueitem->item_category_id }}</td>
				<td> {{ $issueitem->item_id }}</td>
				<td> {{ $issueitem->quantity }}</td>
				<td> {{ $issueitem->note }}</td>
				<td>
<a href="{{ route('editissueitem',$issueitem->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('deleteissueitem',$issueitem->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
