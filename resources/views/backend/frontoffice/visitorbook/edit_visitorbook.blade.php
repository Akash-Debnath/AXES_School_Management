@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->


        <section class="content">
        
            <div class="box">

            	<div class="box-header with-border">
            	  <h4 class="box-title">Edit Visitor Book</h4> 
            	</div> 
            	<div class="box-body">
            		<div class="row">
            			<div class="col">
                       	                 	
            	            <form method="POST" action="{{ route('update.visitorbook',$editData->id) }}" enctype="multipart/form-data">
								@csrf
                                @method('PUT')
            	                <div class="row">
            	                	<div class="col-12">

                                      <div class="row">
            	                        <div class="col-md-6">
                                     
             	                         	 <div class="form-group">
            	                                <h5>Purpose<span class="text-danger">*</span></h5>
            	                                <div class="controls">
            	                                    <select name="purpose"  required="" class="form-control">
            	                                   		<option value="" selected="" disabled="">Select</option>
            	                                   		<option value="TELL ME SOME BODY"@if($editData->purpose=="TELL ME SOME BODY")Selected @endif>TELL ME SOME BODY</option>
                                                        <option value="ADMISSION" @if($editData->purpose=="ADMISSION")Selected @endif>ADMISSION</option>
            	                                   		<option value="RESULT">RESULT</option>
                                                           <option value="RESULT" @if($editData->purpose=="RESULT")Selected @endif>RESULT</option>
            	                                   		<option value="FEES"@if($editData->purpose=="FEES")Selected @endif>FEES</option>
            	                                   		<option value="Purpose Information"@if($editData->purpose=="Purpose Information")Selected @endif>Purpose Information</option>
            	                                   		 
            	                                   	</select>
            	                                </div>		 
            	                           </div> 
            	                  
             	                		</div> <!-- End Col md 4 --> 
                            
                            
            	                		<div class="col-md-6">
                            
            	                			<div class="form-group">
            	                			    <h5>Name<span class="text-danger">*</span></h5>
            	                			    <div class="controls">
                                                    <input type="text" name="name" class="form-control" required="" value={{ $editData->name }}>  
            	                			    </div>		 
            	                			</div>
                            
                                        </div> 
									  </div> 
                            
                            
									  <div class="row">
                                        <div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>Phone<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
                                                    <input type="varchar" name="phone" class="form-control" required="" value={{ $editData->Phone }}> 
                                        	</div>		 
                                        </div>
                              
                                          </div>    
                            
                            
            	                		  <div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>ID Card<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
                                                    <input type="number" name="id_card" class="form-control" required="" value={{ $editData->id_card }}>  
                                        	    </div>		 
                                        	</div>
                              
                                          </div>    
									  </div>
                            
									  <div class="row">
            	                		<div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>Number of People<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
                                                    <input type="text" name="no_of_people" class="form-control" required="" value={{ $editData->no_of_people }} >  
                                        	    </div>		 
                                        	</div>
                              
                                        </div>    
                            
                            
                            
            	                		<div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>Date<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
                                        	    <input type="date" name="date" class="form-control" required="" value={{ $editData->ddate }} > 
                                        	    </div>		 
                                        	</div>
                              
                                        </div>  
									  </div> 
										
										
									  <div class="row">                          
										<div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>In Time<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
													<input type="time" name="in_time" class="form-control" required="" value={{ $editData->in_time }}> 
                                        	    </div>		 
                                        	</div>
                              
                                        </div>
									
                            
            	                		<div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>Out Time<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
													<input type="time" name="out_time" class="form-control" required="" value={{ $editData->in_time }} >  
                                        	    </div>		 
                                        	</div>
                              
                                        </div>    
									  </div> 
                            
									  <div class="row">
            	                		<div class="col-md-6">
                                        
                                        	<div class="form-group">
                                        	    <h5>Email<span class="text-danger">*</span></h5>
                                        	    <div class="controls">
                                                    <input type="text" name="email" class="form-control" required="" value={{ $editData->email }}>  
                                        	    </div>		 
                                        	</div>
                              
                                        </div> 
										<div class="col-md-6">
                                        
											<div class="form-group">
												<h5>Note<span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="note" class="form-control" required="" value={{ $editData->note }}>  
												</div>		 
											</div>
							  
										   </div>										
									  </div>

									  <div class="row"> <!-- 5TH Row -->


										
										
										
													 
												 <div class="col-md-4">
										
												 <div class="form-group">
													<h5>Image <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="file" name="image" class="form-control" id="image" >  </div>
											</div>
											  
												</div> <!-- End Col md 4 --> 
										
										
										<div class="col-md-4">
										
												 <div class="form-group">
												<div class="controls">
											<img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 
										
											 </div>
											 </div>
											  
													 </div> <!-- End Col md 4 --> 
										 
													 
												 </div> <!-- End 5TH Row -->
            	                  
             	                	</div>
								</div>
                            
            	                						 
            	                <div class="text-xs-right">
            	                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
            	                </div>
								

            	            </form>
                            
            	        </div>
            	    </div>
            	</div>
            </div>
           
        </section>
            
            
             
             
            	  
    </div>
  </div>

  <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection