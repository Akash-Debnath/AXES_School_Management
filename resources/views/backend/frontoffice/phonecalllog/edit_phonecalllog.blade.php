@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
	<div class="container-full">
	
        <section class="content">                                                                                              		 
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Phone Call Log</h4>                 
                </div>
                                                			
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                                                
                            
                                <form method="POST" action="{{ route('update.phonecalllog',$editData->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                <div class="row">
                                    <div class="col-12">	

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                	<h5>Name<span class="text-danger">*</span></h5>
                                                	<div class="controls">
                                                		<input type="text" name="name" class="form-control" required="" value={{  }} >
                                                	</div>		 
                                                </div>
                                                
                                            </div> 
                                                            
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Phone<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                		<input type="text" name="phone" class="form-control" required="" >
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
                                                    <h5>Next Follow Up Date<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                		<input type="text" name="next_follow_up_date" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                                  
                                            </div>    
                                                
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Call Duration<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                		<input type="text" name="call_duration" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                                  
                                            </div>   
										</div>  
                                                
                                                
										<div class="row">
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Note<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="note" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                                  
                                            </div>    
                                                             
                                            <div class="form-group">
                                                <label for="pwd">Call Type</label>
                                                
                                                	<small class="req"> *</small>  
                                                
                                                		<label class="radio-inline"><input type="radio" name="call_type" value="Incoming"> Incoming</label>
                                                
                                                		<label class="radio-inline"><input type="radio" name="call_type" value="Outgoing"> Outgoing</label>
                                                                                                				
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