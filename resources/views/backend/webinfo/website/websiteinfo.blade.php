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
			  <h4 class="box-title">Website Information </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('update.Websiteinfo',$data->id) }}" enctype="multipart/form-data">
	 	@csrf 
					  <div class="row">
						<div class="col-12">	
 

 	
 		    <div class="row"> <!-- 1st Row -->
                
                <div class="col-md-8">

                    <div class="form-group">
                        <h5>Website Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                                <input type="text" name="name" value="{{ $data->name }}" class="form-control" required="" > 
                        </div>		 
                    </div>

                </div> <!-- End Col md 4 -->
                
                

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Mobile Number <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="mobile" value="{{ $data->mobile }}" class="form-control" required="" > 
                        </div>		 
                    </div>

                </div> 
	  
 			

 
 
 			
 		</div> <!-- End 1stRow -->






	    <div class="row"> <!-- 2nd Row -->
 			
 			<div class="col-md-4">

                <div class="form-group">
                    <h5>Phone Number <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="phone" value="{{ $data->phone }}" class="form-control" required="" > 
                    </div>		 
                </div>

 			</div> <!-- End Col md 4 -->


			<div class="col-md-4">

                <div class="form-group">
                   <h5>Email <span class="text-danger">*</span></h5>
                   <div class="controls">
                       <input type="email" name="email" value="{{ $data->email }}" class="form-control" required="" > 
                   </div>		 
               </div>
             
            </div>  <!-- End Col md 4 -->
            <div class="col-md-4">

                <div class="form-group">
                    <h5>Address <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="address" value="{{ $data->address }}" class="form-control" required="" > 
                    </div>		 
                </div>
        
        </div> <!-- End Col md 4 -->
 
 			
 		</div> <!-- End 2nd Row -->













            <div class="row"> <!-- 5TH Row -->		
                    <div class="col-md-3">

                        <div class="form-group">
                            <h5>Logo Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="logo" class="form-control" id="logo" >  
                            </div>
                        </div>
                
                    </div> <!-- End Col md 4 --> 


                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage1" src="{{ url('public/upload/website/',$data->logo) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

                            </div>
                        </div>
                    
                    </div> <!-- End Col md 4 --> 
                    <div class="col-md-3">

                        <div class="form-group">
                            <h5>Icon Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="icon" class="form-control" id="icon" >  
                            </div>
                        </div>
                
                    </div> <!-- End Col md 4 --> 


                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage" src="{{ url('public/upload/website/',$data->icon) }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

                            </div>
                        </div>
                    
                    </div> <!-- End Col md 4 --> 
            
                        
            </div> <!-- End 5TH Row -->
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="description" id="description" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
                                    {{ $data->description }} 
                                </textarea>
                            </div>
                    </div>
                
                </div> 

            </div>
             <div class="row">
                            <div class="col-md-12">
            
                                <div class="form-group">
                                    <h5>Marquee Message <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="marqmessage" id="marqmessage" class="form-control" required="" placeholder="Textarea text" aria-invalid="false">
                                                {{ $data->marqmessage }} 
                                            </textarea>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#logo').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
    $(document).ready(function(){
		$('#icon').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
