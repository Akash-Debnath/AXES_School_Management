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

	 <form method="post" action="{{ route('account.bankaccount.store') }}" enctype="multipart/form-data">
	 	@csrf
            <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Account No <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="acc_no" class="form-control" > 
                                @error('acc_no')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>

				</div>
                <div class="col-6">	
					<div class="form-group">
						<h5>Account Title <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="acc_title" class="form-control" required> 
							@error('acc_title')
							<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
					
					</div>
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
			  <div class="row">
                <div class="col-6">	
                        <div class="form-group">
                            <h5>Branch Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="bbrname" class="form-control" > 
                                @error('bbrname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                        </div>

				</div>
                <div class="col-6">	
					<div class="form-group">
						<h5>Bank <span class="text-danger">*</span></h5>
						<div class="controls">
							<select name="bid" required="" class="form-control">
							<option value="" selected="" disabled="">Select Bank</option>
							@foreach($data as $bank )
							<option value="{{ $bank->id }}">{{ $bank->sort }}</option>
							@endforeach	 
							</select>
						</div>
					</div> <!-- // end form group -->
                    	 
						

				</div>
				<!-- /.col -->
			  </div>
						<!-- /.row -->

						<div class="row">
							<div class="col-md-4">

								<div class="form-group">
									<h5>Branch Code<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="bbrcode" class="form-control" > 
										@error('bbrcode')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
							
							</div> 
							<div class="col-md-8">

								<div class="form-group">
									<h5>Branch Location<span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea name="bbrlocation" id="bbrlocation" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
												
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
