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
				  <h3 class="box-title">Assign Teacher List</h3>
					<a href="{{ route('assignclassteacher.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Assign Teacher</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Teacher</th> 
				<th>Department</th> 
				<th>Program</th> 
                <th>Class</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $data )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $data->teacher->name ?? '' }}</td>
				<td> {{ $data->department->name ?? '' }}</td>
				<td> {{ $data->program->name ?? '' }}</td>
                <td> {{ $data->class->name ?? ''}}</td>	
				<td> {{ $data->subject->name ?? ''}}</td>				 				 
				<td>
                    <a href="{{ route('assignclassteacher.edit',$data->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('assignclassteacher.delete',$data->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
