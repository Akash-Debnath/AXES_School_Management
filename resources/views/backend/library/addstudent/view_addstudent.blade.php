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
				  <h3 class="box-title">Library Member</h3>
	                 <a href="{{ route('addstudent.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Member</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>  
								<th width="30%">Name</th>
								<th width="30%">Id No</th> 
                                <th width="30%">Library No</th> 
								<th width="50%">Email</th> 
								<th width="50%">Type</th> 
								<th width="15%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $student )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $student->name }}</td>
								<td> {{ $student->id_no }}</td>
                                <td> {{ $student->library_no}}</td>
								<td> {{ $student->email }}</td>		
								<td> {{ $student->type }}</td>				 
								<td>
									{{-- <a href="{{ route('account.student.edit',$student->id) }}" class="btn btn-info">Edit</a> --}}
									<a href="{{ route('addstudent.delete',$student->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
