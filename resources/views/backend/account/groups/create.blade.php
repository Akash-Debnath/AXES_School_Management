@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Group</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('account.group.store') }}" enctype="multipart/form-data">
	 	@csrf
            <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Group Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" > 
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>

				</div>
                <div class="col-6">	
					<div class="form-group">
						<h5>Class <span class="text-danger">*</span></h5>
						<div class="controls">
							<select name="clid" required="" class="form-control">
							<option value="" selected="" disabled="">Select Class</option>
							@foreach($data as $class )
							<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach	 
							</select>
						</div>
					</div> <!-- // end form group -->
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
						<!-- /.row -->

						<div class="row">
							<div class="col-md-12">

								<div class="form-group">
									<h5>Description <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea name="description" id="description" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
												
											</textarea>
										</div>
								</div>
							
							</div> 

						</div>


		

  
					
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			  		 
			  <div class="text-xs-right">
				<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
			   </div>

              </form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>





@endsection
