@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Hostel</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('store.hostel.hosteldetail') }}" enctype="multipart/form-data">
	 	@csrf
				        <div class="row">
                        

                            <div class="col-md-6">
                                 
                                <div class="form-group">
                                     <label>Hostel Name<small class="req"> *</small></label>
                                     <input id="hostel_name" name="hostel_name" placeholder="" type="text" class="form-control" value="">
                                     <span class="text-danger"></span>
                                 </div>
                               </select>
                             </div>
                                 
                             <div class="col-md-6">
                             
                                 <div class="form-group">
                                     <h5>Type <span class="text-danger">*</span></h5>
                                     <div class="controls">
                                         <select name="type" required="" class="form-control">
                                         <option value="" selected="" disabled="">Select</option>
                                         <option value="Girls">Girls</option>
                                         <option value="Boys">Boys</option>	 
                                         </select>
                                     </div>
                                 </div>
                             </div>
                        </div> <!-- // end form group -->                          
                     <div class="row">
 
                         <div class="col-md-6">
                                 
                             <div class="form-group">
                                 <label>Address<small class="req"> *</small></label>
                                 <input id="address" name="address" placeholder="" type="text" class="form-control" value="">
                                 <span class="text-danger"></span>
                             </div>
                                      
                         </div>
                        
 
 
                         <div class="col-md-6">
                                 
                             <div class="form-group">
                                 <label>Intake<small class="req"> *</small></label>
                                 <input id="name" name="intake" placeholder="" type="text" class="form-control" value="">
                                 <span class="text-danger"></span>
                             </div>
                                     </select>        
                         </div>
                     </div> <!-- // end form group -->
                
 
                     <div class="row">
                         <div class="col-md-12">
                                 
                             <div class="form-group">
                                  <label>Description<small class="req"> *</small></label>
                                  <input id="description" name="description" placeholder="" type="text" class="form-control" value="">
                                  <span class="text-danger"></span>
                             </div>
                         
                         </div>
                     </div> <!-- // end form group -->
                     <div class="text-xs-right">
                         <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                     </div>
                 </form>
					</div>
				</div>

							</div> 
                        </form>
                    </div>

                </div>

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
