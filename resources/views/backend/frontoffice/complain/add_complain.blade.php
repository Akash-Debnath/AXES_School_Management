@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
    <div class="container-full">
		
        <section class="content">
                                 		
            <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Add Complain</h4>                        			  
                </div>
                        		
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                        
                        	<form method="post" action="{{ route('store.complain') }}" enctype="multipart/form-data">
                        	    @csrf 
                        	    <div class="row">
                        	    	<div class="col-12">

                                        <div class="row">                                                              	                                      	            		                                    
                        	                <div class="col-md-6">
                                            
                         	                    <div class="form-group">
                        	                        	<h5>Complain Type<span class="text-danger">*</span></h5>
                        	                        <div class="controls">
                        	                            <select name="complain_type" id="complain_type" required="" class="form-control">
                        	                        		<option value="" selected="" disabled="">Select</option>
                        	                        		<option value="Simple 1">Simple 1</option>
                        	                        		<option value="Simple 2">Simple 2</option>
                        	                        		<option value="Simple 3">Simple 3</option>
                        	                        		<option value="Simple 4">Simple 4</option>                       	                        	                 	                        		 
                        	                        	</select>
                        	                        </div>		 
                        	                    </div> 
                        	                      
                         	                </div>                                
                        	                    		 
                        	                <div class="col-md-6">
                                            
                        	                    <div class="form-group">
                        	                    	<h5>Source<span class="text-danger">*</span></h5>
                        	                    	<div class="controls">
                        	                    	    <select name="source" id="source" required="" class="form-control">
                        	                    			<option value="" selected="" disabled="">Select</option>
                        	                    			<option value="TELL ME SOME BODY">TELL ME SOME BODY</option>
                        	                    			<option value="Simple 2">Simple 2</option>
                        	                    			<option value="Simple 3">Simple 3</option>
                        	                    			<option value="Simple 4">Simple 4</option>	   
                        	                    		</select>
                        	                    	</div>		 
                        	                    </div> 
                        	                    		
                        	                </div> 
										</div> 

                                        <div class="row">      
                        	                <div class="col-md-6">
                                            
                        	                    <div class="form-group">
                        	                    	<h5>Complain By<span class="text-danger">*</span></h5>
                        	                    	<div class="controls">
                        	                    	    <input type="text" name="complain_by" class="form-control" required="" > 
													</div>		 
                        	                    </div>
                                            
                                            </div> 
                                            
                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Contact<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                        	                    	    <input type="text" name="contact" class="form-control" required="" >             	
												    </div>		 
                                                </div>
                                              
                                            </div>
										</div>    
                                            
										<div class="row"> 
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Date<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="date" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                              
                                            </div>    
                                            
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Description<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                        	                    	    <input type="text" name="description" class="form-control" required="" >  
												    </div>		 
                                                </div>
                                              
                                            </div> 
										</div>   
                                              
										<div class="row"> 
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Action Taken<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                        	                    		<input type="text" name="action_taken" class="form-control" required="" > 
													</div>		 
                                                </div>
                                              
                                            </div>    
                                            
                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Assigned<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                        	                    		<input type="text" name="assigned" class="form-control" required="" >
													</div>		 
                                                </div>
                                              
                                            </div>   
										</div> 
                                                
										<div class="row"> 
											<div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Email<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                       <input type="text" name="email" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                              
                                            </div> 

                        	                <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <h5>Note<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                       <input type="text" name="note" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                              
                                            </div> 
										</div>

                                        <div class="row"> 
											<div class="col-md-12">

                        	                <div class="form-group">
                        	                    <label for="exampleInputFile">Attach Document</label>
                        	                    <div>
													<div class="dropify-wrapper"><div class="dropify-message"></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input class="filestyle form-control" type="file" name="file" autocomplete="off"><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                        	                    </div>
                        	                    <span class="text-danger"></span>
                        	            	</div>	 
										</div>

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