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
				  <h3 class="box-title">Class Time Table List</h3>
					<a href="{{ route('classtimetable.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Class Time</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Type</th> 
				<th>Periods</th> 
				<th>Start</th> 
                <th>End</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $data )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $data->type }}</td>
				<td> {{ $data->period }}</td>
				<td> {{ $data->end }}</td>
                <td> {{ $data->start }}</td>				 				 
				<td>
                    <a href="{{ route('classtimetable.edit',$data->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('classtimetable.delete',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
