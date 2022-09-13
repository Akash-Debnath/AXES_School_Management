@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">	

        <section class="content">           
            <div class="box">
                    <div class="box-header with-border">
                    <h4 class="box-title">Edit Hostel Room</h4>
                    </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col">
      
                            <form method="post" action="{{ route('update.hostelroom',$editData->id) }}" enctype="multipart/form-data">
                                @csrf   
                                @method('PUT')                                                                
                                        <div class="row">
                        
                                                <div class="col-md-6">
                                                  
                                                    <div class="form-group">
                                                        <label>Room Number / Name<small class="req"> *</small></label>
                                                        <input id="room_no" name="room_no" placeholder="" type="text" class="form-control" value="{{ $editData->room_no }}">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                                            
                                                <div class="col-md-6">
                                              
                                                    <div class="form-group">
                                                      <h5>Hostel<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                               <select name="hostel_name" required="" class="form-control">
                                                               <option value="" selected="" disabled="">Select</option>
                                                               <option value="East" @if($editData->hostel_name=="East") Selected @endif>East</option>
                                                               <option value="West" @if($editData->hostel_name=="West") Selected @endif>West</option>
                                                               <option value="South" @if($editData->hostel_name=="South")Selected  @endif>South</option>	
                                                               <option value="North"@if($editData->hostel_name=="North")Selected @endif>North</option> 
                                                               </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> <!-- // end form group -->
                                        <div class="row">
                    
                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <h5>Room Type<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="room_type"  class="form-control">
                                                        <option value="" selected="" disabled="">Select</option>
                                                        <option value="Single Bed">Single Bed</option>
                                                        <option value="Double Bed">Double Bed</option>
                                                        <option value="Three Bed">Three Bed</option>	 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                        
                                            <div class="col-md-6">
                                                    
                                                <div class="form-group">
                                                    <label>Number Of Bed <small class="req"> *</small></label>
                                                    <input id="name" name="no_of_bed" placeholder="" type="text" class="form-control" value="{{ $editData->no_of_bed }}">
                                                    <span class="text-danger"></span>
                                                </div>
            
                                            </div>
                                        </div> <!-- // end form group -->
                                       <div class="row">
                  
                                           <div class="col-md-6">
                                                  
                                                <div class="form-group">
                                                  <label>Cost Per Bed <small class="req"> *</small></label>
                                                  <input id="cost_per_bed" name="cost_per_bed" placeholder="" type="text" class="form-control" value="{{ $editData->cost_per_bed }}">
                                                  <span class="text-danger"></span>
                                                </div>
                                                      </select>        
                                           </div>
                                            
                  
                  
                                           <div class="col-md-6">
                                                  
                                                <div class="form-group">
                                                   <label>Description<small class="req"> *</small></label>
                                                   <input id="description" name="description" placeholder="" type="text" class="form-control" value="{{$editData->description}}">
                                                   <span class="text-danger"></span>
                                                </div>
                                           </div>
                                       </div> <!-- // end form group -->
                  
                  
                                    </div>
                                </div> <!-- end Row -->
                                
                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                                    </div>
                    </form>
                

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
