@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
	<div class="container-full">
	
        <section class="content">
                                                                                                		
            <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">Add Postal Receive</h4>                 
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                                                
                             <form method="post" action="{{ route('store.postalreceive') }}" enctype="multipart/form-data">
                             	@csrf 
                                <div class="row">
                                	<div class="col-12">

                                        <div class="row">        
                                            <div class="col-md-6">
                                                    
                                                <div class="form-group">
                                                    <h5>From Title<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="from_title" class="form-control" required="" >			
										    		</div>		 
                                                </div>
                                                    
                                            </div> 
                                                
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Reference No<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                	<input type="text" name="reference_no" class="form-control" required="" >      
											     	</div>		 
                                                </div>
                                                  
                                            </div>  
										</div> 
          			  
										<div class="row">     
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Address<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                	<input type="text" name="address" class="form-control" required="" >        
												    </div>		 
                                                </div>
                                                  
                                            </div>    
                                                
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Note<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                	<input type="text" name="note" class="form-control" required="" >            	</div>		 
                                                </div>
                                                  
                                            </div>   
										</div>   
                                 
										<div class="row">   
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>to Title<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                	<input type="text" name="to_title" class="form-control" required="" >  
												    </div>		 
                                                </div>
                                                  
                                            </div>    
                                                                                                
                                            <div class="col-md-6">
                                                            
                                                <div class="form-group">
                                                    <h5>Date<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="date" class="form-control" required="" > 
                                                    </div>		 
                                                </div>
                                                  
                                            </div>   
										</div>  	   
                                                
										<div class="row"> 
											<div class="col-md-6"> 
                                                
                                                {{-- <div class="form-group">
                                                	<label for="exampleInputFile">Attach Document</label>
                                                		<div><div class="dropify-wrapper"><div class="dropify-message"></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input class="filestyle form-control" type="file" name="file" autocomplete="off"><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                		</div>
                                                		<span class="text-danger"></span>
												</div>			   --}}
                                                <div class="form-group">
                                                    <h5> Image<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="logo" >
                                                    </div>
                                                </div> 
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