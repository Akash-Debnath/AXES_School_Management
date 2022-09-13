@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
    <div class="container-full">
		
        <section class="content">
                                 		
            <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Edit Vehicle</h4>                        			  
                </div>
                        		
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                        
                            
								<form method="post" action="{{ route('update.vehicles',$editData->id) }}" enctype="multipart/form-data">
									@csrf   
									@method('PUT') 

                        	    <div class="row">
                        	    	<div class="col-12">

                                        <div class="row">                                                              	                                      	            		                                    
                        	                <div class="col-md-6">
                                            
                                                <div class="form-group">
                                                    <label>Vehicle Number<small class="req"> *</small></label>
                                                    <input id="name" name="vehicle_no" placeholder="" type="varchar" class="form-control" value="{{ $editData->vehicle_no }}">
                                                    <span class="text-danger"></span>
                                                </div>
                        	                      
                         	                </div>                                
                        	                    		 
                        	                <div class="col-md-6">
                                            
                                                <div class="form-group">
                                                    <label>Vehicle Model<small class="req"> *</small></label>
                                                    <input id="name" name="vehicle_model" placeholder="" type="varchar" class="form-control" value="{{ $editData->vehicle_model }}">
                                                    <span class="text-danger"></span>
                                                </div>
                        	                    		
                        	                </div> 
										</div> 

                                        <div class="row">      
                        	                <div class="col-md-6">
                                            
                                                <div class="form-group">
                                                    <label>Driver Name<small class="req"> *</small></label>
                                                    <input id="name" name="driver_name" placeholder="" type="text" class="form-control" value="{{ $editData->driver_name }}">
                                                    <span class="text-danger"></span>
                                                </div>
                                            
                                            </div> 
                                            
                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label>Driver License<small class="req"> *</small></label>
                                                    <input id="name" name="driver_licence" placeholder="" type="varchar" class="form-control" value="{{ $editData->driver_licence }}">
                                                    <span class="text-danger"></span>
                                                </div>
                                              
                                            </div>
										</div>    
                                            
										<div class="row"> 
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label>Driver Contact<small class="req"> *</small></label>
                                                    <input id="name" name="driver_contact" placeholder="" type="text" class="form-control" value="{{ $editData->driver_contact}}">
                                                    <span class="text-danger"></span>
                                                </div>
                                              
                                            </div>    
                                            
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label>Note<small class="req"> *</small></label>
                                                    <input id="name" name="note" placeholder="" type="text" class="form-control" value="{{ $editData->note}}">
                                                    <span class="text-danger"></span>
                                                </div>
                                              
                                            </div> 
										</div>   
										
                         	        </div>
								</div>
                                                                                                	            						 
                        	    <div class="text-xs-right">
                        	    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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