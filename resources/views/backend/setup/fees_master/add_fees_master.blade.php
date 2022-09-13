@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Fees Master</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					<form method="post" action="{{ route('store.fees.master') }}" enctype="multipart/form-data">
						@csrf 
					  <div class="row">
						<div class="col-12">	
 

 	
							<div class="row"> <!-- 1st Row -->
								<div class="col-md-4">

									<div class="form-group">
										<h5>Name<span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="name" class="form-control" required="" > 
										</div>		 
									</div>
								</div>
								
								<div class="col-md-4">

									<div class="form-group">
										<h5>Groups<span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="feegroup_id" id="feegroup_id" required="" class="form-control">
												<option value="">Select One</option>
												@foreach ($groups as $group)
												<option value="{{$group->id}}">{{$group->name}}</option>	
												@endforeach
												
												 
											</select>
										</div>	
									</div>	
								</div>
								<div class="col-md-4">

									<div class="form-group">
										<h5>Types<span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="feetype_id" id="feetype_id" required="" class="form-control">
												<option value="">Select One</option>
												@foreach ($types as $type)
												<option value="{{$type->id}}">{{$type->name}}</option>	
												@endforeach
												 
											</select>
										</div>	
									</div>		 
								</div> 
							</div>
							
	  
							<div class="row"> <!-- 9th Row -->




									<div class="col-md-4">

										<div class="form-group">
											<h5>Due Date<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="date" name="due_date" class="form-control" required="" > 
											</div>		 
										</div>
									</div>

									<div class="col-md-4">

										<div class="form-group">
											<h5>Amount<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="number" name="amount" class="form-control" required="" > 
											</div>		 
										</div>
									</div>


									<div class="col-md-4">

										<div class="form-group">
											<h5>Description<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="description" class="form-control" > 
											</div>		 
										</div>
									</div>
									
									

							</div>
							<div class="row"> <!-- 9th Row -->




								<div class="col-md-6">

									<div class="form-group">
										<h5>Select Fine Type:<span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="radio"  name="drone" value="none">
											<label for="none">None</label>
											<input type="radio"  name="drone" value="percentage">
											<label for="percentage">Percentage</label>
											<input type="radio"  name="drone" value="fixed">
											<label for="percentage">Fix Amount</label>
										</div>		 
									</div>
								</div>
								<div class="col-md-3">

									<div class="form-group">
										<h5>Percentage<span class="text-danger">*</span></h5>
										<div class="controls">
									  		<input type="text" name="gaddress" class="form-control"  > 
									  	</div>	
									</div>
								</div>
								<div class="col-md-3">

									<div class="form-group">
										<h5>Fine Amount<span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="gaddress" class="form-control"  > 
										</div>
									</div>
								</div>
							</div>
                      
							<div class="text-xs-right">
								<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						   </div>

					
					
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>





@endsection